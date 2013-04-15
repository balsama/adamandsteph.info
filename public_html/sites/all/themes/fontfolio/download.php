<?php

//Determine the path to the file. We need the whole server path.
$path = $_GET['path'];
$path_parts = explode('/', $path);
$name = array_pop($path_parts);
$name_parts = explode('.', $name);
$type = array_pop($name_parts);
$file_name = implode('-', $name_parts);

//print $file_name . '||' . $type;

//Set the headers (to force download) and download the file.
header('Content-disposition: attachment; filename=' . $name);
header('Content-type: application/' . $type);
readfile($path);
?>
