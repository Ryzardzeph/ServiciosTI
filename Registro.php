<?php
  session_start();
  if(!$_SESSION){
    header("Location: https://localhost/Login.php");
  }
?>

<html>
<head>
    <title> Registro</title>
	 <meta charset="UTF-8">
	 <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" type="text/css" href="css/Registro.css">
</head>
    <body>
	<div class="container">
     <div class="row middle-xs ">
    <div class="login-box col-xs-12">
    <img src="imagen/avatar.png" class="avatar">
        <h1>Registra tus datos</h1>
            <form action="Sesion.php" method="post" name="Sesion">
              <table>
                <tr>
                  <td>
            <p>Usuario</p>
              <input type="text" name="username" placeholder="Ingresar usuario" maxlength="20" required pattern="[A-Z|a-z|0-9]+"
                 oninput="setCustomValidity('')" oninvalid="setCustomValidity('Letras o números, mínimo 5 y máximo 20')">
			      <p>Contraseña</p>
              <input type="password" name="password" placeholder="Ingresar Contraseña" required="required">
			      <p>Repetir Contraseña</p>
              <input type="password" name="password2" placeholder="Repetir Contraseña" required="required">
			      <p>Nombre</p>
              <input type="text" name="Nombre"  placeholder="Ingresar Nombre" required="required" maxlength="35" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
		              oninput="setCustomValidity('')" ninvalid="setCustomValidity('Solo letras, Inicia con mayusculas')">
			      <p>Apellido Paterno</p>
              <input type="text" name="apellidoP"  placeholder="Ingresar Apellido" required="required" maxlength="35" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
		            oninput="setCustomValidity('')" ninvalid="setCustomValidity('Solo letras, Inicia con mayusculas')">
			      <p>Apellido Materno</p>
              <input type="text" name="apellidoM"  placeholder="Ingresar Apellido" required="required" maxlength="35" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
		             oninput="setCustomValidity('')" ninvalid="setCustomValidity('Solo letras, Inicia con mayusculas')">
                 <p>Teléfono</p>
                   <input type="text" name="telefono"  placeholder="Ingresar Teléfono" required="required" maxlength="12" required pattern="[0-9]+"
     		              oninput="setCustomValidity('')" oninvalid="setCustomValidity('Introduce un numero telefonico valido')">
               </td>
               <td>
			      <p>RFC</p>
              <input type="text" name="rfc"  placeholder="Ingresar RFC" required="required" maxlength="13">
            <p>Correo</p>
                <input type="email" name="email"  placeholder="Ingresar Email" required="required">
    	      <p>Empresa</p>
              <input type="text" name="Empresa"  placeholder="Ingresar Empresa" required="required" maxlength="35" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
		            oninput="setCustomValidity('')" ninvalid="setCustomValidity('Solo letras, Inicia con mayusculas')">
                <p>Giro</p>
                  <input type="text" name="Giro" placeholder="Ingresa Giro" maxlength="30" required="required" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
                  oninput="setCustomValidity('')" oninvalid="setCustomValidity('1: Soporte, 2: Gerente, 3: Cliente')">
                  <p>Dirección</p>
                    <input type="text" name="Dir" placeholder="Ingresa Dirección" maxlength="100" required="required"
                    oninput="setCustomValidity('')">
		        <p>Puesto</p>
              <input type="text" name="Puesto"  placeholder="Ingresar Puesto" required="required" maxlength="35" required pattern="[A-Za-z\sáéíóúÁÉÍÓÚ]+"
		            oninput="setCustomValidity('')" ninvalid="setCustomValidity('Solo letras, Inicia con mayusculas')">
            <p>Privilegios</p>
              <input type="text" name="Privi" placeholder="Ingresa Privilegio" maxlength="1" required pattern="[1|2|3]" required="required"
              oninput="setCustomValidity('')" oninvalid="setCustomValidity('1: Soporte, 2: Gerente, 3: Cliente')">
              <td>
            </tr>
            <tr>
            <td></td><td><input type="submit" name="submit" value="Registrar"></td>
          </tr>
          </table>
            </form>
        </div>
        </div>
       </div>

    </body>
</html>
