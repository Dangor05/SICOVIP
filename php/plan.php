<?php 
  if (isset($_GET['id']) && isset($_GET['plan'])) {
  	$root="../archivos/".$_GET['id']."/";
  	$file =$_GET['plan'];
  	$path = $root.$file;
  	header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$file");
    readfile($path);
  	}
?>