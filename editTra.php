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
<?php  include('php/navbar.php');  ?>  
  <div class="container">
  <div class="row">
  <div class="col-md-4">
		<h2>Actualizar documentos</h2>
    <br>

<?php
include ('php/svtop/obtreq.php');
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/svtrmt/agreReins.php" enctype="multipart/form-data">

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
    <label for="sv08fumt" class="col-xs-4 col-form-label" >Documentacion:</label>
    <div class="col-xs-7">
    <input type="file" class="form-control-file" value="<?php echo $person->sv04doc;?>" name="pln" >
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