<?php
include("conexion.php");
$nombre = $_POST["usuario"];
$pass  = $_POST["pass"];

//Login
if(isset($_POST["btningresar"])){
    $query = mysqli_query($conexion,"SELECT * FROM login WHERE usuario = '$nombre' AND password= '$pass'");
    $nr = mysqli_num_rows($query);

    if($nrr==1){
        echo  "<script>alert ('Bienivenido $nombre'); window.location='principal.html'</script>";
    }else {
        echo  "<script>alert ('El usuario no existe'); window.location='../html/login.html'</script>";
    }
}

//Registro
if(isset($_POST["btnregistrar"])){
    $sqlgrabar = "INSERT INTO login(usuario,password) values ('$nombre','$pass')";
    if( mysqli_query($conexion,$sqlgrabar)){
        echo "<script> alert ('Usuario registrado exitosamente: $nombre'); window.location='principal.html'</script>";
    }else{
        echo "Error: ".$sql."<br>".mysqli_error($conexion);
    }
}

?>