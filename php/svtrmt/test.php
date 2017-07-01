<?php

		$cedpr=$_POST['pr'];
		$plano=$_FILES['doc'];
		$pln=$_FILES['doc']['name'];


		
$dir ="../../archivos/".$cedpr."/ ";

$path=$dir.$pln;
 if (file_exists($dir)) {
		 	echo "Existe";
		 	echo $path;
		 	move_uploaded_file($plano['tmp_name'],$path);
		 }else{
		 	echo "No Existe";
		 	echo "<br>";
		 	echo $dir;
		 	mkdir($dir,7055);
		move_uploaded_file($plano['tmp_name'],$path);

		 }

?>