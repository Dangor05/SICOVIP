<?php 
  if (isset($_GET['id']) && isset($_GET['plan'])) {
  	$root="archivos/".$_GET['id']."/";
  	$file = $_GET['plan'];
  	$path = $root." ".$file;
    //$path = "archivos/".$_GET['id']."/".$_GET['plan'];

    if (file_exists($path)) {
      header('Content-Description: File Transfer');
      header("Content-type: application/pdf");
      header("Content-Disposition: inline; filename=$file");
      header("Content-Transfer-Encoding: binary");
      header("Acept-Ranges: bytes");
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      readfile($path);
    }else{
     // print "<script>alert(\"Archivo no encontrado.\");window.location='Home.php';</script>";
     // print "<script>console.log(".$path.")</script>";
      print "<script>alert(\"$path\");</script>";
    }

  	
    

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

