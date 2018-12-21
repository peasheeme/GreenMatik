<?php

$error='faltan_valores';


$destino = "juan_27angel@hotmail.com";

if(isset($_POST['enviar'])){
	if(!empty($nombre) || !empty($telefono) || !empty($email) || !empty($estado) || !empty($ciudad) || !empty($mensaje)){
		$error='ok';
		$nombre = trim($_POST['nombre']);
		$telefono = trim($_POST['telefono']);
		$email = trim($_POST['email']);
		$estado = trim($_POST['estado']);
		$ciudad = trim($_POST['ciudad']);
		$mensaje = trim($_POST['mensaje']);

		if(!is_string($nombre)){
			$error = 'nombre';
		}

		if(!filter_var($telefono, FILTER_VALIDATE_INT)){
			$error = 'telefono';
		}

		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$error = 'email';
		}

		if(!is_string($estado)){
			$error = 'estado';
		}

		if(!is_string($ciudad)){
			$error = 'ciudad';
		}

		if(!is_string($mensaje)){
			$error = 'mensaje';
		}
	}else{
		$error = 'faltan_valores';
		header("Location:../contacto.php?error=$error");
	}
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	
</body>
</html>