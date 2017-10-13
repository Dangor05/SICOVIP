<?php
session_start();
if(isset ($_SESSION['cd']) || isset ($_SESSION['sv07cdtp']) ) {
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Reporte CIT</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	
	<?php 

	if (isset($_SESSION['cd'])) {
		include("php/navini.php");
	}elseif (isset($_SESSION['sv07cdtp'])) {
	
      include "php/navbar.php"; 
      }




	 ?>
	
<div class="container">
<div class="row">
<div class="col-md-5">
<br><br><br><br>
	
<!-- Button trigger modal -->
 <div class="container">
      <div class="row">
      <div class="col-md-5 col-md-offset-3">  
<center><h2>Reportes de solicitudes</h2></center>
<form class="form-inline" class="navbar-form navbar-left" role="search" action="buscarReportClient.php">
    

	 <div class="Form-group" class="col-sm-7">
	  <br><br>
	  	   <h3>Carnet IT-Cliente</h3><br>
				
	  	   <input type="text"  name="S" class="form-control" placeholder="CIT" required>&nbsp; <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button> 
		
     
	 </div>
	 
      </form>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>