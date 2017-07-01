<?php

include('php/lib/conexion.php');
$mysql = new conexion();
      $con=$mysql->get_connection();

$user_id=null;
$sql1= "SELECT c.sv03cedp, c.sv03nomp, c.sv03apdp, a.sv08conse, b.sv04nfin, DATE_FORMAT(a.sv08fumt,'%d-%m-%Y') AS sv08fumt, a.sv02code,b.sv04doc
   FROM sv08trmte a, sv04reqtos b, sv03ptario c         
         WHERE a.sv04nfin=b.sv04nfin
         AND a.sv03cedp=c.sv03cedp
         AND a.sv02code='3' ORDER BY a.sv08fumt ASC";
$query = $con->query($sql1);
?>
<?php if($query->num_rows>0):?>
 <div class="table-responsive">
 <div style="width: 99%" class="well well-sm text-left">
    
   <div class="content-loader">
<table align="center" cellspacing="0" width="98%" id="example" class="table table-striped table-bordered table-condensed small">
<thead>
    <th>Cedula</th>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Consecutivo</th>
	<th>N°Finca</th>
	<th>Visado</th>
	<th>Documentos</th>
	<th>Estado</th>
	<th></th>
	<th></th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["sv03cedp"]; ?></td>
	<td><?php echo $r["sv03nomp"]; ?></td>
	<td><?php echo $r["sv03apdp"]; ?></td>
	<td><?php echo $r["sv08conse"]; ?></td>
	<td><?php echo $r["sv04nfin"]; ?></td>
	<td><?php echo $r["sv08fumt"]; ?></td>
	<td><a href="php/doc.php?id=<?php echo $r['sv03cedp']?>&plan=<?php echo $r['sv04doc']?>"><?php echo $r["sv04doc"];?></a></td>
	<td><?php if($r["sv02code"]==5){echo 'Aprobado';}elseif($r["sv02code"]==6){echo 'Rechazado';}elseif($r["sv02code"]==8){echo 'Oficio';}else{echo 'En proceso';} ?></td>

	<td style="width:75px;">
	<a href="reVisados.php?conse=<?php echo $r["sv08conse"];?>" class="btn btn-sm btn-info">Procesar</a>
	</td>

	<!--<td align="center"><button class="btn btn-sm btn-warning" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Editar</button></td>-->

	<td style="width:75px;">
	<a href="editTra.php?nfin=<?php echo $r["sv04nfin"];?>&con=<?php echo $r['sv08conse']?>&pr=<?php echo $r['sv03cedp']?>" class="btn btn-sm btn-warning">Editar</a>
	</td>

</tr>
<?php endwhile;?>
</table>
</div>
</div>
</div>
<?php else:?>
	<p class="alert alert-warning">No hay resultados</p>
<?php endif; mysqli_close($con);?>

    <div class="container">
        <div class="modal fade" id="modal-4" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Tramite</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Modificar" method="POST" action="php/agreReins.php" enctype="multipart/form-data">
    
          <div class="form-group row">
          
  </div>
  <div class="form-group row">
         <label for="example-text-input" class="col-xs-3 col-form-label">Consecutivo:</label>
             <div class="col-xs-7">
                <input class="form-control" type="text" id="conse" readonly="" name="conse" value="">
             </div>
             </div>
           <div class="form-group row">
          <label for="example-text-input" class="col-xs-3 col-form-label">N° Finca:</label>
            <div class="col-xs-7">
            <input class="form-control" required="required" readonly="" type="text" id="nfin" name="nfin" value="">
            </div>
            </div>
            <div class="form-group row">
            <label for="example-text-input" class="col-xs-3 col-form-label">Documentos:</label>
          <div class="col-xs-7">
            <input type="file" id="pln" name="pln" value="">
          </div>
          </div>
          <input type="hidden" name="cedp" value="">        
       <div class="form-group row"><br></div>

        <div class="form-group row">
         <div class="col-xs-9">
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button type="submit" class="btn btn-success ">Modificar</button>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="" class="btn btn-danger" data-dismiss="modal">Cancelar</a>
          </div>
          </div>

        </div>
        
        </form>

        </div>
        </div>
        </div>
    </div>
    </div><!--fin modal -->


<script src="public/Bootstrap/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="assets/crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>


