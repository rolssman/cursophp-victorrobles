<?php
// Conexion 
$db = new mysqli("localhost", "root", "", "cursophp"); //instaciar el objeto de mysqli
mysqli_query($db, "SET NAMES 'utf8'"); // automatiza el uso de utf8
?>
