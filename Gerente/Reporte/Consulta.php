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
              <a href="../indexGerente.php">Inicio</a>
              <a href="../../Fin.php">Cerrar Sesión</a>
            </nav>
          </div>
        </div>
      </div>
	  </header>
       <div class="titulo center-xs col-xs-12">
		 <H1>Solicitudes</h1>
			</div>

    <div class="main">
      <div class="container">
        <div class="row center-xs">
          <div class="login-box col-xs-6 ">
          <center><h2>Registra los datos</h2></center>
          <form method="POST" name="Fechas">
          <p>Fecha de Inicio</p>
             <input type="date" name="inicio" required>
             <p>Fecha Final</p>
             <input type="date" name="fin" required>
             <input type="submit" name="submit" value="Registrar">
           </form>
          </div>
		 <div class="contenedor">
			<div class="col-xs-1 col-sm-4 col-md-12">
		<table>
			<thead>
				<tr>
					<th>Folio</th><th>Fecha Registrada</th><th>Hora Registrada</th><th>Precio</th><th>Tiempo a espera</th><th>Problematica</th><th>Tipo de Servicio</th>
          <th>Estado</th><th>Situacion</th>
				</tr>
			</thead>
      <?php
      if(isset($_POST['inicio'])){
        $b=$_POST['inicio'];
      }
      if(isset($_POST['fin'])){
        $c=$_POST['fin'];
      }
       $query1 = $mysqli -> query ("SELECT * FROM solicitud WHERE dia BETWEEN '$b' and '$c';");
       while ($valores = mysqli_fetch_array($query1)) {
           echo '<tr>
             <td>'.$valores['idSolicitud'].'</td><td>'.$valores['dia'].'</td><td>'.$valores['hora'].'</td><td>'.$valores['precio'].'</td><td>'.$valores['hora_esp'].'</td>
             <td>'.$valores['comentario'].'</td><td>'.$valores['tipoSolicitud'].'</td><td>'.$valores['estado'].'</td><td>'.$valores['resultado'].'</td>
            </tr>';
        }
     ?>
     </table>
		  	</div>
      </div>

	  </div>
    <br></br>
     </div>



    <footer>
      <div class="container">
        <div class="row middle-xs between-xs bottom-md">
          <div class="col-xs-12 col-sm-5">
            <div class="nav">
              <a href="../indexGerente.php">Inicio</a>
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
