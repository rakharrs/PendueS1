<?php
include('fonction.php');
include('data.php');
session_start();
$_SESSION['val']=$_POST['val'];
$_SESSION['try']=0;
	if (comparelettre($_SESSION['val'],$_SESSION['mot'])==FALSE || verifdouble($_SESSION['mot'],$_SESSION['val'],$_SESSION['letter_number'])==TRUE) {
		$_SESSION['val']='0';
		$_SESSION['def']++;
	}
$_SESSION['try']++;
header("location: index.php");
 ?>