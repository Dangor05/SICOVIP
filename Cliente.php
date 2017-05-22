<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<TITLE>Tramite</TITLE>
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

       <script>
 $(document).ready(function(){   
        /*$( "#ced" ).autocomplete({
              source: function(resquest, response){
                $.ajax({
                  url:"srchClient.php",
                  dataType:"json",
                  data:{q:resquest.term},
                  success:function(data){
                    response(data);
                  }
                });
              } ,
              minLength: 1,
              select:function(event ui){
                alert("selecciono: "+ ui.item.label);
              }
          });*/
        $( "#ced" ).keyup(function(){
            if($( "#ced" ).val()){
              $.ajax({
                  method:"post",
                  url:"php/autClient.php",
                  dataType:"json",
                  data:{q:$(this).val()},
                  done:function(data){
                    var jsonobj=JSON.parse(data);
                    console.info(jsonobj);
                  }
                });
            }
        });
                 
      });
        </script>
</head>
<body>
  <?php
     if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }  ?>
  <div class="container">
  <div  class="row">
<div  class="col-md-4">
  
    <form class="form-inline" method="GET" class="navbar-form navbar-left" role="search" action="Cliente.php">
      <div class="Form-group" class="col-sm-10">
       <h4>Topografos Registados</h4><input type="text"  name="ced" class="form-control" placeholder="Cedula"> &nbsp;<button  type="submit" class="btn btn-default" >&nbsp;<i class="glyphicon glyphicon-search"></i></button>    
   </div>   
      </form>
      <?php include("php/buscacli.php"); ?>
       <div class="container">
      <div class="row">

      <div class="col-md-5 col-md-offset-3">  

     <form role="form-inline" action="php/addCliente.php" method="POST" onsubmit="return valciente()" > 
     <div = class="group">
 
  <center><h3>Registro Cliente</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula</label>&nbsp
   <input type='text' class="form-control" id="ced" value="<?php echo $ced; ?>"  name='cedt' maxlength="10" onkeypress="return Numeros(event)" required></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Codigo IT</label>&nbsp
   <input type='text' class="form-control" id="cit" value="<?php echo $cit; ?>" name='cit' maxlength="10" required></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre</label>&nbsp
    <input type='text' class="form-control" id="nom" value="<?php echo $nom; ?>" name='nomt' maxlength="12" onkeypress="return Letras(event)" required></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos</label>&nbsp
  <input type='text' class="form-control" id="ape" value="<?php echo $apl; ?>" name='apelt' maxlength="20" onkeypress="return Letras(event)" required></div>

   <div class="form-group">
   <label for="sv01emc">Email</label>&nbsp
   <input type='email' class="form-control" id="ema" value="<?php echo $eml; ?>" name='emat' required></div>

   <div class="form-group">
   <label for="sv01telc">Telefono</label>
   <input type='text' class="form-control" id="tel" value="<?php echo $tel; ?>" name='telt' onkeypress="return Numeros(event)"></div>

<a class="btn btn-danger" href="Home.php"><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-default text-right">Continuar</button>
    
   </section>
   </div>
  </form>
 </div>
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
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>