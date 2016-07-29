<?php
$dir = "C:/Users/dell 1/Videos/"; $handle = opendir($directorio); 

while ($archivo = readdir($hadle))  {   
if (is_file("$dir/$archivo")) { 
	unlink("$dir/$archivo"); 
	}
} 
?>