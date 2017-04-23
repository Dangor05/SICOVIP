<?php

include "conexion.php";

$user_id=null;
$sql1= "SELECT DISTINCT  a.sv03cedp, a.sv03nomp, a.sv03apdp,e.sv08conse,e.sv09npln,b.sv04nfin,e.sv09nfol,e.sv09npre,DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                 DATE_FORMAT(e.sv09fvdp,'%d-%m-%Y') AS sv09fvdp,d.sv02code,e.sv09mnt, e.sv07cdtp

 
 FROM sv03ptario a, sv04reqtos b, sv06tipprop c, sv08trmte d,sv09vsdo e, `sv05tipusu` u
  
 WHERE d.sv03cedp= a.sv03cedp
 AND e.sv08conse= d.sv08conse
 AND  u.sv05codu= e.sv05codu
 AND b.sv04nfin = e.sv04nfin
 AND d.sv02code='8'";
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
	<th>NºMinuta</th>
	<th>NºFinca</th>
	<th>NºFolio</th>
	<th>Localización</th>
	<th>Solicitud</th>
	<th>Visado</th>
	<th>Estado</th>
	<th>Minuta</th>
	<th>CIT</th>
	<th></th>
		</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>

	<td style="width: 5%"><?php echo $r["sv03cedp"]; ?></td>
	<td style="width: 10%"><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv08conse"]; ?></td>
	<td style="width: 5%;"><?php echo $r["sv09npln"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv04nfin"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv09nfol"]; ?></td>
	<td style="width: 3%"><?php echo $r["sv09npre"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv08fchs"]; ?></td>
	<td style="width: 5%"><?php echo $r["sv09fvdp"]; ?></td>
	<td style="width: 5%"><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	<td style="width: 5%"><a href="php/mnt.php?id=<?php echo $r['sv03cedp']?>&mnt=<?php echo $r['sv09mnt']?>"><?php echo $r["sv09mnt"]; ?></a></td>
	<td style="width: 5%"><?php echo $r["sv07cdtp"]; ?></td>
	<td style="width:3%;">
	<a href="./editar.php?sv09npln=<?php echo $r["sv09npln"];?>" class="btn btn-sm btn-warning">Editar</a>
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

