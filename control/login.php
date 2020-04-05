<?php 
	include("conexion.php");

	$userlog=$_POST['userlog'];
	$passlog=$_POST['passlog'];

	$query=mysqli_query($enlace, "SELECT * FROM login WHERE usuario = '".$userlog."' AND password ='".$passlog."'");
	$nr=mysqli_num_rows($query);

		if ($nr==1) {
			header("location: ../crear.php");
		} elseif ($nr==0)
			header("location: ../index.html");

?>