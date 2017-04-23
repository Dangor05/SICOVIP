<?php

session_start();
$cit=$_SESSION['sv07cdtp'];
$codu=$_SESSION['sv05codu'];
include ('php/obtvisado.php');
?>
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
  <script type="text/javascript">
function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8))
}
</script>

  <body>
  <?php    
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } ?>
<div class="container">
<div class="row">
<div class="col-md-4">
    <h2>Visado</h2>
<?php if($person!=null):?>

<form role="form" method="post" action="php/addVisado.php" onsubmit="return validar();" enctype="multipart/form-data">
  <div class="form-group">
  <label for="">Consecutivo</label>
   <input type="text" class="form-control" readonly="" value="<?php echo $person->sv08conse; ?>" name="conse" required>
  </div>
  <div class="form-group">
  <label for="">Topografo</label>
  <input type="text" class="form-control" readonly="" value="<?php echo $person->sv01cedc; ?>" name="cedc" required>
  </div>
  <div class="form-group">
  <label for="">Propietario</label>
   <input type="text" class="form-control" readonly="" value="<?php echo $person->sv03cedp; ?>" name="cedp" required>
  </div>
  <div class="form-group">
  <label for="">N°Finca</label>
   <input type="text" class="form-control" readonly="" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
  </div>
  <div class="form-group">
    <label for="npln">Nº Minuta</label>
    <input type="text" id="npln" class="form-control" name="npln" required="">
  </div>
  <div class="form-group">
    <label for="">Nº Folio Real</label>
    <input type="text" id="fol" class="form-control" name="nfol">
  </div>
  <div class="form-group">
    <label for="">Localizacion Municipal</label>
    <input type="text" id="pred" onkeypress="return Numeros(event)" class="form-control" name="npred">
  </div>
    <div class="form-group">
    <label for="">Oficio</label>
    <input type="file" class="form-control-file" name="mnt">
  </div>
  <div class="form-group">
    <label for="">Fecha</label>
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="fch">
  </div>
      <div class="form-group">
    <label for="">Plano Visado</label>
    <input type="file" class="form-control-file" name="pln">
  </div>
  <div class="form-group">
    <label for="">Impuestos</label>
 <select name="impu" class="form-control" name="impu" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
  </div>
    <div class="form-group">
    <label for="">Estado</label>
 <select name="std" class="form-control" name="std" >
 <option value="8">Oficio</option>
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 </select>
  </div>
  <div class="form-group">
    <label for="">Revisado por:</label>
    <input type="text" class="form-control" readonly="" value="<?php echo $GLOBALS['cit'];?>" name="cit">
    <input type="hidden" class="form-control" value="<?php echo $GLOBALS['codu'];?>" name="codu">
  </div>
  <button type="submit" class="btn btn-default">Revisado</button>
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