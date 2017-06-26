<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Configuraciones</title>
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
	      if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      } 

	 ?>
<div class="container">
<div class="row">
<div class="col-md-6">
		
<?php include "php/svtop/configura.php";?>
<?php if($person!=null):?>
<form role="form" method="post" action="php/svtop/actualiUsu.php">
<div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-3">
<h2>Datos Personales</h2>
    <br>


  <div class="form-group">
    <label for="sv07cdtp">Codigo IT</label>
     <p><?php echo $person->sv07cdtp; ?></p>
    <input type="hidden" class="form-control"  value="<?php echo $person->sv07cdtp; ?>" name="sv07cdtp" >
  </div>
<div class="form-group">
    <label for="sv07cedt">Cedula</label>
    <p><?php echo $person->sv07cedt; ?></p>
    <input type="hidden" class="form-control" value="<?php echo $person->sv07cedt; ?>" name="sv07cedt" >
  </div>
    <div class="form-group">
    <label for="sv07nomt">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07nomt; ?>" name="sv07nomt" >
  </div>
  <div class="form-group">
    <label for="sv07apdt">Apellidos</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07apdt; ?>"  name="sv07apdt" >
  </div>
    <div class="form-group">
    <label for="sv07apdt">Correo:</label>
    <input type="text" class="form-control" value="<?php echo $person->sv07emt; ?>"  name="sv07emt" >
  </div>
  <div class="form-group">
    <label for="sv07pass">Contraseña :</label>
    <input type="password" id="clave" class="form-control"  name="sv07pass" >
    <span id="mjscl" class="help-block"></span>
  </div>
    <div class="form-group">
    <label for="sv07pass">Repita contraseña</label>
    <input type="password" id="contra" class="form-control" name="valpass" >
    <span id="mjsct" class="help-block"></span>
    <span id="mjs" class="help-block"></span>
  </div>

<input type="hidden" name="id" value="<?php echo $person->sv07cdtp; ?>">
<center>
<button type="submit" class="btn btn-default">Actualizar</button>
  </center>
  </div>
  </div>
  </div>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;mysqli_close($con);?>

</div>
</div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script>
  $(document).on("ready",inicio);
  function inicio()
  {
   $("#clave").keyup(valclave);
    $("#contra").keyup(validar);
  }

  function validar()
  {
    if($("#contra").val() == $("#clave").val()){
        $("#mjs").hide();
      }else{
        $("#mjs").show();
        $("#mjs").text("Las contraseñas no coinciden");
      }
      if ($("#contra").val().length < 3 || $("#contra").val().length > 12) 
      {
        $("#mjsct").show();
        $("#mjsct").text("Las contraseñas no puede ser menor que 3, ni mayor a 12");
      }
      else{
        $("#mjsct").hide();
      }
  }

  function valclave()
  {
      if ($("#clave").val().length < 3 || $("#clave").val().length > 12) 
      {
        $("#mjscl").show();
        $("#mjscl").text("Las contraseñas no puede ser menor que 3, ni mayor a 12");
      }
      else{
        $("#mjscl").hide();
      }

  }

 
</script>

	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>