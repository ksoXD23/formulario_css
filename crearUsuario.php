<?php

declare(strict_types=1);
//conectar al servidor
$conectar=@mysql_connect('localhost','kso','kso2526');
//verificar la conexión
if(!$conectar){
echo"No se pudo conectar con el servidor";
}
else{
$base=mysql_select_db('bdFormulario');
if (!$base){
echo"No se encuentra la base de datos";
}
}
//recuperar variables
$nombre=$_POST['nombre'];
$apellidoPaterno=$_POST['apellidoPaterno'];
$apellidoMaterno=$_POST['apellidoMaterno'];
$edad=$_POST['edad'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$sql="insert in to datos values('$nombre', '$apellidoPaterno', '$apellidoMaterno', '$edad', '$usuario', '$contraseña')";
//ejecutar la sentencia
$ejecutar=mysql_query($sql);
//se verifica la ejecución
if(!$ejecutar){
echo"Hubo algun error";
}
else{
echo"Datos guardados correctamente<br><a href='index2.html'>volver</a>";
}
?>
