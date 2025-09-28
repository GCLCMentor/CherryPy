<?php
header('Content-Type: application/json');

$saveDir = 'python_exercises'; // Directory to save the code files
if (!is_dir($saveDir)) {
    if (!mkdir($saveDir, 0777, true)) {
        echo json_encode(['error' => 'Failed to create directory']);
        exit;
    }
}

// Leer los datos enviados desde el cliente
$data = json_decode(file_get_contents('php://input'), true);
$code = $data['code'];
$filename = $data['filename'];

// Validar que se hayan recibido los datos necesarios
if (!$code || !$filename) {
    echo json_encode(['error' => 'Code or filename is missing']);
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

if ($code) {
    // Limpiar el nombre del archivo
    $filename = cleanFilename($filename);
    $filepath = $saveDir . '/' . $filename;

    // Save the code to a file
    file_put_contents($filepath, $code);

    // Return the URL to access the code
    echo json_encode(['url' => '/get_code.php?file=' . urlencode($filename)]);
} else {
    echo json_encode(['error' => 'No code provided']);
}
?>