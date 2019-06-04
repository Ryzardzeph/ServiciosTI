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
              <a href="../indexAdmin.php">Inicio</a>
              <a href="../../Fin.php">Cerrar Sesión</a>
            </nav>
          </div>
        </div>
      </div>
	  </header>
       <div class="titulo center-xs col-xs-12">
		 <H1>Bitácora de procesos</h1>
			</div>

    <div class="main">
      <div class="container">
        <div class="row center-xs">

		 <div class="contenedor">
			<div class="col-xs-1 col-sm-4 col-md-12">
		<table>
			<thead>
				<tr>
					<th>Folio</th><th>Fecha de Registro</th><th>Hora de Registro</th><th>Usuario</th><th>Proceso</th>
				</tr>
			</thead>
      <?php
       $query1 = $mysqli -> query ("SELECT * FROM bitacora");
       while ($valores = mysqli_fetch_array($query1)) {
           echo '<tr>
             <td>'.$valores['idBitacora'].'</td><td>'.$valores['fecha'].'</td><td>'.$valores['hora'].'</td><td>'.$valores['user'].'</td><td>'.$valores['proceso'].'</td>
            </tr>';
        }
     ?>
     </table>
     <br></br>
		  	</div>
           </div>
	  </div>
     </div>

    <footer>
      <div class="container">
        <div class="row middle-xs between-xs bottom-md">
          <div class="col-xs-12 col-sm-5">
            <div class="nav">
              <a href="../indexAdmin.php">Inicio</a>
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
