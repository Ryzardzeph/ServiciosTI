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
	<link rel="stylesheet" href="../css/flexboxgrid.min.css">
	<link rel="stylesheet" href="../css/estilosSop.css">
      <title>Servicios TI</title>
</head>
<body>
<header>
      <div class="logo-menu">
        <div class="container">
          <div class="row middle-xs between-xs">
            <div class="logo col-xs-12 col-sm-5 center-xs start-sm"><h2>Servicios TI</h2></div>
            <nav class="menu col-xs-12 col-sm-7 center-xs end-sm">
              <a href="../Soporte/indexSoporte.php">Inicio</a>
              <a href="../Fin.php">Cerrar Sesión</a>
            </nav>
          </div>
        </div>
      </div>

	  <div class="submenu">
        <div class="container">
          <div class="row center-xs">
            <div class="col-xs">
              <nav>
                <a href="indexSoporte.php">Servicios</a>
                <a href="Registro.php">Registrar Usuario</a>
                <a href="../Soporte/Solicitudes/Solicitudes.php">Solicitudes</a>
              </nav>
            </div>
          </div>
        </div>
      </div>
	  </header>


    <div class="main">
      <div class="container">
        <div class="row around-xs">
		 <div class="contenedor">

		      <div class="contenedor_tarjeta">
		         <a href="servicios/Mantenimiento.php">
				    <figure id="tarjeta">
                         <img src="../imagen/comprar-un-servidor.jpg" class="frontal" alt="">
			                    <figcaption class="trasera">
			                        <h2 class="titulo">Mantenimiento preventivo y correctivo</h2>
			                        <hr>
		                            <p>El mantenimiento preventivo es el destinado a la conservación de equipos o instalaciones
                                    mediante la realización de revisión y reparación que garanticen su buen funcionamiento y fiabilidad,
                                    por otra parte el mantenimiento correctivo es aquel que corrige los defectos observados en los equipamientos o instalaciones,
                                    es la forma más básica de mantenimiento y consiste en localizar averías o defectos y corregirlos o repararlos.</p>
                                </figcaption>
                    </figure>
                 </a>
            </div>
			  <div class="contenedor_tarjeta">
		         <a href="servicios/ReparacionSw.php">
				    <figure id="tarjeta">
                         <img src="../imagen/software-600x396.jpg" class="frontal" alt="">
			                    <figcaption class="trasera">
			                        <h2 class="titulo">Reparación de Software</h2>
			                        <hr>
		                            <p>Este servicio consiste en reparar tanto la estructura interna como la estructura externa de su computadora.</p>
                                </figcaption>
                    </figure>
                 </a>
            </div>
			  <div class="contenedor_tarjeta">
		         <a href="servicios/ReparacionHw.php">
				    <figure id="tarjeta">
                         <img src="../imagen/montaje-de-equipos-a-medida.jpg" class="frontal" alt="">
			                    <figcaption class="trasera">
			                        <h2 class="titulo">Reparación de Hardware</h2>
			                        <hr>
		                            <p>Preparar una computadora y mantenerla en un estado óptimo de funcionamiento, conectarla de ser necesario a otras,
                                  encontrar la causa que desencadene un inconveniente y si es necesario reemplazar partes.</p>
                                </figcaption>
                    </figure>
                 </a>
            </div>
			  <div class="contenedor_tarjeta">
		         <a href="servicios/DeteccionV.php">
				    <figure id="tarjeta">
                         <img src="../imagen/computerVirusTrueIT.jpg" class="frontal" alt="">
			                    <figcaption class="trasera">
			                        <h2 class="titulo">Detección de Virus</h2>
			                        <hr>
		                            <p>Los virus informáticos son programas diseñados expresamente para interferir en el funcionamiento de una computadora,
                                  por lo tanto, su detección evita causar grandes problemas a los sistemas informáticos.</p>
                                </figcaption>
                    </figure>
                 </a>
            </div>
			  <div class="contenedor_tarjeta">
		         <a href="servicios/InstalSw.php">
				    <figure id="tarjeta">
                         <img src="../imagen/FQuAgxC_m.jpg" class="frontal" alt="">
			                    <figcaption class="trasera">
			                        <h2 class="titulo">Instalación de Software</h2>
			                        <hr>
		                            <p>Proceso fundamental por el cual los nuevos programas son transferidos a un computador con el fin de ser configurados,
                                  y preparados para ser desarrollados. Un programa recorre diferentes fases de desarrollo durante su vida útil.</p>
                                </figcaption>
                    </figure>
                 </a>
            </div>

           </div>
	  </div>
     </div>

    <footer>
      <div class="container">
        <div class="row middle-xs between-xs bottom-md">
          <div class="col-xs-12 col-sm-5">
            <div class="nav">
              <a href="indexSoporte.php">Inicio</a>
              <a href="#">Terminos y Condiciones</a>
              <a href="#">Contacto</a>
            </div>
          </div>

          <div class="col-xs-12 col-sm-5">
            <div class="logo">Servicios TI</div>
          </div>
        </div>
		</div>
	</body>
</html>
