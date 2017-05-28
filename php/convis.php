<?php

include "conexion.php";

$user=$_SESSION['sv07cdtp'];
$sql1= " SELECT a.sv03cedp, a.sv03nomp, a.sv03apdp,
 t.sv08conse,b.sv04nfin, b.sv04doc,
 DATE_FORMAT(t.sv08fchs,'%d-%m-%Y') AS sv08fchs,
 DATE_FORMAT(t.sv08fumt,'%d-%m-%Y') AS sv08fumt, 
 v.sv07cdtp, t.sv02code

 FROM sv08trmte t, sv09vsdo v, sv03ptario a, sv04reqtos b
 WHERE t.sv08conse = v.sv08conse 
AND t.sv04nfin = b.sv04nfin
AND v.sv04nfin = t.sv04nfin
AND t.sv03cedp = a.sv03cedp
 AND sv07cdtp='$user'";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="col-md-11 col-md-offset-1">
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
	<td style="width: 10%"><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
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
</div></div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif;mysqli_close($con);?>

