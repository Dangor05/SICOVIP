<?php

session_start();
$cit=$_SESSION['sv07cdtp'];
$codu=$_SESSION['sv05codu'];
include ('php/svvsdo/obtvisado.php');
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>SICOVIP</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
  </head>
  <script type="text/javascript">
function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8) || (key==45))
}
</script>

  <body>
  <?php    
     if ($_SESSION['sv05codu'] == 1) {
      include "php/navbar.php"; 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } ?>
<<div class="container">
<div class="row">
<div class="col-md-7 col-md-offset-2">
    <h2>Visado</h2>
<?php if($person!=null):?>
<center></center>
<form role="form" method="post" action="php/svvsdo/addVisado.php" onsubmit="return validar();" enctype="multipart/form-data">
  <div class="form-group row">
  <label for="conse" class="col-xs-2 col-form-label">Consecutivo</label>
  <div class="col-xs-4">
   <input id="conse" type="text" class="form-control" readonly="" value="<?php echo $person->sv08conse; ?>" name="conse" required>
  </div>
  <label for="clnt" class="col-xs-2 col-form-label">Topografo</label>
  <div class="col-xs-4">
  <input type="text" class="form-control" readonly="" id="clnt" value="<?php echo $person->sv01cedc; ?>" name="cedc" required>
  </div>
</div>
  <div class="form-group row">
  <label for="ptrio" class="col-xs-2 col-form-label">Propietario</label>
  <div class="col-xs-4">
   <input type="text" class="form-control" readonly="" id="ptrio" value="<?php echo $person->sv03cedp; ?>" name="cedp" required>
 </div>
  <label for="fin" class="col-xs-2 col-form-label">N°Finca</label>
  <div class="col-xs-4">
   <input type="text" class="form-control" readonly="" id="fin" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
 </div>
  </div>
  <div class="form-group row">
    <label for="npln" class="col-xs-2 col-form-label">Nº Minuta de Plano</label>
    <div class="col-xs-4">
    <input type="text" id="npln" class="form-control" name="npln" required="">
  </div>
 
    <label for="" class="col-xs-2 col-form-label">Nº Folio Real</label>
    <div class="col-xs-4">
    <input type="text" id="fol" class="form-control" name="nfol">
  </div>
   </div>
  <div class="form-group row">
 
    <label for="" class="col-xs-2 col-form-label">Localizacion Municipal</label>
    <div class="col-xs-4">
    <input type="text" id="pred" class="form-control" name="npred">
  </div>
  
    <label for="" class="col-xs-2 col-form-label">Oficio</label>
    <div class="col-xs-4">
    <input type="file" class="form-control-file" name="mnt">
  </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-xs-2 col-form-label">Fecha</label>
    <div class="col-xs-4">
    <input type="date" class="form-control" value="<?php echo date("Y-m-d");?>" name="fch">
  </div>
  
    <label for="" class="col-xs-2 col-form-label">Plano Visado</label>
    <div class="col-xs-4">
    <input type="file" class="form-control-file" name="pln">
  </div>
   </div>
  <div class="form-group row">

    <label for="" class="col-xs-2 col-form-label">Impuestos</label>
    <div class="col-xs-4">
 <select name="impu" class="form-control" name="impu" >
  <option value="1">Al dia</option>
 <option value="2">Retrasado</option>
 </select>
</div>
    <label for="" class="col-xs-2 col-form-label">Estado</label>
    <div class="col-xs-4">
 <select name="std" class="form-control" name="std" >
 <option value="8">Oficio</option>
  <option value="5">Aprobado</option>
 <option value="6">Rechazado</option>
 <option value="7">En Proceso</option>
 </select>
</div>
 </div>
  <div class="form-group row">
    <label for="" class="col-xs-2 col-form-label">Revisado por:</label>
    <div class="col-xs-4">
    <input type="text" class="form-control" readonly="" value="<?php echo $GLOBALS['cit'];?>" name="cit">
    <input type="hidden" class="form-control" value="<?php echo $GLOBALS['codu'];?>" name="codu">
  </div>
  </div>
  <center>
  <div class="col-md-3"></div>
  <div class="col-md-3">
   <a class="btn btn-danger" href="php/svvsdo/regreso.php?id=<?php echo $person->sv08conse;?>"> Regresar</a>
  </div>
 
  <div class="col-md-3">
   <button type="submit" class="btn btn-success">Revisado</button>
    
  
  </div>
 </Center> 
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