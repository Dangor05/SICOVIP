<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Tramite Propietario</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
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
  <?php        if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
<div class="container">
<div  class="row">
<div  class="col-md-4">

<form class="form-inline" method="GET" class="navbar-form navbar-left" role="search" action="Propietario.php">
    

   <div class="Form-group" class="col-sm-10">
         <h4>Propietarios Registrados</h4><input type="text"  name="ced" class="form-control" placeholder="Cedula">&nbsp; <button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i></button> 
   </div>
   
      </form>
        <?php include("php/svtop/buscapro.php"); ?>
    
    <div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-3">  

<form role="form-inline" Class="form" action="php/svtop/addPropie.php" method="POST"> 
     <center><h3>Registro Propietario</h3></center>
   <div class="form-group">
   <label for="ced">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" name='cedp' value="<?php echo $ced; ?>" maxlength="15" onkeypress="return Numeros(event)" required></div>
<div  class="form-group">
    <label for="nom">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" name='nomp' value="<?php echo $nom; ?>" maxlength="25" required onkeypress="return Letras(event)" required></div>
<div class="form-group">
    <label for="apl">Apellidos</label>&nbsp
    <input type='text' class="form-control" id="apl" name='apelp' value="<?php echo $apl; ?>" maxlength="25" required onkeypress="return Letras(event)"></div>
<div class="form-group">
    <label for="eml">Email</label>&nbsp
   <input type='email' class="form-control" id="eml" name='emap' value="<?php echo $eml; ?>" maxlength="50"  ></div>
<div class="form-group">
    <label for="tel">Telefono</label>&nbsp
   <input type='tel' class="form-control" id="tel" name='telp' value="<?php echo $tel; ?>" maxlength="10" onkeypress="return Numeros(event)" ></div>
   <div class="form-group">

    <label for="tip">Tipo Usuario</label>
    <select name="tipro" class="form-control" id="tip" name="tipro" >
    <option value="1">Fisico</option>
    <option value="2">Juridico</option></select></div>
<br>
   <center>
<button type="submit" class="btn btn-default">Continuar</button>
    </center>
    </div>
  </form>

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