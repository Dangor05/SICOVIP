<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Reinspección</title>
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
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Planos de reisnpección</h2>

<br><br>



<?php include "php/svvsdo/Htabla.php"; ?>
</div>
</div>
</div>

<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
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
        var _nom = $(_trEdit).find('td:eq(1)').text();
        var _apd = $(_trEdit).find('td:eq(2)').text();
        var _con = $(_trEdit).find('td:eq(3)').text();
        var _nfin = $(_trEdit).find('td:eq(4)').text();
        var _visa = $(_trEdit).find('td:eq(5)').text();
        var _pln = $(_trEdit).find('td:eq(6)').text();
        var _std = $(_trEdit).find('td:eq(7)').text();
        
        
        
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
