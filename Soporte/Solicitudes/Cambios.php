<?php
  session_start();
  if(!$_SESSION){
    header("Location: https://localhost/Login.php");
  }
  if(isset($_SESSION['user'])){
    $us= $_SESSION['user'];
  }
?>

<?php
	$servername= "localhost";
	$username= "id6115054_root";
	$password= "12345";
	$dbname="id6115054_app";
	$d=$_POST['idsol'];
	$e=$_POST['estado'];
  $f=$_POST['situa'];

	$conn= new mysqli($servername, $username, $password, $dbname);
	if(!$conn){
		echo "Error: No se pudo conectar a MySQL".PHP_EOL;
		echo "Error: depuración:".mysqli_connect_errno().PHP_EOL;
		echo "Error: de depuración:".mysqli_connect_errno().PHP_EOL;
		exit;
	}
	else{
		mysqli_select_db($conn,"id6115054_app");
	  $valor=mysqli_query($conn, "UPDATE solicitud SET estado='$e', resultado='$f' WHERE idSolicitud= '$d';");
		echo"<script type=\"text/javascript\">alert('Actualizacion con exito :)'); window.location='../indexSoporte.php';</script>";
		exit;
		}
  mysqli_close($conn);
?>
