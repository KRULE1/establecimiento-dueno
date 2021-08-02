<?php

include "config.php";

if($_POST)
{
	$nombre=$_POST['nombre'];
	$apellidoP=$_POST['apellidoP'];
	$apellidoM=$_POST['apellidoM'];
	$correo=$_POST['correo'];
	$password=$_POST['password'];
	$fechaN=$_POST['fechaN'];
	$direccion=$_POST['direccion'];
	$nombreT=$_POST['nombreT'];
	
	$sql="INSERT INTO `trabajadores`(`nombre`, `apellidoP`, `apellidoM`, `correo`, `password`, `fechaN`, `direccion`, `nombreT`) VALUES ('".$nombre."','".$apellidoP."','".$apellidoM."','".$correo."','".$password."','".$fechaN."','".$direccion."','".$nombreT."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['nombre'] = $nombre;
		header('Location: home2.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>