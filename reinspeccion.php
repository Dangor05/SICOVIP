<?php 
session_start();
if (isset($_SESSION['cd'])) {
if (isset($_GET['id'])) {
	 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
 	<title>Resinpeccion</title>
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
 	<?php include("php/navcli.php"); ?>
 	<?php include("php/obtrequisi.php"); ?>
 </header>
 	<div class="container">
 	<div class="row">
 	<div class="col-md-3">
 	 <?php if($person!=null):?>
  		<form action="php/agreReinspeccion.php" enctype="multipart/form-data" method="POST" onsubmit="return valrequi()">
 			<div class="container">
 			<div class="form-group row">
    <label class="col-xs-1 col-form-label" for="sv08conse">Consecutivo</label>
    <div class="col-xs-2">
    <p><?php echo $cn;?></p>
    <input type="hidden" id="conse" class="form-control" value="<?php echo $cn;?> " name="conse">
    <input type="hidden" id="ced" class="form-control" value="<?php echo $person->sv03cedp;?> " name="cedp">
    </div>
     </div>
  <div class="form-group row">
    <label for="sv08conse" class="col-xs-1 col-form-label" >N° Finca:</label>
    <div class="col-xs-2">
      <input type="text" id="fin" class="form-control" readonly="" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="sv08fumt" class="col-xs-1 col-form-label" >Documentos:</label>
    <div class="col-xs-2">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04doc;?>" name="pln" >
    </div>
    </div>

   <button type="submit" class="btn btn-default">Actualizar</button>
 			</div>
 		</form>
 				<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>
 	</div>
 	</div>
 	</div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
 </body>
 </html>
 <?php } 
}else {print "<script>alert(\"Debes iniciar de para solicitar una reinspeccion.\");window.location='index.php';</script>"; }?>