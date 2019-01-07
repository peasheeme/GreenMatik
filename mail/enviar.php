<?php
if(isset($_POST['enviar'])){
		//función para limpiar cada campo que sea introducido por el usuario
		function limpiarCampo($campo){
			$campo = trim($campo);
			$campo = stripcslashes($campo);
			$campo = htmlspecialchars($campo);

			return  $campo;
		}

		//variables de cada campo del formulario
		$nombre = limpiarCampo($_POST['nombre']);
		$telefono = limpiarCampo($_POST['telefono']);
		$email = limpiarCampo($_POST['email']);
		$estado = limpiarCampo($_POST['estado']);
		$ciudad = limpiarCampo($_POST['ciudad']);
		$mensaje = limpiarCampo($_POST['mensaje']);
		$terminos = $_POST['terminos'];

		//expresiones regulares
		$er1 = "/^[a-záéóóúàèìòùäëïöüñ\s]+$/i";

		//respuestas
		$resp1 = preg_match($er1, $nombre);
		$resp2 = preg_match($er1, $estado);
		$resp3 = preg_match($er1, $ciudad);

		//Revisar que los campos no estén vacíos
		if(empty($nombre) || empty($telefono) || empty($email) || empty($estado) || empty($ciudad) || empty($mensaje)){
			header("Location:../contacto.php?error=Faltan valores");
		}

		//Validar campo Nombre
		elseif($resp1 == false){
			header("Location:../contacto.php?error=*Nombre Inválido");
		}

		elseif(strlen($nombre)<2){
			header("Location:../contacto.php?error='*Nombre:' Mínimo 2 caracteres");
		}

		elseif(strlen($nombre)>100){
			header("Location:../contacto.php?error='*Nombre' M&aacute;ximo 100 caracteres");
		}

		//Validar campo Teléfono
		elseif(!is_numeric($telefono)){
			header("Location:../contacto.php?error='*Télefono:' Télefono Inválido");
		}

		//Validar campo e-mail
		elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location:../contacto.php?error='*E-mail' Inválido");
		}

		elseif(strlen($email)>100){
			header("Location:../contacto.php?error='*E-mail' M&aacute;ximo 100 caracteres");
		}

		//Validar campo estado
		elseif($resp2 == false){
			header("Location:../contacto.php?error='*Estado:' Campo Inválido");
		}

		elseif(strlen($estado)<2){
			header("Location:../contacto.php?error='*Estado:' Mínimo 2 caracteres");
		}

		elseif(strlen($estado)>70){
			header("Location:../contacto.php?error='*Estado:' Máximo 70 caracteres");
		}

		//Validar campo ciudad
		elseif($resp3 == false){
			header("Location:../contacto.php?error='*Ciudad:' Campo Inválido");
		}

		//Validar campo mensaje
		elseif(strlen($mensaje)<5){
			header("Location:../contacto.php?error='*Mensaje:' Mínimo 5 caracteres");
		}

		elseif(strlen($mensaje)>500){
			header("Location:../contacto.php?error='*Mensaje:' Máximo 500 caracteres");
		}

		//Validar checkbox con términos y condiciones
		elseif(!isset($terminos)){
			header("Location:../contacto.php?error=*Debes aceptar los términos y condiciones");
		}

		else{
			//a quién será enviado
			$destino = "juan_27angel@hotmail.com";

			//asunto
			$asunto = "Mensaje enviado desde la página web";

			//cabeceras para el envío del mail en formato html
			$headers = "MIME-Version: 1.0"."\r\n";
			$headers.= "Content-type: text/html; charset=UTF-8\r\n";

			//contenido del mensaje
			$contenido = '
				<!DOCTYPE html>
				<html lang="es">
				<head></head>
				<body>
					<h2>'.$nombre.' ha enviado el siguiente mensaje a través de tu sitio web:</h2>
				
					<p>'.$mensaje.'</p>

					<ul>
						<li>'.$ciudad.'</li>
						<li>'.$estado.'</li>
					</ul>
			
					<p>Contacta a  '.$nombre.' al correo:  <span style="color:blue;"> '.$email.'</span> o al télefono: '.$telefono.' </p>
					
					<p>Ir a mi sitio web <span style="color:blue">http://www.friocontrol.com/</span></p>
				</body>
				</html>
			';

			//envío de mail
			$envio = mail($destino, $asunto, $contenido, $headers);

			if($envio){
				header("Location: gracias.php");

				//enviando autorespuesta
				$pfw_header = "From: tucorreo@mail.comn"
				. "Reply-To: tucorreo@mail.comn";
				$pfw_subject = "Mensaje recibido";
				$pfw_email_to = "$correo";
				$pfw_message = "Muchas Gracias $nombre, por su mensaje: $mensaje"
				. "Su mensaje ha sido recibido satisfactoriamente. n"
				. "Nos pondremos en contacto contigo lo antes posible en su e-mail: $correo n"
				. " n"
				. " n"
				. "--------------------------------------------------------------------------n"
				. "Favor de NO responder este E-mail ya que es generado Automaticamente.n";
				@mail($pfw_email_to, $pfw_subject ,$pfw_message ,$pfw_header );

			}else{
				header("Location:../contacto.php?error=Inténtelo de nuevo en unos momentos");
			}
		}
	}
?>