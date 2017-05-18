

<nav class="navbar navbar-inverse" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./Home.php"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>SICOVIP</b></a>
  </div>
 <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
    <li><a href="./ClienteMostrar.php">Cliente-Top</a></li>
      <!--<li><a href="./verct.php">Cliente-Top</a></li>-->
    </ul>
     <ul class="nav navbar-nav">
     <!-- <li><a href="./verp.php">Propietario</a></li>-->
     <li><a href="./PropietarioMostrar.php">Propietario</a></li>
    </ul>
    <ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Visados<span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="./VisadoMostrar.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Visado</a></li>
      <li><a href="./verlista.php"> <span class="glyphicon  glyphicon-copy"></span>&nbsp;Reinspeccion</a></li>
    </ul>
     
    </ul>
    <ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Tramite<span class="caret"></span> </a> 
<ul class="dropdown-menu">
<li><a href="./Cliente.php"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Nuevo Tramite</a></li>
<!--<li><a href="./Tramites.php">Tramites</a></li>-->
</ul>
</ul> 
<ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Consultas<span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./verClient.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Archivos Visados</a></li>
<li><a href="./verVisado.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Visados Oficio </a></li>

</ul>
</ul>
    <ul class="nav navbar-nav">
    <li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Reportes<span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./verReportVis.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Visado</a></li>
<li><a href="./verReportFS.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Solicitud</a></li>
<li><a href="./verReportCIT.php"><span class="glyphicon glyphicons-nameplate-alt"></span> Carnet IT</a></li>
</ul>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="glyphicon glyphicon-cog" style="color:skyblue"></i><span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./config.php"> <span class="glyphicon glyphicon-user"></span> &nbsp;Perfil</a></li>
<!--<li><a href="./vert.php">Topografos</a></li>-->
<li><a href="./UsuariosMostrar.php">Topografos</a></li>
<li ><a href="php/logout.php" class="btn btn-defult"><span class="glyphicon glyphicon-log-out"></span> &nbsp;Cerrar sesion</a></li>
</ul>
</ul> 
 </div><!-- /.navbar-collapse -->

</div>
</nav>