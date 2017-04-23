<?php
session_start();
if(isset ($_SESSION['sv07cdtp'])) {
?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
		<title>Reinspección</title>
<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
	</head>
	<body>
	<?php 
     if ($_SESSION['sv05codu'] == 1) {
      	include "php/navbar.php";  
      }else if ($_SESSION['sv05codu'] == 2) {
        include('php/navh2.php');
      }
 ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>Planos de reisnpección</h2>

<br><br>



<?php include "php/Htabla.php"; ?>
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
