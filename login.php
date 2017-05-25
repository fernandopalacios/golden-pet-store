<?php
	$connection = new mysqli("localhost","root","","mascotas");
	if($connection->connect_error){
		var_dump($connection);		
		header("Location: index.html");
		die();
	}else{		
		$usuario = $_POST["usuario"];
		$password = $_POST["password"];
		$stmnt = $connection->prepare("SELECT * FROM usuarios WHERE usuario= ? ;#");
		$stmnt->bind_param('s',$usuario);

		$stmnt->execute();

		$result = $stmnt->get_result();
		while($rows = $result->fetch_assoc()){
			$rowsPass = $rows["password"];
			$nombre = $rows["nombre"]." ".$rows["apellido"];
			$idUsario = $rows["id"];
		}
		if($rowsPass==$password){
			session_start();
			$_SESSION["nombre"] = $nombre;
			$_SESSION["id"] = $idUsario;
			$_SESSION["usuario"] = $usuario;
			header("Location: main.php");
		}
		else{
			header("Location: index.html");
			die();
		}

	}
?>

