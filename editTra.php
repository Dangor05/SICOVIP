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
	<body>
	<?php 
 session_start();
      if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } ?>
  <div class="container">
  <div class="row">
  <div class="col-md-4">
		<h2>Actualizar documentos</h2>
    <br>

<?php
include ('php/obtreq.php');
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/agreReins.php" enctype="multipart/form-data">
 
      <div class="form-group row">
          <label for="selecc" class="col-xs-5 form-label">Seleccione el archivo que requiere actualizar:</label>
           <div class="col-xs-5">
              <select name="opcion" class="form-control" id="opci" name="opcion" required>
              <option value="1">Todos</option>
              <option value="2">Plano</option>
              <option value="3">Cartas de Agua</option>
              <option value="4">AutoCad</option>
              </select>
             </div>
             </div>
      <div class="form-group row">
    <label class="col-xs-3 col-form-label" for="sv08conse">Consecutivo</label>
    <div class="col-xs-7">
    <p><?php echo $cn;?></p>
    <input type="hidden" id="conse" class="form-control" value="<?php echo $cn;?> " name="conse">
    <input type="hidden" id="ced" readonly="" class="form-control" value="<?php echo $person->sv03cedp;?> " name="cedp">
    </div>
     </div>
  <div class="form-group row">
    <label for="sv08conse" class="col-xs-3 col-form-label" >N° Finca:</label>
    <div class="col-xs-7">
      <input type="text" id="fin" readonly="" class="form-control" value="<?php echo $person->sv04nfin; ?>" name="nfin" required>
      </div>
  </div>
  <div class="form-group row">
    <label for="sv08fumt" class="col-xs-3 col-form-label" >Plano Agrimensura:</label>
    <div class="col-xs-7">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04apln;?>" name="pln" >
    </div>
    </div>
    <div class="form-group row">
    <label for="sv08fumt" class="col-xs-3 col-form-label" >Carta de Agua</label>
    <div class="col-xs-7">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04aact; ?>" name="acta">
    </div>
  </div>
  <div class="form-group row">
    <label for="sv01cedc" class="col-xs-3 col-form-label" >AUTOCAD</label>
    <div class="col-xs-7">
    <input type="file"  class="form-control-file" value="<?php echo $person->sv04acta; ?>" name="aact">
  </div>
  </div>
  <br>
  <div class="form-group row">
  <div class="col-xs-1"></div>
      <div class="col-xs-5"><a class="btn btn-danger" href="verlista.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Cancelar</a></div>
  <div class="col-xs-4"><button type="submit" class="btn btn-default">Actualizar</button></div>
  </div>

  

</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif; mysqli_close($con);?>

</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
	</body>
</html>