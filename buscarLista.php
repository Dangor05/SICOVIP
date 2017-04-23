<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
		<title>.: Busqueda Visado:.</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<?php 
	   session_start();
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbarconlista.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include "php/navh2conlista.php";
      } 
	 ?>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
		<h2>BUSCAR</h2>
		<a class="btn btn-default" href="verLista.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</a>


<?php include "php/busquedaconlista.php"; ?>  

</div>
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
	</body>
</html>