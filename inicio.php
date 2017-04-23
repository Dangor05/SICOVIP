<?php session_start();
if (isset($_SESSION['cd'])) { ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
	<title>SICOVIP</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<header>
	<?php include("php/navini.php"); ?>
</header>
<body>
<div class="container">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-md-5 col-md-offset-2">
<BR><BR><BR><BR><BR>
		<h2>Consulta de Visados</h2>
<br>
<form method="post" class="navbar-form navbar-left" role="search" action="./buscarClient.php">
    
     <div class="form-group row">
     <select name="vis" class="form-control" name="vis" >
     <option value="1">Cedula</option>
    <option value="2">Consecutivo</option>
    <option value="3">N°Finca</option>
    <option value="4">N°Minuta</option>
    </select>
     </div>&nbsp&nbsp&nbsp&nbsp
    
           <input type="text" name="s" class="form-control" placeholder="Buscar" required>
     
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>

</div>
</div>
</div>
</div><!--Fin Container-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>