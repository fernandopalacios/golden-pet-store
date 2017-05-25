<?php
	include("header.php");
	$petName = $_POST["nombre"];
	$_SESSION["petName"] = $petName;
	echo $petName;
?>