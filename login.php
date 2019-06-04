<?php
  session_start();
  if(!isset($_SESSION['intentos'])){
    $_SESSION['intentos'] = 0;
  }
?>

<html>

<head>
    <title> Login</title>
	 <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="login-box">
    <img src="imagen/avatar.png" class="avatar">
        <h1>Iniciar sesión</h1>
            <form action="Start.php" method="post" name="Start">
            <p>Usuario</p>
            <input type="text" name="username" placeholder="Ingresar usuario" maxlength="20" required pattern="[A-Z|a-z|0-9]+"
                oninput="setCustomValidity('')" oninvalid="setCustomValidity('Letras o números, mínimo 5 y máximo 20')">
            <p>Contraseña</p>
            <input type="password" name="password" placeholder="Ingresar Contraseña" required="required">
            <input type="submit" name="submit" value="Ingresar">
            </form>
    </div>
</body>
</html>
