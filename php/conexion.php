<?php

try{
	$conexion = new mysqli("localhost", "root", "", "greenmatik");

	if($conexion){}else{
		echo "falla en la conexión";
	}
}

catch(Exception $e){
	echo "Excepción capturada: ", $e->getMessage(), "\n";
}

?>