<?php

if(!empty($_POST)){


     
     if (isset($_POST['svcdtp']) && isset($_POST['svcedt']) && isset($_POST['svnomt']) && isset($_POST['svapdt']) && isset($_POST['svestd']) && isset($_POST['svpass']) && isset($_POST['svemt']) && isset($_POST['svcodu']) && isset($_POST['pass2']) ) {
         
             $sv07cdtp=$_POST['svcdtp'];
             $sv07cedt=$_POST['svcedt'];
             $sv07nomt=$_POST['svnomt'];
             $sv07apdt=$_POST['svapdt'];
             $sv07estd=$_POST['svestd'];
             $pass=$_POST['svpass'];
             $sv07emt=$_POST['svemt'];
             $sv05codu=$_POST['svcodu'];
             $contr=$_POST['pass2'];

             include "../lib/conexion.php";

     $sch="SELECT sv07cdtp, sv07cedt FROM sv07tpgfo WHERE sv07cdtp='$sv07cdtp' and sv07cedt='$sv07cedt'";
    $stm=$con->query($sch);
    if ($stm->num_rows>0) {

        print "<script>alert(\"Este usuario ya esta registrado.\");window.location='../../UsuariosMostrar.php';</script>";
    }else{

        if ($pass==$contr) {

            $sv07pass=sha1($pass);
       $sql =  "INSERT INTO sv07tpgfo (sv07cdtp,sv07cedt,sv07nomt,sv07apdt,sv07estd,sv07pass,sv07emt,sv05codu) values 
        ('$sv07cdtp','$sv07cedt','$sv07nomt','$sv07apdt','$sv07estd','$sv07pass','$sv07emt','$sv05codu')";

            $query = $con->query($sql);
            if($query!=null){
                mysqli_close($con);
                print "<script>alert(\"Agregado exitosamente.\");window.location='../../UsuariosMostrar.php';</script>";
            }else{
                mysqli_close($con);
                print "<script>alert(\"No se pudo agregar.\");window.location='../../UsuariosMostrar.php';</script>";

            }
         
     }
     else{
         print "<script>alert(\"La contraseñas no son igual, por favor escriba bien sus contraseña.\");window.location='../../UsuariosMostrar.php';</script>";
     }

 }//fin  del select

     }// fin del isset
 


	
	}	



?>