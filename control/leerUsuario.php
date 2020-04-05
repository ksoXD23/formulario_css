<?php 
include("conexion.php");
	$consulta="SELECT * FROM datos";
	$ejecutarcons=mysqli_query($enlace, $consulta);
	$verfilas=mysqli_num_rows($ejecutarcons);
	$fila=mysqli_fetch_array($ejecutarcons);

	if (!$ejecutarcons) {
		echo "Error en la consulta";
	} else{
		if ($verfilas<1) {
			echo "<tr><td>Sin registros</td></tr>";
		} else {
			for ($i=0; $i <= $fila ; $i++) { 
				echo'
					<tr>
						<td>'.$fila[0].'</td>
						<td>'.$fila[1].'</td>
						<td>'.$fila[2].'</td>
						<td>'.$fila[3].'</td>
						<td><img src="img/redhat-brands.svg" width="20" onclick="modificar( '.$fila[0].' )"></td>
						</tr>
						';
						$fila=mysqli_fetch_array($ejecutarcons);
			}
		}
	}
?>