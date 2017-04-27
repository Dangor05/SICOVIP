<?php 
  require_once("dompdf/dompdf_config.inc.php");
  $conexion = mysql_connect("localhost","root","12345");
  mysql_select_db("sicovip",$conexion);

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
        <td bgcolor="#0099FF"><strong>Nombre</strong></td>
        <td bgcolor="#0099FF"><strong>Consecutivo</strong></td>
        <td bgcolor="#0099FF"><strong>Solicitud</strong></td>
        <td bgcolor="#0099FF"><strong>Visado</strong></td>
        <td bgcolor="#0099FF"><strong>Estado</strong></td>
        <td bgcolor="#0099FF"><strong>CIT</strong></td>
      </tr>';

        $consulta=mysql_query("SELECT DISTINCT   a.sv03cedp, a.sv03nomp, a.sv03apdp, b.sv04nfin,b.sv04apln,b.sv04aact,b.sv04acta,
          DATE_FORMAT(d.sv08fchs,'%d-%m-%Y') AS sv08fchs,
                e.sv08conse,e.sv09npln,e.sv09nfol,e.sv09npre,DATE_FORMAT(e.sv09fvdp,'%d-%m-%Y') AS sv09fvdp,e.sv09mnt,e.sv07cdtp,s.sv02dete
 
         FROM sv03ptario a, sv04reqtos b, sv08trmte d,sv09vsdo e, `sv05tipusu` u, sv02estdo s
              
         WHERE d.sv03cedp= a.sv03cedp
         AND e.sv08conse= d.sv08conse
         AND  u.sv05codu= e.sv05codu
         AND b.sv04nfin = e.sv04nfin
         AND s.sv02code = d.sv02code
         AND e.sv09fvdp  BETWEEN '$_GET[V]' AND '$_GET[VS]'");
        while($dato=mysql_fetch_array($consulta)){
$codigoHTML.='
      <tr>
        <td>'.$dato['sv03cedp'].'</td>
        <td>'.$dato['sv03nomp'].'&nbsp;'.$dato['sv03apdp'].'</td>
        <td>'.$dato['sv08conse'].'</td>
        <td>'.$dato['sv08fchs'].'</td>
        <td>'.$dato['sv09fvdp'].'</td>
       <td>'.$dato['sv02dete'].'</td>
        <td>'.$dato['sv07cdtp'].'</td>
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
$dompdf->stream("ReporteFVisado.pdf");
// <td>'. if($dato["sv02code"]==5){echo 'Aprobado';}elseif($dato["sv02code"]==6){echo 'Rechazado';}else{echo 'En proceso';}.'</td>
?>

