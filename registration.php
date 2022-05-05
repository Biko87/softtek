<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $rol = stripslashes($_REQUEST['rol']);
        $rol = mysqli_real_escape_string($con, $rol);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, rol, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$rol', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Te has Registrado con éxito.</h3><br/>
                  <p class='link'><a href='login.php'>Inicia Sesión</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Faltan campos obligatorios.</h3><br/>
                  <p class='link'> <a href='registration.php'>¿No tienes una cuenta?</a></p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registrar</h1>
        <input type="text" class="login-input" name="username" placeholder="Nombres" required />
        <input type="text" class="login-input" name="email" placeholder="Correo">
        <input type="hidden" class="logi-input" name="rol" value="Usuario">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Registrar" class="login-button">
        <p class="link">¿Ya tienes una cuenta? <a href="login.php">Entre aquí</a></p>
    </form>
<?php
    }
?>
</body>
</html>
