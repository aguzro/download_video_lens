<?php 
$dir = (isset($_GET['dir']))?$_GET['dir']:"C:/xampp/htdocs/pruebas_descarga/archivos_prueba/"; //Crea la variable directorio, que busca los archivos de la ruta especificada 
$directorio=opendir($dir); // abre directorio
while ($archivo = readdir($directorio)) { // mientras la variable archivo sea igual a la lectura del directorio
	$megas = round(filesize("$dir/$archivo") / 1048576, 1);
if(!is_dir("$dir/$archivo")) // si no es un directorio, se creará ese bloque de código en el index.php
echo "<tr><td><a class='btn-floating btn-large waves-effect waves-light' href='videos.php?archivo=" .$archivo ."'><i class='material-icons'>file_download</i></a></td><td><span class='title'>" . $archivo . "</span></td><td>" .date("d/m/Y - H:i:s", filectime("$dir/$archivo")) ."</td><td>" .$megas ."&nbsp;MB </td><td><a class='btn-floating btn-large waves-effect waves-light' href=''><i class='material-icons'>delete</i></a></td></tr>"; 
} 
closedir($directorio); // deja de leer el directorio
?>
