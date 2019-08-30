<?php

require 'catalogo.php';

class Insertar
{
	private $data;
	private $files;

	public function __construct($data, $files)
	{
		$this->data = $data;
		$this->files = $files;
		$this->exec();
	}

	private function exec()
	{
		Catalogo::insert($this->data, $this->files);
	}
}

if (isset($_POST)) {
	try {
		new Insertar($_POST, $_FILES);
		echo "datos insertados correctamente";
		header('Refresh: 2; URL=subirImagenes.html');
	} catch (\Exception $e) {
		echo "Hubo errores <br>";
		echo $e->getMessage();
		header('Refresh: 2; URL=subirImagenes.html');
	}
} else {
	header('Location: subirImagenes.html');
}
