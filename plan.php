<?php 
  if (isset($_GET['id']) && isset($_GET['plan'])) {
  	$root="archivos/".$_GET['id']."/";
  	$file = $_GET['plan'];
  	$path = $root.$file;

  	header("Content-type: application/pdf");
    header("Content-Disposition: inline; filename=$file");
    header("Content-Transfer-Encoding: binary");
    header("Acept-Ranges: bytes");
    readfile($path);
    

  	}

 /* if (is_file($path)) {
 $size = filesize($path);
 if (function_exists('mime_content_type')) {
 $type = mime_content_type($path);
 } else if (function_exists('finfo_file')) {
 $info = finfo_open(FILEINFO_MIME);
 $type = finfo_file($info, $path);
 finfo_close($info);
 }
 if ($type == '') {
 $type = "application/force-download";
 }
 // Definir headers
 header("Content-Type: $type");
 header("Content-Disposition: attachment; filename=$file");
 header("Content-Transfer-Encoding: binary");
 header("Content-Length: " . $size);
 // Descargar archivo
 readfile($path);
} else {
 die("El archivo no existe.");
}*/

/*  	header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$file");
    readfile($path);*/
?>

