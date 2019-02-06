<?php

/* 
 Utiliza la función filter_var para comprobar si el
email que nos llega por la URL es un email valido.
 */
// si no esta vacio
function validateEmail($email){
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$status = "VALIDO";
	}else{
		$status = "NO VALIDO";
	}
	
	return $status;
}

$email = "";
if(isset($_GET["email"])){ //si existe la variable "email"
	$email = $_GET["email"];
}

echo validateEmail($email);
