<?php
session_start();
if(!isset($_SESSION['intentos'])){
	$_SESSION['intentos'] = 0;
}

  $servername= "localhost";
	$username= "id6115054_root";
	$password= "12345";
	$dbname="id6115054_app";
	$a=$_POST['username'];
	$b=$_POST['password'];
	$conn= new mysqli($servername, $username, $password, $dbname);

	if(!$conn){
		echo "Error: No se pudo conectar a MySQL".PHP_EOL;
		echo "Error: depuración:".mysqli_connect_errno().PHP_EOL;
		echo "Error: de depuración:".mysqli_connect_errno().PHP_EOL;
		exit;
	}
	else{
		mysqli_select_db($conn,"id6115054_app");
		$c= strrev($b);
		$valor=mysqli_query($conn, "SELECT * FROM usuario where user='$a' and pass='$c'  and estado=1;");
		if (!$valor) {
	    	die('No se puede consultar:' . mysqli_error());
		}
		else{
		    if(mysqli_num_rows($valor)==1){
          $row= mysqli_fetch_array($valor);
          $us=$row['user'];
          $pv=$row['priv'];
					$_SESSION['user']=$row['user'];
          $_SESSION['pass']=$row['pass'];
          $_SESSION['priv']=$row['priv'];
          if($pv == 0){
            echo"<script type=\"text/javascript\">alert('Bienvenido Administrador ' + '$us' + ', Usted esta siendo redireccionado a la pagina principal'); window.location='Admin/indexAdmin.php';</script>";
					  exit;
          }
          if($pv == 1){
            echo"<script type=\"text/javascript\">alert('Bienvenido Ing. Soporte ' + '$us' + ', Usted esta siendo redireccionado a la pagina principal'); window.location='Soporte/indexSoporte.php';</script>";
					  exit;
          }
          if($pv == 2){
            echo"<script type=\"text/javascript\">alert('Bienvenido Gerente ' + '$us' + ', Usted esta siendo redireccionado a la pagina principal'); window.location='Gerente/indexGerente.php';</script>";
					  exit;
          }
          if($pv == 3){
            echo"<script type=\"text/javascript\">alert('Bienvenido Cliente ' + '$us' + ', Usted esta siendo redireccionado a la pagina principal'); window.location='Cliente/indexCliente.php';</script>";
					  exit;
          }
			  }
		    else{
					$valor1=mysqli_query($conn, "SELECT * FROM usuario where user='$a' and pass='$c' and estado=0;");
          if(mysqli_num_rows($valor1)==1){
          if (!$valor1) {
				    	die('No se puede consultar:' . mysqli_error());
					}
					else{
						  echo"<script type=\"text/javascript\">alert('El Usuario esta Bloqueado, comuniquese con el soporte mas cercano'); window.location='index.html';</script>";
							exit;
					}
        }
        else{
					$_SESSION['intentos'] = $_SESSION['intentos'] + 1;
					$op= $_SESSION['intentos'];
					if($op==3){
						echo"<script type=\"text/javascript\">alert('Usuario/Contraseña se han Bloqueado '); window.location='index.html';</script>";
						$valor2=mysqli_query($conn, "UPDATE usuario SET estado=0 WHERE user= '$a';");
						$_SESSION['intentos'] = 0;
					}
					echo"<script type=\"text/javascript\">alert('Error: Usuario/Contraseña incorrectos. Intentalo de nuevo, llevas ' + '$op'); window.location='login.php';</script>";
					exit;
        }
			  }
		}
  }
  mysqli_close($conn);
?>
