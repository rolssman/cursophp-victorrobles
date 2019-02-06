<?php
// Inicio sesiones
session_start();

//Logout
if(isset($_SESSION["logged"])){
	unset($_SESSION["logged"]); //Destruye una variable especificada
	//session_destroy();
	header("Location: login.php");
}
?>