<?php

if(!empty($_POST) && !empty($_FILES)){
	if (isset($_POST['sv09npln']) && isset($_POST['sv09nfol']) && isset($_POST['sv09npre']) && isset($_FILES['sv09mnt']) && isset($_POST['sv09fvdp']) && isset($_POST['sv08conse']) && isset($_POST['sv01cedc']) && isset($_POST['sv03cedp']) && isset($_POST['sv04nfin']) && isset($_POST['sv02code']) && isset($_POST['sv02std']) && isset($_POST['sv07cdtp'])) {
		include("conexion.php");

		$sv09npln=mysqli_real_escape_string($con,$_POST['sv09npln']);
		$sv09nfol=mysqli_real_escape_string($con,$_POST['sv09nfol']);
		$sv09npre=mysqli_real_escape_string($con,$_POST['sv09npre']);
		$sv09mnt=$_FILES['sv09mnt']['name'];
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
		$sv09fumv=date("Y-m-d");

		echo $sv09nfol; echo " "; echo "1" ;
		echo "<br>";
		echo $sv09npre;echo " "; echo "2" ;
		echo "<br>";
		echo $sv09mnt;echo " "; echo  "3";
		echo "<br>";
		echo $sv09fvdp;echo " "; echo "4" ;
		echo "<br>";
		echo $sv09fumv;echo " "; echo "5" ;
		echo "<br>";
		echo $sv08conse;echo " "; echo "6" ;
		echo "<br>";
		echo $sv01cedc;echo " ";echo "7" ;
		echo "<br>";
		echo $sv03cedp; echo " ";echo "8" ;
		echo "<br>";
		echo $sv04nfin;echo " "; echo "9" ;
		echo "<br>";
		echo $sv02code;echo " "; echo "10" ;
		echo "<br>";
		echo $sv07cdtp;echo " "; echo "11" ;
		echo "<br>";
		echo $sv09npln;echo " "; echo "12" ;
		echo "<br>";



		

		$stm="UPDATE sv09vsdo set sv09nfol='$sv09nfol', sv09npre='$sv09npre', sv09mnt='$sv09mnt', sv09fvdp='$sv09fvdp', sv09fumv=NOW(), sv08conse='$sv08conse',sv01cedc='$sv01cedc', sv03cedp='$sv03cedp', sv04nfin='$sv04nfin', sv02code='$sv02code', sv07cdtp='$sv07cdtp' WHERE sv09npln='$sv09npln'";
		$sql="UPDATE sv08trmte SET sv02code='$sv02std' WHERE sv08conse='$sv08conse'";

		//$stm=$con->prepare("UPDATE sv09vsdo SET `sv09nfol`=?, `sv09npre`=?,`sv09mnt`=?, `sv09fvdp`=?, `sv09fumv`=?, `sv08conse`='?', `sv01cedc`=?, `sv03cedp`=?, `sv04nfin`=?, `sv02code`=?, `sv07cdtp`=? WHERE `sv09npln`=?");
		//$stm->bind_param("sssssssssiss",$sv09nfol,$sv09npre,$sv09mnt,$sv09fvdp,$sv09fumv,$sv08conse,$sv01cedc,$sv03cedp,$sv04nfin,$sv02code,$sv07cdtp,$sv09npln);


		
		

		if (!empty($sv04plan['name'])) {
			$st ="UPDATE sv04reqtos SET sv04apln='".$sv04plan['name']."' WHERE sv04nfin='$sv04nfin'";
		$stmt=$con->query($stm);
		$qry=$con->query($sql);
		$exec=$con->query($st);
				if ($stmt!=null && $qry!=null && $exec!=null) {
			
				move_uploaded_file($mnt['tmp_name'],$path.$sv09mnt);
				move_uploaded_file($sv04plan['tmp_name'],$path.$sv04plan['name']);
				header("location='../VisadoMostrar.php'");
				print "<script>alert(\"Se actualizo.\");window.location='../VisadoMostrar.php';</script>";
				$con->close();
		}else{
			$con->close();
				print "<script>alert(\"Algo a ocurrido, por favor intenta de nuevo.\");window.location='../VisadoMostrar.php';</script>";

			}
		}
		else{
			$stmt=$con->query($stm);
			$qry=$con->query($sql);
			if ($stmt!=null && $qry!=null) {
			
				move_uploaded_file($mnt['tmp_name'],$path.$sv09mnt);
				header("location='../VisadoMostrar.php'");
				print "<script>alert(\"Se modifico.\");window.location='../VisadoMostrar.php';</script>";
				$con->close();
		}else{
			$con->close();
				print "<script>alert(\"No se pudo actualizar.\");window.location='../VisadoMostrar.php';</script>";

			}
		}

	}
	else{
		echo "revisar nombre de las vistas";
	}

} else{echo "ay";}


?>