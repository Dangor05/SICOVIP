<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
 <!DOCTYPE html>
 <html lang="es">
 <head> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Visado Oficio</title>
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
      include ('php/navbar.php'); 
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }

	 ?>

     <div class="container">
<div class="row">
<div class="col-md-5">
<br>
   
         

    <div class="container">
      <div class="row">
      <div class="col-md-4 col-md-offset-2">
           <center> <h2>Visados</h2> </center></div>
      <div class="col-md-5 col-md-offset-3">
          <h3 class="modal-title">Tipo de busqueda:</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <form method="post" class="navbar-form navbar-left" role="search" action="./buscarvis.php">
       
     <div class="form-group row">

     <select name="vis" class="form-control" name="vis" >
    <option value="1">Cedula</option>
    <option value="2">Consecutivo</option>
    <option value="3">N° Finca</option>
    <option value="4">N° Miunta</option>
    </select>
     </div>&nbsp&nbsp&nbsp&nbsp
     <div class="form-group">
           <input type="text" name="s" class="form-control" required="" placeholder="Buscar">
      </div>
      <button type="submit" class="btn btn-default">&nbsp;<i class="glyphicon glyphicon-search"></i></button>
    </form>
  </div>
     </div>
     </div>
       </div>
     </div>
     </div>

<div class="container-fluid">
<div class="row">
<div class="col-md-12">
		
<!-- Button trigger modal -->
 <!-- <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->
<br>


<?php include "php/svvsdo/convis.php"; ?>
<?php if($query->num_rows>0):?>
  <center>
  <div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
 <div style="width: 98%" class="well well-sm text-left">
    
   <div class="content-loader">
<table align="center" cellspacing="0" width="100%" id="example" class="table table-striped table-bordered table-condensed small">
<thead>
  <th>Cedula</th>
  <th>Nombre</th>
  <th>Consecutivo</th>
  
  <th>NºFinca</th>
  
  
  <th>Solicitud</th>
  <th>Modificado</th>
  <th>Estado</th>
  
  
  <th></th>
    </thead>
<?php while ($r=$query->fetch_array()):?>
<tr>

  <td style="width: 5%"><?php echo $r["sv03cedp"]; ?></td>
  <td style="width: 7%"><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
  <td style="width: 5%"><?php echo $r["sv08conse"]; ?></td>
  
  <td style="width: 5%"><?php echo $r["sv04nfin"]; ?></td>
  
  <td style="width: 5%"><?php echo $r["sv08fchs"]; ?></td>
  <td style="width: 5%"><?php echo $r["sv08fumt"]; ?></td>
  <td style="width: 5%"><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
  
  
  <td style="width:3%;">
  <a href="./editar.php?sv09npln=<?php echo $r["sv08conse"];?>" class="btn btn-sm btn-warning">Editar</a>
  </td>
  </td>
</tr>
<?php endwhile;?>
</table>
</div>
</div>
</div></div></center>
<?php else:?>
  <center><div align="center" class="col-xs-7"> 
  <p class="alert alert-warning">No hay resultados</p>
  </div></center>
<?php endif;mysqli_close($con);?>

</div>
</div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
    $('#example').DataTable();

    $('#example')
    .removeClass( 'display' )
    .addClass('table table-bordered');
});
</script>
<script type="text/javascript">
$(document).ready(function(){

    $(".edit-link").click(function Carga() 
    {
        $("#example tbody tr").each(function (index) 
        {
            var campo1, campo2, campo3 campo4, campo5, campo6;
            $(this).children("td").each(function (index2) 
            {
                switch (index2) 
                {
                    case 0: campo1 = $(this).text();
                            break;            
                }
                $(this).css("background-color", "#ECF8E0");
            });
        });
        alert(campo1);
    });
 });  
</script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>