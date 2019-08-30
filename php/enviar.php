<?php
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;

class Enviar
{
	private $data;

	public function __construct($data)
	{
		$this->data = $data;
		$this->exec();
	}

	private function exec()
	{
		$this->data['nombre']   = $this->clean($this->data['nombre']);
		$this->data['telefono'] = $this->clean($this->data['telefono']);
		$this->data['email']    = $this->clean($this->data['email']);
		$this->data['estado']   = $this->clean($this->data['estado']);
		$this->data['ciudad']   = $this->clean($this->data['ciudad']);
		$this->data['mensaje']  = $this->clean($this->data['mensaje']);
		$this->data['terminos'] = $this->clean($this->data['terminos']);

		$this->validate();
		$this->sendEmail();
	}

	private function sendEmail()
	{
		$mail = new PHPMailer(true);
		$mail->isSMTP(); // Set mailer to use SMTP

		$mail->SMTPDebug  = false;                            // Enable verbose debug output
		$mail->Host       = 'smtp.gmail.com; smtp.live.com';  // Specify main and backup SMTP servers smtp1.example.com;smtp2.example.com
		$mail->SMTPAuth   = true;                             // Enable SMTP authentication
		$mail->Username   = 'friocontrolUser@gmail.com';      // SMTP username
		$mail->Password   = '1234friocontrol';                // 1234friocontrol - friocontrolUser@gmail.com // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port       = 587;

		$mail->SMTPOptions = [
			'ssl' => [
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			]
		];

		$mail->setFrom($this->data['email'], $this->data['nombre']);
		$mail->addAddress('info@friocontrol.com', 'Usuario');

		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Asunto muy importante';
		$mail->Body = '
			<p>
				<h1>Mensaje de la página web</h1>

				<p style="font-size:20px;">'.$this->data['mensaje'].'</p>
			</p>

			<p style="font-size:20px;">
				Puedes ponerte en contacto con <strong>'.$this->data['nombre'].'</strong> al correo: '.$this->data['email'].'
				o al teléfono: '.$this->data['telefono'].'
			</p>

			<ul>
				<li style="font-size:20px;">Estado: '.$this->data['estado'].'</li>
				<li style="font-size:20px;">Ciudad: '.$this->data['ciudad'].'</li>
			</ul>
		';

		try {
			if ($mail->send()) {
				header('Location: ../gracias.php');
			} else {
				throw new \Exception("*Error al enviarlo, Inténtelo de nuevo en unos momentos", 500);
			}
		} catch (\Exception $e) {
			throw new \Exception("*Error al enviarlo, Inténtelo de nuevo en unos momentos", 500);

		}

	}

	private function validate()
	{
		if (empty($this->data['nombre']) || empty($this->data['telefono']) || empty($this->data['email']) ||
			empty($this->data['estado']) || empty($this->data['ciudad']) || empty($this->data['mensaje'])) {
			throw new \Exception('Faltan valores', 400); // Brad request code
		}

		$er1 = "/^[a-záéóóúàèìòùäëïöüñ\s]+$/i";

		$resp1 = preg_match($er1, $this->data['nombre']);
		$resp2 = preg_match($er1, $this->data['estado']);
		$resp3 = preg_match($er1, $this->data['ciudad']);

		if ($resp1 == false) {
			throw new \Exception('*Nombre Inválido', 400);
		} elseif (strlen($this->data['nombre']) < 2) {
			throw new \Exception("*Nombre: Mínimo 2 caracteres", 400);
		} elseif (strlen($this->data['nombre']) > 100) {
			throw new \Exception("*Nombre: M&aacute;ximo 100 caracteres", 400);
		}

		if (!is_numeric($this->data['telefono'])) {
			throw new \Exception("*Télefono: Télefono Inválido", 400);
		}

		if (!filter_var($this->data['email'], FILTER_VALIDATE_EMAIL)) {
			throw new \Exception("*E-mail: Inválido", 400);
		} elseif (strlen($this->data['email']) > 100) {
			throw new \Exception("*E-mail: M&aacute;ximo 100 caracteres", 400);
		}

		if ($resp2 == false) {
			throw new \Exception("*Estado: Campo Inválido", 400);
		} elseif (strlen($this->data['estado']) < 2) {
			throw new \Exception("*Estado: Mínimo 2 caracteres", 400);
		} elseif (strlen($this->data['estado']) > 70) {
			throw new \Exception("*Estado: Máximo 70 caracteres", 400);
		}

		if($resp3 == false){
			throw new \Exception("*Ciudad: Campo Inválido", 400);

			header("Location:../contacto.php?error='");
		}

		if (strlen($mensaje) < 5) {
			throw new \Exception("*Mensaje: Mínimo 5 caracteres", 400);
		} elseif (strlen($mensaje) > 500) {
			throw new \Exception("*Mensaje: Máximo 500 caracteres", 400);
		}

		if(!isset($this->data['terminos'])){
			throw new \Exception("*Debes aceptar los términos y condiciones", 400);
		}
	}

	private function clean($field)
	{
		$field = trim($field);
		$field = stripcslashes($field);
		$field = htmlspecialchars($field);
		return $field;
	}
}

if (isset($_POST['enviar'])) {
	try {
		new Enviar($_POST);
	} catch (\Exception $e) {
		header("Location: ../contacto.php?error=" . $e->getMessage(), $e->getCode());
	}
}