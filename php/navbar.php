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
                    <li><a href="./ClienteMostrar.php">Cliente</a></li>
                    <li><a href="./PropietarioMostrar.php">Propietario</a></li>
                  
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Visados <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <li><a href="./VisadoMostrar.php"><span class="glyphicon glyphicon-ok"></span>&nbsp;Visado</a></li>
                            <li><a href="./verlista.php"><span class="glyphicon  glyphicon-copy"></span>&nbsp;Reinspeccion</a></li>
                            <li><a href="./verVisado.php"><span class="glyphicon glyphicon-folder-open"></span>&nbsp;&nbsp;Visados Oficio </a></li>      
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
                          
                        </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reportes <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                         <li><a href="./verReportVis.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Visado</a></li>
                          
                         <li><a href="./verReportFS.php"><span class="glyphicon glyphicon-calendar"></span> Fecha Solicitud</a></li>

                          <li><a href="./verReportCIT.php"><span class="glyphicon glyphicon-briefcase">&nbsp;</span>Codigo IT</a></li>
                          <li><a href="./verReportClient.php"><span class="glyphicon glyphicon-credit-card"></span>&nbsp;&nbsp;Codigo IT Clientes</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
<li class="dropdown" class="active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="glyphicon glyphicon-cog" style="color:skyblue"></i><span class="caret"></span></a> 
<ul class="dropdown-menu">
<li><a href="./config.php"> <span class="glyphicon glyphicon-user"></span> &nbsp;Perfil</a></li>
<!--<li><a href="./vert.php">Topografos</a></li>-->
<li><a href="./UsuariosMostrar.php"><span class="glyphicon glyphicon-briefcase">&nbsp;</span>Topografos</a></li>
<li ><a href="php/logout.php" class="btn btn-defult"><span class="glyphicon glyphicon-log-out"></span> &nbsp; Cerrar sesion</a></li>
</ul>
</ul> 
            </div><!-- /.navbar-collapse -->
            </div>
        </nav>
</div>