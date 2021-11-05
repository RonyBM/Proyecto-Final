<?php
include("../controladores/conexion.php");
$nombre = $_POST["usuario"];
$pass  = $_POST["pass"];
$_SESSION['usuario']=$nombre;

//Login
if(isset($_POST["btningresar"])){
    $query = mysqli_query($conexion,"SELECT * FROM login WHERE usuario= '$nombre' AND pass= '$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo  "<script>alert ('Bienivenido $nombre'); window.location='../../inicio.php'</script>";
    }else {
        echo  "<script>alert ('El usuario no existe'); window.location='../vistas/login.php'</script>";
    }
}

//Registro
if(isset($_POST["btnregistrar"])){
    $sqlgrabar = "INSERT INTO login(usuario,contrasenia) values ('$nombre','$pass')";
    if( mysqli_query($conexion,$sqlgrabar)){
        echo "<script> alert ('Usuario registrado exitosamente: $nombre'); window.location='../vistas/login.php'</script>";
    }else{
        echo "Error: ".$sql."<br>".mysqli_error($conexion);
    }
}

?>