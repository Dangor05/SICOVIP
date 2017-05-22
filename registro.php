<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,firefox=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>Registro</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<body>
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

<header>
     <nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  
    <a class="navbar-brand" href="./"><b>SICOVIP</b></a>
  </div>
</div>
</nav>
</header>

    <div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-3">  

    <form role="form-inline" action="php/agreRegisto.php" method="POST" onsubmit="return validar();" > 
     <div class="form-group">
   <center><h3>Registro</h3></center>  
  <div class="form-group" >
  <label for="sv01cedc">Cedula :</label>
   <input type='text' class="form-control" id="ced" name='cedt' maxlength="10" onkeypress="return Numeros(event)" placeholder="514660302" required></div>
  <div class="form-group"> 
 <label for="sv01cdtpc">Carnet IT :</label>
   <input type='text' class="form-control" id="cit" name='cit' maxlength="9" onkeypress=""   placeholder="IT10643" required></div>

  <div class="form-group">
  <label for="sv01nomc">Nombre :</label>
    <input type='text' class="form-control" id="nom" name='nomt' maxlength="12" onkeypress="return Letras(event)" required></div>

  <div class="form-group">
  <label for="sv01apdc">Apellidos :</label>
  <input type='text' class="form-control" id="ape" name='apelt' maxlength="30" onkeypress="return Letras(event)" required></div>

   <div class="form-group">
   <label for="sv01emc">Correo :</label>
   <input type='email' class="form-control" id="ema" name='emat' placeholder="ejmplo@ejemplo.com" required></div>

   <div class="form-group">
   <label for="sv01telc">Telefono :</label>
   <input type='text' class="form-control" id="tel" name='telt' onkeypress="return Numeros(event)" placeholder="26808888" required></div>

      <div class="form-group">
   <label for="pass">Contraseña :</label>
   <input type='password' class="form-control" id="clave" minlength="8" maxlength="16" id="pass" name='pass' required>
   <span id="mjscl" class="help-block"></span></div>

      <div class="form-group">
   <label for="pass">Confirmar la contraseña:</label>
   <input type='password' class="form-control" id="contra" minlength="8" maxlength="16" name='vpass' required>
   <span id="mjsct" class="help-block"></span>
   <span id="mjs" class="help-block"></span></div>


   </div>
<a class="btn btn-danger" href="index.php"><span class="glyphicon glyphicon-remove-circle"></span> &nbsp;Cancelar</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary text-right">Continuar</button>
    
  </form>

    </div>
    </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
      
      
      
      <script type="text/javascript" src="public\bootstrap\bootstrap\js/bootstrap.min.js"></script>
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
        return false;
      }
      if ($("#contra").val().length < 7 || $("#contra").val().length > 12) 
      {
        $("#mjsct").show();
        $("#mjsct").text("Las contraseñas no puede ser menor que 8, ni mayor a 12");
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
       <script type="text/javascript">
        var v=true;
        $("span.help-block").hide();

        function verificar(){

            var v1=0,v2=0,v3=0,v4=0,v5=0,v6=0, v7=0, v8=0;
            v1=validacion('cit');
            v2=validacion('nom');
            v3=validacion('apl');
            v4=validacion('ced');
            v5=validacion('ema');
            //v6=validacion('tel');
            v7=validacion('pass');
            v8=validacion('con');
            if (v1===false || v2===false || v3===false || v4===false || v5===false ||  v7===false || v8===false ) {
                 $("#exito").hide();
                 $("#error").show();
            }else{
                window.location("php/agreRegisto.php");
            }
            /*total=v1+v2+v3+v4+v5+v6;
            if (v && total>=6) {
                $("#error").hide();
                $("#exito").show();
            }else{
                 $("#exito").hide();
                 $("#error").show();
            }
            
            
            validacion('nombres');
            validacion('dni');
            validacion('email');
            validacion('genderRadios');
            validacion('carrera');
            if (v) {
                alert("los campos estan validados")
            }
            else{
                alert("los campos no estan validados");
            }*/

        } 
        
        function validacion(campo){
            var a=0;
            
            if (campo==='cit')
            {
                codigo = document.getElementById(campo).value;
                if( codigo == null || codigo.length == 0 ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                   
                }
                else
                {
                    if(!/^\w+$/.test(codigo)) {

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No es Carnet de Topografo").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");

              
                        return false;
                    }
                    else{

                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
             
                        return true;
                    }
                    
                    
                }
                
            }
            if (campo==='nom'){
                apellido = document.getElementById(campo).value;
                if( apellido == null || apellido.length == 0 || !/^[A-z]+$/.test(apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese su nombre").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
                        if (campo==='apl'){
                apellido = document.getElementById(campo).value;
                if( apellido == null || apellido.length == 0 || !/^[A-z]+$/.test(apellido) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
            if (campo==='ced'){
                dni = document.getElementById(campo).value;
                if( dni == null || dni.length == 0 || /^\s+$/.test(dni) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else
                {
                    if( isNaN(dni) ) 
                    {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("No acepto letras").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }
                    else{
                        if (!(/^\d{9,15}$/.test(dni))) 
                        {
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                            $('#'+campo).parent().children('span').text("Debe ingresar solamente 9 digitos").show();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                            return false;
                        }
                        else{
                            $("#glypcn"+campo).remove();
                            $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                            $('#'+campo).parent().children('span').hide();
                            $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                            return true;
                        }
                        
                    }  
                } 
            }
            if (campo==='ema'){
                email = document.getElementById(campo).value;
                if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algun Email").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        
                    return false;
                    
                }
                else{
                    if (!(/\S+@\S+\.\S+/.test(email))) {
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                        $('#'+campo).parent().children('span').text("Ingrese un Email valido").show();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                        return false;
                    }
                    else{
                        $("#glypcn"+campo).remove();
                        $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                        $('#'+campo).parent().children('span').hide();
                        $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                        return true;
                    }
                }

            }
            if (campo==='tel'){
                opciones = document.getElementsByName(campo);
                if( opciones == null || opciones.length == 0) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Ingrese algo").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else
                {
                   $("#glypcn"+campo).remove();
                   $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                   $('#'+campo).parent().children('span').hide();
                   $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    
                 return true;
 
                }  
            }
                 if (campo==='pass'){
                contraseña = document.getElementById(campo).value;
                if( contraseña == null || contraseña.length == 0 || !/^\w+$/.test(contraseña) ) {
                    
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("La contraseña debe contener letras y numeros").show();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
                    return false;
                    
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;
                    
                } 
            }
            if (campo==='con'){

                contra= document.getElementById('pass').value;
                indice = document.getElementById(campo).value;
                if( indice == null || indice != contra ) {
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-error has-feedback");
                    $('#'+campo).parent().children('span').text("Las contraseñas deben ser exactamente iguales").show();
                    return false;
                }
                else{
                    $("#glypcn"+campo).remove();
                    $('#'+campo).parent().parent().attr("class", "form-group has-success has-feedback");
                    $('#'+campo).parent().children('span').hide();
                    $('#'+campo).parent().append("<span id='glypcn"+campo+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
                    return true;

                }
            }
            
            
           
        }
    </script>
</body>
</html>