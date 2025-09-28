<?php
header('Content-Type: application/json');

// --- Configuración de Rutas ---
$mainDir = 'python_exercises'; // Directorio principal para los ejercicios
$backupDir = 'python_exercises/backups'; // Directorio para las copias de seguridad

// --- Creación de Directorios ---
// Nos aseguramos de que ambos directorios existan.
if (!is_dir($mainDir)) {
    if (!mkdir($mainDir, 0777, true)) {
        echo json_encode(['error' => 'Failed to create main directory.']);
        exit;
    }
}
if (!is_dir($backupDir)) {
    if (!mkdir($backupDir, 0777, true)) {
        echo json_encode(['error' => 'Failed to create backup directory.']);
        exit;
    }
}

// Leer los datos enviados desde el cliente
$data = json_decode(file_get_contents('php://input'), true);
$code = $data['code'];
$filename = $data['filename'];

// Validar que se hayan recibido los datos necesarios
if (!$code || !$filename) {
    echo json_encode(['error' => 'Code is empty or filename is missing.']);
    exit;
}

// Función para limpiar el nombre del archivo
function cleanFilename($filename) {
    $replacements = [
        'ñ' => 'n', 'á' => 'a', 'é' => 'e', 'í' => 'i', 'ó' => 'o', 'ú' => 'u',
        'Á' => 'A', 'É' => 'E', 'Í' => 'I', 'Ó' => 'O', 'Ú' => 'U'
    ];
    // Reemplazar caracteres especiales
    $filename = strtr($filename, $replacements);
    // Reemplazar espacios por guiones
    $filename = preg_replace('/\s+/', '-', $filename);
    // Eliminar caracteres no válidos
    $filename = preg_replace('/[^a-zA-Z0-9-_\.]/', '', $filename);
    return $filename;
}

// --- Lógica de Guardado y Versionado ---
if ($code) {
    // Limpiar el nombre del archivo
    $filename = cleanFilename($filename);
    // Construimos la ruta completa del archivo principal.
    $mainFilePath = $mainDir . '/' . $filename;

// 1. VERIFICAR SI EXISTE UNA VERSIÓN ANTERIOR
    if (file_exists($mainFilePath)) {
        // 2. CREAR NOMBRE PARA EL BACKUP
        // Generamos un timestamp estándar (AñoMesDía-HoraMinutoSegundo) para ordenar fácilmente.
        $timestamp = date('Ymd-His');
        $path_parts = pathinfo($filename);
        $backupFileName = $path_parts['filename'] . '_bak_' . $timestamp . '.' . $path_parts['extension'];

        // 3. MOVER LA VERSIÓN ANTERIOR A LA CARPETA DE BACKUPS
        // Usamos rename() para mover el archivo de forma eficiente.
        rename($mainFilePath, $backupDir . '/' . $backupFileName);
    }

// 4. GUARDAR EL NUEVO CÓDIGO
// Escribimos el nuevo contenido en el archivo principal.
// Esto crea el archivo si no existe, o lo crea de nuevo después de que el original fue movido.
    if (file_put_contents($mainFilePath, $code) !== false) {
        // 5. RESPUESTA DE ÉXITO
        echo json_encode(['status' => 'success', 'message' => 'File saved and versioned successfully!']);
    } else {
        // Respuesta de error si no se pudo escribir el archivo.
        echo json_encode(['error' => 'Failed to save the new file.']);
    }


/*    // Return the URL to access the code
    echo json_encode(['url' => '/get_code.php?file=' . urlencode($filename)]); */
} else {
    echo json_encode(['error' => 'No code provided.']);
}


?>