<?php 
  require_once("dompdf/dompdf_config.inc.php");
  $conexion = mysql_connect("localhost","root","12345");
  mysql_select_db("sicovip",$conexion);
$s=$_GET['S'];
$fs=$_GET['FS'];
$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reporte</title>
</head>

<body>
<div align="left">
  <img src="img/sc.jpg" width="100px" height="100px">
   <p><h5>Municipalidad Santa Cruz</h5></p>
  <p><h5>Departamento Catastro y Topografia</h5></p>
</div>
  <br>
  <br>
    <table align="center" width="98%" border="1">
      <tr>
        <td bgcolor="#0099FF"><strong>Cedula</strong></td>
        <td bgcolor="#0099FF"><strong>Nombre Apellidos</strong></td>
        <td bgcolor="#0099FF"><strong>Numero Finca</strong></td>
        <td bgcolor="#0099FF"><strong>Solicitud</strong></td>
        <td bgcolor="#0099FF"><strong>Estado</strong></td>
      </tr>';

        $consulta=mysql_query("SELECT DISTINCT  a.sv03cedp, a.sv03nomp, a.sv03apdp,
                     b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta,
                     DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                       e.sv02dete
  
     FROM sv03ptario a, sv04reqtos b, sv08trmte d,sv02estdo e
      
     WHERE d.sv03cedp= a.sv03cedp
     AND b.`sv04nfin`=d.`sv04nfin`
     AND e.sv02code = d.`sv02code`
  
     AND sv08fchs   BETWEEN '$_GET[S]'  AND  '$_GET[FS]'");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
        <td>'.$dato['sv03cedp'].'</td>
        <td>'.$dato['sv03nomp'].'&nbsp;'.$dato['sv03apdp'].'</td>
        <td>'.$dato['sv04nfin'].'</td>
        <td>'.$dato['sv08fchs'].'</td>
        <td>'.$dato['sv02dete'].'</td>
      </tr>';
      } 
$codigoHTML.='
    </table>
  
</div>
</body>
</html>';

$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("ReporteFecSolicitud.pdf");
// <td>'. if($dato["sv02code"]==5){echo 'Aprobado';}elseif($dato["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';}.'</td>
?>

