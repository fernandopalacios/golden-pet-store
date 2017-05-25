<?php
session_start();
if(isset($_SESSION["id"])){
	$idUsuario = $_SESSION["id"];
	$nombre = $_SESSION["nombre"];
	$usuario = $_SESSION["usuario"];
}else{
	session_destroy();
	header("Location: index.html");
}
?>