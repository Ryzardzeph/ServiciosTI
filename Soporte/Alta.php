<?php
  session_start();
  if(!$_SESSION){
    header("Location: https://localhost/Login.php");
  }
  if(isset($_SESSION['user'])){
    $us= $_SESSION['user'];
  }
  if(isset($_POST['nombre'])){
    $a=$_POST['nombre'];
  }
  if(isset($_POST['precio'])){
    $b=$_POST['precio'];
  }
  if(isset($_POST['tec'])){
    $c=$_POST['tec'];
  }
?>

<?php
  date_default_timezone_set('America/Mexico_City');
	$servername= "localhost";
	$username= "id6115054_root";
	$password= "12345";
	$dbname="id6115054_app";
	$d=$_POST['horas'];
	$e=$_POST['comen'];
  $f= date("Y-m-d");
  $g= DATE("H:i");

	$conn= new mysqli($servername, $username, $password, $dbname);
	if(!$conn){
		echo "Error: No se pudo conectar a MySQL".PHP_EOL;
		echo "Error: depuración:".mysqli_connect_errno().PHP_EOL;
		echo "Error: de depuración:".mysqli_connect_errno().PHP_EOL;
		exit;
	}
	else{
		mysqli_select_db($conn,"id6115054_app");
	  $valor=mysqli_query($conn, "INSERT INTO solicitud VALUES ('', '$f', '$g','$b', '$d', '$e', '$a', 'En proceso', '');");
		$valor1=mysqli_query($conn, "INSERT INTO bitacora VALUES ('', '$f', '$g', '$us', 'Alta Servicio');");
		echo"<script type=\"text/javascript\">alert('Registro con exito :)'); window.location='indexSoporte.php';</script>";
		exit;
		}
  mysqli_close($conn);
?>
