<?php

	include('conexion.php');

	function limpiarCampos($campo){
		$campo = trim($campo);
		$campo = htmlspecialchars($campo);

		return $campo;
	}

	$nombre = limpiarCampos($_POST['nombre']);
	$contenido = limpiarCampos($_POST['contenido']);
	$imagen = addslashes(file_get_contents($_FILES['imagenes']['tmp_name']));
	$categoria = limpiarCampos($_POST['categoria']);

	$query = "INSERT INTO informacion(nombre, contenido, img, categoria) VALUES('$nombre','$contenido', '$imagen', '$categoria')";
	$resultado = $conexion->query($query);

	if($resultado){
		echo "datos insertados correctamente";
		header('Refresh: 2; URL=subirImagenes.html');
	}else{
		echo "Hubo errores";
		header('Refresh: 2; URL=subirImagenes.html');
	}
?>