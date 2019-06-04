<?php
  session_start();
  if(!$_SESSION){
    header("Location: https://localhost/Login.php");
  }
  if(isset($_SESSION['priv'])){
    $p= $_SESSION['priv'];
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
	$a=$_POST['username'];
	$b=$_POST['password'];
	$c=$_POST['password2'];
	$d=$_POST['Nombre'];
	$e=$_POST['apellidoP'];
	$f=$_POST['apellidoM'];
	$g=$_POST['telefono'];
	$h=$_POST['rfc'];
	$i=$_POST['email'];
	$j=$_POST['Empresa'];
	$k=$_POST['Giro'];
	$l=$_POST['Dir'];
	$m=$_POST['Puesto'];
	$n=$_POST['Privi'];
    date_default_timezone_set('America/Mexico_City');
    $f2= date("Y-m-d");
    $g2= DATE("H:i");

	$conn= new mysqli($servername, $username, $password, $dbname);
	if(!$conn){
		echo "Error: No se pudo conectar a MySQL".PHP_EOL;
		echo "Error: depuración:".mysqli_connect_errno().PHP_EOL;
		echo "Error: de depuración:".mysqli_connect_errno().PHP_EOL;
		exit;
	}
	else{
		mysqli_select_db($conn,"id6115054_app");
	if($b==$c){
		  $c= strrev($b);
			$valor=mysqli_query($conn, "INSERT INTO usuario VALUES ('', '$a', '$c', '$n', 1);");
			$valor1=mysqli_query($conn, "INSERT INTO cliente VALUES ('', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m');");
      $valor1=mysqli_query($conn, "INSERT INTO bitacora VALUES ('', '$f2', '$g2', '$us', 'Creacion de Usuario');");
      if($p == 0){
			     echo"<script type=\"text/javascript\">alert('Registro con exito :)'); window.location='/Admin/indexAdmin.php';</script>";
			     exit;
      }
      if($p == 1){
			     echo"<script type=\"text/javascript\">alert('Registro con exito :)'); window.location='/Soporte/indexSoporte.php';</script>";
			     exit;
      }
		}
		else {
			 echo"<script type=\"text/javascript\">alert('Error al registrar, verifique los campos'); window.location='Registro.php;</script>";
			 exit;
		}
 }
  mysqli_close($conn);
?>
