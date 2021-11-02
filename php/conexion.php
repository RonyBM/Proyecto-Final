<?php
$conexion= mysqli_connect("localhost","root","","proyecto_final");


if(!$conexion){
    die ("No se ha  establecido conexión".mysqli_connect_error());
}
?>