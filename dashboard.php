<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Cliente area</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hola, <?php echo $_SESSION['username']; ?>!</p>
        <p>Bienvenido a MiWeb.com</p>
        <p><a href="index.php">Salir</a></p>
    </div>
</body>
</html>
