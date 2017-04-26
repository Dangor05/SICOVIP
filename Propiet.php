<?php
session_start();
if(isset ($_SESSION['tp'])) {
?>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
<script type="text/javascript">
    function Letras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    especiales = [8, 37, 39, 46, 6];
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial){
        return false;
      }
}
</script>
<script type="text/javascript">
function Numeros(e)
{
var key = window.Event ? e.which : e.keyCode
return ((key >= 48 && key <= 57) || (key==8))
}
</script>

  </head>
  <body>
  <?php include("php/navcli.php"); ?>

  
   <div class="container">
      <div class="row">
      <div class="col-md-4 col-md-offset-4"> 
          <br><br>
<form Class="form" action="php/agrePropie.php" method="POST" onsubmit="return validar();" > 
     <center><h3>Registro Propietario</h3></center><br>
  <div class="form-group">

   <label for="cedp">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedp' maxlength="10" required></div>
<div  class="form-group">
	  <label for="nomp">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" name='nomp' maxlength="15" required onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="apdp">Apellidos</label>&nbsp
    <input type='text' class="form-control" id="apl" name='apelp' maxlength="25" onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="emp">Email</label>&nbsp
   <input type='email' class="form-control" id="eml" name='emap' maxlength="50" required ></div>
<div class="form-group">
    <label for="telp">Telefono</label>&nbsp
   <input type='text' class="form-control" id="tel" name='telp' maxlength="10" onkeypress="return Numeros(event)" required=""></div>
<div class="form-group">
    <label for="sv06codp">Tipo Usuario</label>
    <select name="tipro" class="form-control" id="tip" name="tipro" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option></select></div>

<br>
  <a href="inicio.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="submit" class="btn btn-default">Continuar</button>
    
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
<?php }else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>