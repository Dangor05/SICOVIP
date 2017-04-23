<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<title>Busqueda Visado</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<?php include("php/navini.php"); ?>
<div class="container">
<div class="row">
<div class="col-md-12">
<a class="btn btn-default" href="inicio.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>
		<h2>BUSCAR</h2>


<?php 
if (isset($_POST['vis'])) {
	if ($_POST['vis']==1) {
	include "php/busquedaconcli.php";
}elseif ($_POST['vis']==2) {
	include "php/busquedaconse.php";
}elseif ($_POST['vis']==3) {
	include "php/busquedaconfin.php";
}else{
	include "php/busquedaconpla.php";
}
}
 ?>   

</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
	</body>
</html>