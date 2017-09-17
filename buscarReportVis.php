<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Reporte Visados</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script >
			$(document).ready(function(){
				$("#exportar").click(function(e){
					e.preventDefault();
					window.print();
				});
			});
		</script>
	</head>
	<body>
	<?php  include('php/navbar.php');  ?>  
<div class="container-fluid">
<!--<button id="exportar">Imprimir</button>-->
<div class="container-fluid">
<div class="row">
<div class="col-md-5 col-md-offset-2">
<a href="verReportVis.php"> 	
<br>
<button type="button" class="btn btn-default" ><span class="glyphicon glyphicon-circle-arrow-left"></span> &nbsp;Volver</button></a>&nbsp;
<a href="report/listafv.php?V=<?php echo $_GET['V']?>&VS=<?php echo $_GET['VS']?>">   
<button class="btn btn-info btn-md">&nbsp;<span class="glyphicon glyphicon-print" style="color:black" ></span></button></a>

		<h2>Reporte Fecha Visado</h2>




</div>
</div>
</div>
<?php include "php/svtop/busqReportVis.php"; ?>

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
    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        setInterval(function () {
        $('#example').ajax.reload(null, false);
        }, 2000);
    });
    </script>
	</body>
</html>
<?php
}else{print "<script>alert(\"Debes iniciar de para poder ingresar.\");window.location='index.php';</script>"; } ?>