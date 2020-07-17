<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registrate</title>
</head>
<body>
	<div>
		<h1 class="titulo">Registrate</h1>

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<input type="text" name="ci" class="ci" placeholder="ci">
			</div>

			<div class="form-group">
				<input type="text" name="nombre" class="nombre" placeholder="nombre">
			</div>

			<div class="form-group">
				<input type="text" name="paterno" class="paterno" placeholder="Apellido Paterno">
			</div>

			<div class="form-group">
				<input type="text" name="materno" class="materno" placeholder="Apellido Materno">
			</div>

			<div class="form-group">
				<input type="text" name="residencia" class="residencia" placeholder="Lugar de Residencia">
			</div>

		

			<div>
				<input type="password" name="password" class="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<input type="password" name="password2" class="password_btn" placeholder="Confirmar Contraseña"><br><br>
				<button type="button" onclick="login.submit()">Registrate</button>
			</div>


<!--Mensaje de error -->
			<?php if(!empty($errores)): ?>
				<div>
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>

		<p>
			¿Ya tienes cuenta? <br>
			<a href="login.php">Iniciar Secion</a>
		</p>
	</div>
</body>
</html>