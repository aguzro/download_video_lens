<?php
$files = glob("C:/xampp/htdocs/pruebas_descarga/archivos_prueba/*"); // get all file names
foreach($files as $file){ // iterate files
  if(is_file($file))
    unlink($file); // delete file
}
?>