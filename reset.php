<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<link rel="stylesheet" href="public\css\style.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
</head>
<body>
<header >
<div class="ico"></div>
<?php include("php/navbar.php"); ?>
</header>

 <div class="container">
<div class="row">
<div class="col-md-5 col-md-offset-3">

  <form action="php/agTramite.php" method="post" enctype="multipart/form-data"> 
  <center><h3>Tramite</h3></center>
<div class="form-group">
 <label for="sv03cedp">Nº Ced Propietario</label>&nbsp
 <!--<p><?php// echo $_SESSION['Cedp']; ?></p>-->
  <input type="text" class="form-control" value="" readonly name ="Cedpr"></div>

<div class="form-group"> 
 <label for="sv01cedt">Nº Ced Topografo</label>&nbsp
 <!--<p><?php //echo $_SESSION['Cedt']; ?></p>-->
 <input type="text" class="form-control" value="" readonly name="cedc"></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº consecutivo:</label>&nbsp
 <input type="text" class="form-control" value="" readonly="" name="conse" required></div>

  <div class="form-group"> 
 <label for="sv03ptario">Nº Finca:</label>&nbsp
<input type="text" class="form-control" name="fin" placeholder="Nº Finca" maxlength="30" required ></div>

  <div class="form-group"> 
 <label for="sv03ptario">Documentos:</label>&nbsp
  <input type="file" name="doc" required=""></div>

   <div class="form-group"> 
 <input type="hidden" class="form-control" value="<?php echo $GLOBALS['mail'];?>" name="mail">
 <input type="hidden" class="form-control" value="<?php echo $GLOBALS['mpro'];?>" name="pmail"></div>
    <center>
    <br>
  <button type="submit" class="btn btn-success">Finalizar Tramite</button>
  </center>
</div>
</div>
</div>


<?php include("php/footer.php") ; ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
</body>
</html>