<?php
include "../lib/conexion.php";

$user=$_SESSION['sv07cdtp'];
$sql1= "SELECT sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07emt from sv07tpgfo where sv07cdtp = '$user'";
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?><?php if($person!=null):?>
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