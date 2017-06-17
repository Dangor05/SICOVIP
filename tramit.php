<?php 
session_start();
if (isset($_SESSION['tp'])) {
$cedp=$_SESSION['pr'];
$cedt=$_SESSION['cd'];
$eml=$_SESSION['em'];
$mpr=$_SESSION['mpr'];
 ?>
 <?php
 include("php/svtrmt/expli.php");
  if ($cons!=null):?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>Tramite</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<body>
	<header>
		<?php include ("php/navcli.php"); ?>
	</header>
	 <div class="container">
      <div class="row">
    <div class="col-md-4 col-md-offset-4"> 
      		<br><br>
	  <form action="php/svtrmt/agreTrami.php" method="post" enctype="multipart/form-data">
	  <center><h3>Registro de documentos</h3></center><br>
	  <div class="form-group">
	  <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
	  <!--<p><?php// echo $_SESSION['Cedp']; ?></p>-->
	  <input type="text" class="form-control" readonly value="<?php echo $cedp;?>" name ="pr"></div>
	  <div class="form-group"> 
	  <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
	  <!--<p><?php //echo $_SESSION['Cedt']; ?></p>-->
	  <input type="text" class="form-control" value="<?php echo $cedt;?>" readonly="" name="cedc"></div>
	  <div class="form-group">
	  <label for="sv03ptario">Nº consecutivo:</label>&nbsp
	  <input type="text" class="form-control" readonly="" value="<?php echo $cons; ?>" name="conse" required></div>
	  <div class="form-group">
	  <label for="sv03ptario">Nº Finca:</label>&nbsp
	  <input type="text" class="form-control" name="fin" placeholder="Nº Finca" required onkeypress="return Numeros(event)"></div>
	  <div class="form-group">
	  <label for="sv03ptario">Documentos:</label>&nbsp
	  <input type="file"  name="pln" placeholder="Plano" required="" ></div>
	  <div class="form-group">
	  <input type="hidden" class="form-control" value="<?php echo $eml;?>" name="mail">
	  <input type="hidden" class="form-control" value="<?php echo $mpr;?>" name="pmail"></div>
	  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	  <button type="submit" class="btn btn-primary">Finalizar Tramite</button>
	  </form>
	  <?php else:?>
  <p class="alert alert-danger">404 no se encuentra</p>
<?php endif;?>
		
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