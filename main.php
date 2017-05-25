<?php
	include("header.php");
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="styles/sheet.css">
		<link rel="stylesheet" type="text/css" href="styles/theme.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	</head>
	<body ng-app="mainApp" ng-controller="mainCtrl">	
		<div class="mainMenu" ng-class="{'is-visible':visible}" >
			<center><h2><?php echo $nombre; ?></h2></center>
			<ul>
				<li><a href="#"><b>Inicio</b></a></li>
				<li><a href="#">Mascotas</a></li>
				<li><a href="#">Configuración</a></li>
			</ul>
		</div>

		<button class="menuBtnStyle" ng-click="visible=!visible; mostrarMenu();" ng-style="menuBtn" >Menu</button>
		<br>

		<section class="mainWindow" ng-controller="mainCtrl">
			<h2>Mascotas</h2>
			<div>
				<h3>Agregar Mascota</h3>
				<form ng-submit="onSubmit();" name="formMascota" novalidate="novalidate"/>
					<table>
						<tr>
							<td><input type="text" placeholder="Nombre" name="nombre"
								ng-model="modelMascota.nombre" /></td>
							<td>
								<select name="especie"
								ng-model="modelMascota.especie">
									<option selected disabled value="">Especie</option>
									<option value="perro">Perro</option>
									<option value="gato">Gato</option>
									<option value="ave">Ave</option>
									<option value="reptil">Reptil</option>
									<option value="reptil">Otro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan='2'>
								<input type="text" name="especieAlt" placeholder="Especie"
								ng-model="modelMascota.especieAlt"/>
						</tr>
						<tr>
							<td><input type="text" placeholder="Raza" name="raza"
								ng-model="modelMascota.raza"/></td>
							<td><input type="number" placeholder="Edad" name="edad"
								ng-model="modelMascota.edad"/></td>
						</tr>
						<tr>
							<td colspan='2'><center>
								<button type="submit" name="registroMascota">Registrar
								</button></center></td>
						</tr>
					</table>
				</form>
				<pre>{{modelMascota|json}}</pre>
				<?php echo $_SESSION["petName"];?>
			</div>
		</section>		

	</body>
	<script src="main.js"></script>

</html>