<?php
// Incluimos el chequeo de autenticación para acceder a la sesión.
include '../auth_check.php';

header('Content-Type: application/json');

// 1. Validar que la sesión del estudiante exista.
if (!isset($_SESSION['name'])) {
    echo json_encode(['error' => 'No active student session found.']);
    exit;
}
$userName = $_SESSION['name'];

// 2. Función para limpiar el nombre (para que coincida con el formato del archivo).
function cleanStringPHP($str) {
    $replacements = [
        'ñ' => 'n', 'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
        'Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U'
    ];
    $str = strtr($str, $replacements);
    $str = preg_replace('/\\s+/', '-', $str);
    $str = preg_replace('/[^a-zA-Z0-9-_]/', '', $str);
    return $str;
}

$cleanStudentName = cleanStringPHP($userName);

// 3. Buscar los archivos en el directorio.
$filesDir = 'python_exercises';
$pattern = $filesDir . '/*_' . $cleanStudentName . '_*.py';
$files = glob($pattern);

// 4. Preparar la lista de archivos, excluyendo los backups.
$mainFiles = [];
if ($files) {
    foreach ($files as $file) {
        if (strpos($file, '_bak_') === false) {
            // Guardamos la ruta completa del archivo, no solo el nombre.
            $mainFiles[] = $file;
        }
    }
}

// --- ¡NUEVA LÓGICA DE ORDENAMIENTO! ---
// 5. Ordenar la lista de archivos por fecha de modificación (del más nuevo al más antiguo).
if (!empty($mainFiles)) {
    // usort() nos permite ordenar un array con una función personalizada.
    usort($mainFiles, function($a, $b) {
        // filemtime() obtiene la fecha de última modificación del archivo.
        // Al restar B de A, los archivos más nuevos (con timestamp más alto) irán primero.
        return filemtime($b) - filemtime($a);
    });
}

// 6. Extraer solo los nombres de archivo de las rutas completas.
$fileList = array_map('basename', $mainFiles);

// 7. Devolver la lista de archivos ya ordenada como una respuesta JSON.
echo json_encode($fileList);
?>