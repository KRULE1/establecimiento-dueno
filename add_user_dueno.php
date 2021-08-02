<?php

include "config.php";

if($_POST)
{
	$nameest=$_POST['nameest'];
	$addressest=$_POST['addressest'];
	$tipeest=$_POST['tipeest'];
	$numberest=$_POST['numberest'];
	$namedueno=$_POST['namedueno'];
	
	$sql="INSERT INTO `est`(`nameest`, `addressest`, `tipeest`, `numberest`, `namedueno`) VALUES ('".$nameest."','".$addressest."','".$tipeest."','".$numberest."','".$namedueno."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['namedueno'] = $namedueno;
		header('Location: home.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>