<?php 
//$root = 'C:\xampp\htdocs\pruebas\funciona16\Sicovip\archivos/'.$_GET['id'].'/';
if (isset($_GET['id']) && isset($_GET['plan'])) {
	
	$root="archivos/".$_GET['id']."/";
	$archivo =$_GET['plan'];
	$path = $root.$archivo;
	header("Content-type: application/octet-stream");
	header("Content-Disposition: attachment; filename=$archivo");
    readfile($path);
}

?>