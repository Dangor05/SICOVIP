<?php
include('conexion.php');
if(!empty($_POST)){
	if(isset($_POST['npln']) && isset($_POST['nfol']) && isset($_POST['npred']) && isset($_POST['fch']) && isset($_POST['conse']) && isset($_POST['cedc']) && isset($_POST['cedp']) && isset($_POST['nfin']) && isset($_POST['impu'])&& isset($_POST['cit']) && isset($_POST['codu']) && isset($_POST['std']))
	{
$npln=mysqli_real_escape_string($con,$_POST['npln']);   
$nfol=mysqli_real_escape_string($con,$_POST['nfol']);   
$npre=mysqli_real_escape_string($con,$_POST['npred']);   
$mnt=$_FILES['mnt'];    
$fvdp=mysqli_real_escape_string($con,$_POST['fch']);   
$conse=mysqli_real_escape_string($con,$_POST['conse']);   
$cedc=mysqli_real_escape_string($con,$_POST['cedc']);  
$cedp=mysqli_real_escape_string($con,$_POST['cedp']);
$nfin=mysqli_real_escape_string($con,$_POST['nfin']); 
$impu=mysqli_real_escape_string($con,$_POST['impu']); 		
$cdtp=mysqli_real_escape_string($con,$_POST['cit']); 
$codu=mysqli_real_escape_string($con,$_POST['codu']);
$code=mysqli_real_escape_string($con,$_POST['std']);
$sv04apln=$_FILES['pln'];

$dir ="../archivos/".$cedp."\ ";


			$sql = "INSERT INTO sv09vsdo (sv09npln,sv09nfol,sv09npre,sv09mnt,sv09fvdp,sv09fumv,sv08conse,sv01cedc,sv03cedp,sv04nfin,sv02code,sv07cdtp,sv05codu) 
			values ('$npln','$nfol','$npre','".$mnt['name']."','$fvdp',NOW(),'$conse','$cedc','$cedp','$nfin','$impu','$cdtp','$codu')";

			$consu = "UPDATE sv08trmte SET sv02code ='$code', sv08fumt=NOW() WHERE  sv08conse='$conse'";
			

if (!empty($sv04apln['name'])) {
	$stm ="UPDATE sv04reqtos SET sv04apln='".$sv04apln['name']."' WHERE sv04nfin='$nfin'";
		$query=$con->query($sql);
		$senten=$con->query($consu);
		$exec=$con->query($stm);
			if($query!=null && $senten!=null && $exec!=null){
		move_uploaded_file($mnt['tmp_name'],$dir.$mnt['name']);
		move_uploaded_file($sv04apln['tmp_name'],$dir.$sv04apln['name']);		
		mysqli_close($con);

	header("Location:../../Home.php");
			}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../../Home.php';</script>";

			}
		}else{
		$query=$con->query($sql);
		$senten=$con->query($consu);
		if($query!=null && $senten!=null){

		move_uploaded_file($sv09mnt['tmp_name'],$dir.$sv09mnt['name']);
		mysqli_close($con);

	header("Location:../../Home.php");
		}else{
				mysqli_close($con);
				print "<script>alert(\"No se pudo agregar.\");window.location='../../Home.php';</script>";

			}

	}
}
}
?>				