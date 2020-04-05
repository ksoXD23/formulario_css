<?php

include("conexion.php");
$idMod=$_GET["idMod"];

if (isset($_POST['crear'])) {	
	
    $nombre=$_POST['nombre'];
    $apellidoPaterno=$_POST['apellidoPaterno'];
    $apellidoMaterno=$_POST['apellidoMaterno'];
    $usua=$_POST['usuario'];
    $pass=$_POST['password'];
    $insertar="INSERT INTO datos VALUES ('$id',
    									'$nombre',
    									'$apellidoPaterno',
    									'$apellidoMaterno')";

    $user="INSERT INTO login VALUES ('$usua', '$pass')";
    						}

    $ejecutar=mysqli_query($enlace, $insertar);
    $ejecutaruser=mysqli_query($enlace, $user);

     if (!$ejecutar) {
        echo "Error en la ejecuci&oacute;n";
    }
    else {

    	alert("Se guardo con exito");
        
        if (!$ejecutaruser) {
            echo"Error en ejecutar el guardado"; 
        }
    }
?>