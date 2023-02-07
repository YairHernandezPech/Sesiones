<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Este link es para dar diseño a mi alert llamada enviar-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
		
			<div class="soical-icons">
				<a href="#"><i class="fa fa-facebook-square  fa-6"></i></a>
				<a href="#"><i class="fa fa-google-plus-square fa-6"></i></a>
				<a href="#"><i class="fa fa-twitter-square fa-6"></i></a>
				<a href="https://github.com/YairHernandezPech"><i class="fa fa-github-square fa-6"></i></a>
			</div>

			<form action="logica/loguear.php" method="post" id="login" class="input-group">
				<input type="text" name="usuario" class="input-field" placeholder="Ponga su usuario" required />
				<input input type="password" name="clave" class="input-field" placeholder="Ponga su contrasena" required />
				<input type="checkbox" class="check-box" /><span>Recordar contraseña</span>
				<button type="submit" class="submit-btn">Entrar</button>
			</form>

			<form name="form" action="rol2.php" method="post" id="register" class="input-group">
				<input type="text" class="input-field" placeholder=" Nombre " required />
				<input type="text" class="input-field" placeholder="Apellido" required />
				<input type="email" class="input-field" placeholder="Correo" required />
                <input type="text" name="usuario"  class="input-field" placeholder="Nombre de usuario" required>
                <input type="password" name="clave" class="input-field" placeholder="Contrasena" required>        
				<input type="checkbox" class="check-box" /><span>Acepto los terminos y condiciones</span>
				<button type="submit" class="submit-btn" value="enviar" onclick="enviar ()">Registrarse</button>
			</form>
		</div>
	</div>


	
	<script>
		var x = document.getElementById("login");
		var y = document.getElementById("register");
		var z = document.getElementById("btn");

		function register() {
			x.style.left = "-400px";
			y.style.left = "50px";
			z.style.left = "110px";
		}

		function login() {
			x.style.left = "50px";
			y.style.left = "450px";
			z.style.left = "0";
		}

        /*Enviar*/
        function enviar(){
         swal('Registro' ,'Tu registro a sido exitoso', 'success')
     } 

	</script>
    
</body>
</html>