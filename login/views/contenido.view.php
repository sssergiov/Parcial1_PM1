<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Contenido</title>

	<script type="text/javascript">
		function cambiaFondo(x){
			var body = document.getElementById("body");
			body.style.backgroundColor = x.value;
		}
	</script>



</head>
<body id="body">
	<div>
		<h1>VARGAS QUISBERT SERGIO NELSON  CI: 7046366 LP.</h1>
		

		<img src="imagen/sergio.jpg" width="30%" height="30%"/>
		<div>

		<p> Cambiar el color de fondo </p>

		<select name="fondo" id="fondo" onchange="cambiaFondo(this)">
			<option value="red">Rojo</option>
			<option value="blue">Azul</option>
			<option value="green">Verde</option>
		</select>



		</div>

		<div>
		

		</div>
		<div>
		<a href="cerrar.php">Cerrar sesion</a></select>
			
		</div>
		



	</div>
</body>
</html>