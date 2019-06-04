<?php
  session_start();
  if(!$_SESSION){
    header("Location: https://localhost/Login.php");
  }
?>
<?php
  $mysqli = new mysqli("localhost", "id6115054_root", "12345", "id6115054_app");
?>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,
	user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/flexboxgrid.min.css">
	<link rel="stylesheet" href="estilos.css">
      <title>Servicios TI</title>
</head>
<body>
<header>
      <div class="logo-menu">
        <div class="container">
          <div class="row middle-xs between-xs">
            <div class="logo col-xs-12 col-sm-5 center-xs start-sm"><h2>Servicios TI</h2></div>
            <nav class="menu col-xs-12 col-sm-7 center-xs end-sm">
              <a href="../indexSoporte.php">Inicio</a>
              <a href="../../Fin.php">Cerrar Sesión</a>
            </nav>
          </div>
        </div>
      </div>
	  </header>
       <div class="titulo center-xs col-xs-12">
		 <H1>Reparación de Software</h1>
			</div>

    <div class="main">
      <div class="container">
        <div class="row center-xs">

		 <div class="login-box col-xs-6 ">
			  <center><h2>Registra los datos</h2></center>
        <?php
        $query1 = $mysqli -> query ("SELECT * FROM servicio where idServicio= 2");
        $valores = mysqli_fetch_array($query1);
        echo '<form action="../Alta.php" method="post" name="Alta">
              <p>Nombre</p>
              <input type="text" name="nombre" value="'.$valores['nombre'].'" >
            	<p>Precio</p>
              <input type="text" name="precio" value="'.$valores['precio'].'">
              <p>Técnico</p>
              <input type="text" name="tec" value="'.$valores['tecnico'].'" >
              <p>Horas estimadas</p>
              <input type="text" name="horas" placeholder="Horas estimadas" required="required">
              <p>Descripción del Problema</p>
              <input type="text" name="comen" placeholder="Comentario" required="required">'
         ?>
            <input type="submit" name="submit" value="Registrar">
          </form>

           </div>
	  </div>
    <br></br>
     </div>

    <footer>
      <div class="container">
        <div class="row middle-xs between-xs bottom-md">
          <div class="col-xs-12 col-sm-5">
            <div class="nav">
              <a href="../indexSoporte.php">Inicio</a>
              <a href="#">Terminos y Condiciones</a>
              <a href="#">Contacto</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-5">
            <div class="logo">Servicios TI</div>
          </div>
        </div>
		</div>
		</footer>
	</body>
</html>
