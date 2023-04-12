<?php
   $num1=$_POST['no1'];
    $num2=$_POST['no2'];


$reslt =$num1+$num2;
$loc="LOCATION:calc.php?res=$reslt";
header($loc);
?>