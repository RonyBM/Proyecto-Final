<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge' charset="UTF'8">
    <title>Crear Cuenta</title>
    <link rel='stylesheet' href='../../css/styles.css'>
    <script src='main.js'></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
            <a class="navbar-brand" href="../../index.php">Cotizador Amazon</a>
        </div>
    </nav>
    <div class="loginbox">
        <img class="avatar" src="../../assets/img/user.jpg" alt="Logo del login">
    <h1>Crear Usuario</h1>
    <form action="login_registar.php" method="POST">
        <!--USERNAME-->
        <label for="username">Nombre de Usuario</label>
        <input class="form-control form-control-sm" type="text" placeholder="Ingrese nombre de usuario" name="usuario" required>

        <!--PASSWORD-->
        <label for="passwsord">Contaseña</label>
        <input  class="form-control form-control-sm" type="password" placeholder="Ingrese contraseña de usuario" name="pass"  required>

        <!--VALIDAR-->
        <input type="submit" value="Registrar Usuario" name="btnregistrar">

        <!--INICIAR SESION-->
        <a href="login.php">Regesar</a><br>
    </div>
    </form>
</body>
</html>