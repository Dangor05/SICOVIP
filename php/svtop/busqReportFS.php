<?php

include('php/lib/conexion.php');
$mysql = new conexion();
			$con=$mysql->get_connection();
 
$user=$_GET['S'];
$fs=$_GET['FS'];
$sql1= "SELECT DISTINCT  a.sv03cedp, a.sv03nomp, a.sv03apdp,
                		 b.sv04nfin,
                 		 DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                  		 d.sv02code
  
		 FROM sv03ptario a, sv04reqtos b, sv08trmte d,sv09vsdo e
		  
		 WHERE d.sv03cedp= a.sv03cedp
		 AND b.`sv04nfin`=d.`sv04nfin`
	
		 AND sv08fchs   BETWEEN '$user'  AND  '$fs'";

$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
	<div class="col-md-8 col-md-offset-2">
	<div class="container-fluid">
	<div class="table-responsive">   
    <div style="width: 99%" class="well well-sm text-left">
    
   <div class="content-loader">
        
        <table align="CENTER" cellspacing="0" style="width: 99%" id="example" class="table table-striped table-hover">
<thead>
	<th>Cedula</th>
	<th>Nombre Apellidos</th>
	<th>N°Finca</th>
	<th>Solicitud</th>
	<th>Estado</th>
	
	
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td style="width: 3%"><?php echo $r["sv03cedp"]; ?></td>
	<td style="width: 10%"><?php echo $r["sv03nomp"];?> <?php echo $r["sv03apdp"]; ?></td>
	<td style="width: 4%"><?php echo $r["sv04nfin"]; ?></td>
	<td style="width: 6%"><?php echo $r["sv08fchs"]; ?></td>
	<td style="width: 4%"><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>
	

</tr>
<?php endwhile;mysqli_close($con);?>
</table>
</div>
</div>
</div>
</div>

<?php else:?>
	<br>
	 <div class="col-md-5">
    <p class="alert alert-warning">No hay resultados</p>
    </div>
<?php endif;?>
