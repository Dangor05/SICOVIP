<?php 

$root="../archivos/".$_GET['id']."/";
$file =basename($_GET['doc']);
$path = $root." ".$file;

    header("Content-type: application/force-download");
    header("Content-Disposition: attachment; filename=$file");
      readfile($path);
    
?>