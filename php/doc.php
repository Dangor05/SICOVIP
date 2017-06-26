<?php 

$root="../archivos/".$_GET['id']."/";
$file =basename($_GET['doc']);
$path = $root." ".$file;


      header('Content-Description: File Transfer');
      header("Content-type: application/force-download");
      header("Content-Disposition: inline; filename=$file");
      header("Content-Transfer-Encoding: binary");
      header("Acept-Ranges: bytes");
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      readfile($path);



 
    
?>