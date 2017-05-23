<?php

include "conexion.php";
 
$v=$_GET['V'];
$vs=$_GET['VS'];
$sql1= "SELECT DISTINCT   a.sv03cedp, a.sv03nomp, a.sv03apdp, DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                e.sv08conse,DATE_FORMAT(e.sv09fvdp,'%d-%m-%Y') AS sv09fvdp,e.sv07cdtp,d.sv02code
 
				 FROM sv03ptario a, sv04reqtos b, sv08trmte d,sv09vsdo e, `sv05tipusu` u
				  	  
				 WHERE d.`sv03cedp`= a.`sv03cedp`
				 AND e.`sv08conse`= d.`sv08conse`
				 AND  u.`sv05codu`= e.`sv05codu`
				 AND b.`sv04nfin` = e.`sv04nfin`
			     AND e.sv09fvdp  BETWEEN '$v'  AND  '$vs'";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<div class="col-md-9 col-md-offset-2">
	<div class="container-fluid">
	<div class="table-responsive">   
    <div style="width: 99%" class="well well-sm text-left">
    
   <div class="content-loader">
        
  <table align="CENTER" cellspacing="0" style="width: 98%" id="example" class="table table-striped table-hover">
  <thead>

	<th>Cedula</th>
	<th>Nombre Apellidos</th>
	<th>Consecutivo</th>
	<th>Solicitud</th>
	<th>Visado</th>
	<th>Estado</th>
	<th>CIT</th>
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td style="width: 4%"><?php echo $r["sv03cedp"]; ?></td>
	<td style="width: 10%"><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td style="width: 3%"><?php echo $r["sv08conse"]; ?></td>
    <td style="width: 5%"><?php echo $r["sv08fchs"]; ?></td>
	<td style="width: 6%"><?php echo $r["sv09fvdp"]; ?></td>
	<td style="width: 5%"><?php if($r["sv02code"]==5)
	              {echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	<td style="width: 2%"><?php echo $r["sv07cdtp"]; ?></td>
	

</tr>
<?php endwhile;mysqli_close($con);?>
</table>
</div>
</div>
</div>
</div>
</div>

<?php else:?>
	<div class="col-md-6">
	<p class="alert alert-warning">No hay resultados</p>
	</div>
<?php endif;?>
