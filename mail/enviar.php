<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

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
		$terminos = limpiarCampo($_POST['terminos']);

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
			$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
			try {
				//Server settings
				$mail->SMTPDebug = false;                                 // Enable verbose debug output
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com; smtp.live.com';  // Specify main and backup SMTP servers smtp1.example.com;smtp2.example.com
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'friocontrolUser@gmail.com';                 // SMTP username
				$mail->Password = '1234friocontrol';  //1234friocontrol - friocontrolUser@gmail.com                         // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				//Recipients
				$mail->setFrom($email, $nombre);
				$mail->addAddress('info@friocontrol.com', 'Usuario');     // Add a recipient - a quién se le va a enviar
				//$mail->addReplyTo($email, 'juan.hdz.antopia@gmail.com');

				//Content
				$mail->isHTML(true);                                  // Set email format to HTML
				$mail->Subject = 'Asunto muy importante';
				$mail->Body = '
					<p>
						<h1>Mensaje de la página web</h1>
						
						<p style="font-size:20px;">'.$mensaje.'</p>
					</p>
					
					<p style="font-size:20px;">
						Puedes ponerte en contacto con <strong>'.$nombre.'</strong> al correo: '.$email.'
						o al teléfono: '.$telefono.'
					</p>

					<ul>
						<li style="font-size:20px;">Estado: '.$estado.'</li>
						<li style="font-size:20px;">Ciudad: '.$ciudad.'</li>
					</ul>
				';

				$mail->SMTPOptions = array('ssl' => array(
						'verify_peer' => false,
						'verify_peer_name' => false,
						'allow_self_signed' => true
					)
				);

				if($mail->send()){
					header("Location:gracias.php");
				}else{
					header("Location:../contacto.php?error=*Error al enviarlo, Inténtelo de nuevo en unos momentos");
				}
				
			} catch (Exception $e) {
				header("Location:../contacto.php?error=*Error al enviarlo, Inténtelo de nuevo en unos momentos", $mail->ErrorInfo);
			}
		}
	}
?>