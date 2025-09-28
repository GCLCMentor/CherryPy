<?php
header('Content-Type: text/plain');

$mainDir = 'python_exercises'; // Directory to save the code files
$filename = $_GET['file'];

$mainFilePath = $mainDir . '/' . $filename;

if (file_exists($mainFilePath)) {
    echo file_get_contents($mainFilePath);
} else {
    // Devuelve un error HTTP 404 para ser más estándar.
    header("HTTP/1.0 404 Not Found");
    echo "File not found.";
}
?>
