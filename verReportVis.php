<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Reportes</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<?php	
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }?>
	
<div class="container">
<div class="row">
<div class="col-md-5">
<br><br><br><br>
	
<!-- Button trigger modal -->

<div class="container">
      <div class="row">
      <div class="col-md-5 col-md-offset-3">
<center><h2>Reportes de Visados</h2></center>
<form class="form-inline" class="navbar-form navbar-left" role="search" action="buscarReportVis.php">
    
	 <div class="Form-group" class="col-sm-7">
	  <br>
	  	   <h4>Desde</h4><input type="date"  name="V" class="form-control" placeholder="AAAA/MM/DD" required>

	  	 <div class="Form-group" 
		 <div id="next_button" align="left">
		 <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i>&nbsp;</button> 
		 <br>
		 </div> </div>
		    
		   <h4>Hasta</h4><input type="date" name="VS" class="form-control" placeholder="AAAA/MM/DD" required>
		 
     
	 </div>
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