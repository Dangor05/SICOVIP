<?php

if(!empty($_POST) && !empty($_FILES)){
	if (isset($_POST['sv09npln']) && isset($_POST['sv09nfol']) && isset($_POST['sv09npre']) && isset($_FILES['sv09mnt']) && isset($_POST['sv09fvdp']) && isset($_POST['sv08conse']) && isset($_POST['sv01cedc']) && isset($_POST['sv03cedp']) && isset($_POST['sv04nfin']) && isset($_POST['sv02code']) && isset($_POST['sv02std']) && isset($_POST['sv07cdtp'])) {
		include("conexion.php");
		$sv09npln=mysqli_real_escape_string($con,$_POST['sv09npln']);
		$sv09nfol=mysqli_real_escape_string($con,$_POST['sv09nfol']);
		$sv09npre=mysqli_real_escape_string($con,$_POST['sv09npre']);
		$sv09mnt=mysqli_real_escape_string($con,$_FILES['sv09mnt']['name']);
		$mnt=$_FILES['sv09mnt'];
		$sv09fvdp=mysqli_real_escape_string($con,$_POST['sv09fvdp']);
		$sv08conse=mysqli_real_escape_string($con,$_POST['sv08conse']);
		$sv01cedc=mysqli_real_escape_string($con,$_POST['sv01cedc']);
		$sv03cedp=mysqli_real_escape_string($con,$_POST['sv03cedp']);
		$sv04nfin=mysqli_real_escape_string($con,$_POST['sv04nfin']);
		$sv02code=mysqli_real_escape_string($con,$_POST['sv02code']);
		$sv07cdtp=mysqli_real_escape_string($con,$_POST['sv07cdtp']);
		$sv02std=mysqli_real_escape_string($con,$_POST['sv02std']);
		$sv04plan=$_FILES['sv04plan'];
		$path="../archivos/".$sv03cedp."\ ";

		

		$stm="UPDATE sv09vsdo set sv09nfol='$sv09nfol', sv09npre='$sv09npre', sv09mnt='$sv09mnt', sv09fvdp='$sv09fvdp', sv09fumv=NOW(), sv08conse='$sv08conse',sv01cedc='$sv01cedc', sv03cedp='$sv03cedp', sv04nfin='$sv04nfin', sv02code='$sv02code', sv07cdtp='$sv07cdtp' WHERE sv09npln='$sv09npln'";
		
		$sql="UPDATE sv08trmte SET sv02code='$sv02std' WHERE sv08conse='$sv08conse'";

		if (!empty($sv04plan['name'])) {
			$st ="UPDATE sv04reqtos SET sv04apln='".$sv04plan['name']."' WHERE sv04nfin='$sv04nfin'";
		$stmt=$con->query($stm);
		$qry=$con->query($sql);
		$exec=$con->query($st);
				if ($stmt!=null && $qry!=null && $exec!=null) {
			
				move_uploaded_file($mnt['tmp_name'],$path.$sv09mnt);
				move_uploaded_file($sv04plan['tmp_name'],$path.$sv04plan['name']);
				header("location='../verlista.php'");
				print "<script>alert(\"Se actualizo.\");window.location='../verlista.php';</script>";
				$con->close();
		}else{
			$con->close();
				print "<script>alert(\"No se pudo actualizar.\");window.location='../verlista.php';</script>";

			}
		}
		else{

			
			$stmt=$con->query($stm);
			$qry=$con->query($sql);
			if ($stmt!=null && $qry!=null) {
			
				move_uploaded_file($mnt['tmp_name'],$path.$sv09mnt);
				header("location='../verlista.php'");
				print "<script>alert(\"Se actualizo.\");window.location='../verlista.php';</script>";
				$con->close();
		}else{
			$con->close();
				print "<script>alert(\"No se pudo actualizar.\");window.location='../verlista.php';</script>";

			}
		}

	}
	else{
		echo "revisar nombre de las vistas";
	}

} else{echo "ay";}


?>