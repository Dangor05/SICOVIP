<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!Doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<meta http-equiv="refresh" content="45" />
<TITLE>SICOVIP</TITLE>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
<body>
<?php       if ($_SESSION['sv05codu'] == 1) {
      include('php/navbar.php');  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }    ?>  
      <div class="col-md-10 col-md-offset-1">
  <div class="container-fluid">
      <h2>Tramites en espera de inspección</h2>
<form role="form" method="post" action="Cliente.php"> 

<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span> &nbsp;Nuevo Tramite</button>

</form>
<br>
<?php
include("php/getnewTramite.php");
      if($query->num_rows>0): ?>
<br>
<div class="table-responsive">   
    <div style="width: 98%" class="well well-sm text-left">
    
   <div class="content-loader">
        
        <table align="CENTER" cellspacing="0" style="width: 80%" id="example" class="table table-striped table-hover">
        <thead>
        <tr>
          <th>Propietario</th>
         <th>Consecutivo</th>
          <th>N° Finca</th>
          <th>Solicitud</th>       
         <th>Documentacion</th>
         <th>Estado</th>
         <th></th>
         <th></th>
        </tr>
        </thead>
        <tbody>
        <?php
      while ($elementos=$query->fetch_array()):?>

      <tr>
      <td style="width: 5%"><?php echo $elementos["sv03cedp"]; ?></td>
      <td style="width: 5%"><?php echo $elementos["sv08conse"]; ?></td>
      <td style="width: 8%"><?php echo $elementos["sv04nfin"]; ?></td>
      <td style="width: 5%"><?php echo $elementos["sv08fchs"]; ?></td>
      
      
      <td style="width: 15%"><a href="php/doc.php?id=<?php echo $elementos['sv03cedp']?>&doc=<?php echo $elementos['sv04doc']?>"><?php echo $elementos["sv04doc"];?></a></td>
      <td style="width: 10%"><?php if($elementos["sv02code"] == 7){echo 'En Espera';}?></td>
      <!--variable de sesion-->
      
      <td align="center" style="width: 3%">
      <a href="Visado.php?conse=<?php echo $elementos["sv08conse"];?>" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span> &nbsp;Procesar</a>
      <td align="center"><button class="btn btn-sm btn-warning" id="btnModi" type="button" onclick="seleccionarTabla()" data-toggle="modal" data-target="#modal-4"> <span class="glyphicon glyphicon-trash-align-center"></span>Editar</button></td>
      </tr>
      <?php
    endwhile;
    ?>
        </tbody>
        </table>
 </div>
 </div> </div>
 <?php else:?>
  <div class="col-md-5">
    <p class="alert alert-warning">No hay resultados</p>
    </div>
<?php endif;?>
</div>


    <div class="container">
        <div class="modal fade" id="modal-4" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                     <div class="modal-header">
                        <button type 1="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 class="modal-title">Modificar Tramite</h3>
                     </div>
                     <div class="modal-body ">
        <form name="Modificar" method="POST" action="php/actuaTramite.php" enctype="multipart/form-data">
    
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
    function seleccionarTabla() {
    var _trEdit = null;
    $(document).on('click', '#btnModi',function(){
        _trEdit = $(this).closest('tr');
        var _cedp = $(_trEdit).find('td:eq(0)').text();
        var _con = $(_trEdit).find('td:eq(1)').text();
        var _nfin = $(_trEdit).find('td:eq(2)').text();
        var _fch = $(_trEdit).find('td:eq(3)').text();
        var _pln = $(_trEdit).find('td:eq(4)').text();
        var _cta = $(_trEdit).find('td:eq(5)').text();
        var _aut = $(_trEdit).find('td:eq(6)').text();
        var _std = $(_trEdit).find('td:eq(7)').text();
        var _cedc = $(_trEdit).find('td:eq(8)').text();
        
        

        
         $('input[name="conse"]').val(_con);
        $('input[name=""]').val(_fch);
        $('input[name="cedc"]').val(_cedc);
        $('input[name="cedp"]').val(_cedp);
        $('input[name="nfin"]').val(_nfin);
        $('input[name="pln"]').val(_pln);
        $('input[name="aact"]').val(_cta);
        $('input[name="acta"]').val(_aut);
        $('input[name=""]').val(_std);
    }); 
}
</script>
</body>

</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>