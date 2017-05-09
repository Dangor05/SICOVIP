<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="public\bootstrap\bootstrap\css\bootstrap.min.css" rel="stylesheet" media="screen">
<link href="public\bootstrap\bootstrap\css\bootstrap-theme.min.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="public\css\stylesheet.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script type="text/javascript" src="public\JS\jquery-3.1.0.min.js"></script>
</head>
</head>
<body>
<header>
	<div id="navbar">    
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="./Home.php"><b>SICOVIP</b></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="./ClienteMostrar.php">Cliente-Top</a></li>
                    <li><a href="./PropietarioMostrar.php">Propietario</a></li>
                  
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visados <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <li><a href="./VisadoMostrar.php">Visado</a></li>
                            <li><a href="./verlista.php">Reinspeccion</a></li>   
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tramite<b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <li><a href="./Cliente.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nuevo Tramite</a></li>
                          </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consultas <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <li><a href="./verClient.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Archivos Visados</a></li>
                          
                            <li><a href="./verVisado.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Visados Oficio </a></li>   
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                         <li><a href="./verReportVis.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Visado</a></li>
                          
                         <li><a href="./verReportFS.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Solicitud</a></li>

                          <li><a href="./verReportCIT.php"><span class=""></span>Codigo IT</a></li>  
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="glyphicon glyphicon-cog" style="color:skyblue"></i><span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./config.php">Configuraciones</a></li>
<!--<li><a href="./vert.php">Topografos</a></li>-->
<li><a href="./UsuariosMostrar.php">Topografos</a></li>
<li ><a href="php/logout.php" class="btn btn-defult"> Cerrar sesion</a></li>
</ul>
</ul> 
            </div><!-- /.navbar-collapse -->
            </div>
        </nav>
</div>
</header>




	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="public/bootstrap/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
</body>
</html>