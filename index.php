<h1>
<?php
    echo "Hola mundo" . "<br />";
    echo "Después de 5 segundos será direccionado a la App de Registro de Usuarios.";
    header( "refresh:5;url=./app/index.php" );
?>
</h1>