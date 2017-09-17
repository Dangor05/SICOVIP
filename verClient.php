<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
	?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Archivos Visados</title>
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
	 <center>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Archivos Visados</h2>
<!-- Button trigger modal -->
  <!--<a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>-->
<br><br>
 

<?php include "php/svvsdo/concli.php"; ?>
<?php if($query->num_rows>0):?>
	
 <div style="width: 90%" class="well well-lg text-left">

    <div class="table-responsive">
   <div class="content-loader">
<table align="center" cellspacing="0" width="100%" id="example" class="table table-striped table-bordered table-condensed mediun">
<thead> 
	<th>Cedula</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>N°Finca</th>
	<th>Plano</th>
	<th>Documentos</th>
	<th>Estado</th>
	<th>Minuta</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td style="width: 5%"><?php echo $r["sv03cedp"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv03nomp"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv03apdp"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv04nfin"]; ?></td>
	<td style="width: 5%"><a href="php/plan.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04apln']?>"><?php echo $r["sv04apln"];?></a></td>
	<td style="width: 6%"><a href="php/doc.php?id=<?php echo $r['sv03cedp']?>&doc=<?php echo $r['sv04doc']?>"><?php echo $r["sv04doc"];?></a></td>
	
		<td style="width: 6%"><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	<td style="width: 6%"><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
		
	</td>
</tr>
<?php endwhile;?>
</table>

</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>

</div>
</div>
</div>
</center>

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

	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>