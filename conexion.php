<?php



/* Creando una nueva conexión a la base de datos. */
$conexion = new mysqli("127.0.0.1", "kiatxt", "pYBD23p9MIT*", "kiatxt");
//$conexion = new mysqli("127.0.0.1", "root", "", "kiatxt");
/* Comprobando si hay un error de conexión. */
if ($conexion->connect_error) {
    die('Error de conexion ' . $conexion->connect_error);
}

?>