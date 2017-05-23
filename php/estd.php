<?php 

$consu = "UPDATE sv08trmte SET sv02code ='3', sv08fumt=NOW() WHERE  sv08conse='$sv08conse'";
$senten=$con->query($consu);

 ?>