<?php
$filename = isset($_GET['sec']) ? $_GET['sec'] : 'inicio';
if(substr($filename, 0, 1) == "_" || $filename == "index" || !file_exists($filename.".php")){
    $filename = "inicio";
}
echo $filename;