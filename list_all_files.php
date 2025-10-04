<?php
include '../auth_check.php';

header('Content-Type: application/json');

// 1. Verificación de seguridad (sin cambios)
if (!isset($_SESSION['user']) || strtolower($_SESSION['user']) != 'smartinezm@gimnasioloscerezos.edu.co') {
    echo json_encode(['error' => 'Access Denied.']);
    exit;
}

$filesDir = 'python_exercises';
$allPyFiles = glob($filesDir . '/*.py');
$groupedFiles = [];

// 2. Agrupar los archivos por estudiante (sin cambios)
foreach ($allPyFiles as $file) {
    $filename = basename($file);
    $parts = explode('_', $filename);

    if (count($parts) >= 3) {
        $studentName = $parts[1];
        if (!isset($groupedFiles[$studentName])) {
            $groupedFiles[$studentName] = [];
        }
        $groupedFiles[$studentName][] = [
            'filename' => $filename,
            'date' => date('d/m/Y', filemtime($file))
        ];
    }
}

// --- ¡NUEVA LÍNEA AÑADIDA! ---
// 3. Ordenar la lista de estudiantes alfabéticamente por su nombre (la llave del array)
ksort($groupedFiles);

// 4. Ordenar los archivos de cada estudiante por fecha (sin cambios)
foreach ($groupedFiles as $studentName => &$files) {
    usort($files, function($a, $b) use ($filesDir) {
        $timeA = filemtime($filesDir . '/' . $a['filename']);
        $timeB = filemtime($filesDir . '/' . $b['filename']);
        return $timeB - $timeA;
    });
}

// 5. Devolver la respuesta final
echo json_encode($groupedFiles);
?>