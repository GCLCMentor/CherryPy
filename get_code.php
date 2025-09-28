<?php
header('Content-Type: text/plain');

$saveDir = 'python_exercises'; // Directory to save the code files
$filename = $_GET['file'];

$filepath = $saveDir . '/' . $filename;

if (file_exists($filepath)) {
    echo file_get_contents($filepath);
} else {
    echo "File not found.";
}
?><?php
