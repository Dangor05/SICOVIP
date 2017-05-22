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
		<h2>Datos Personales</h2>
		<br>

<?php include "php/configura.php";?>

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