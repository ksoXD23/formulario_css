<!DOCTYPE html>
<html>
    <head>
        <title>Segundo formulario de prueba</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">        
    </head>
    <body>
        <ul class="menu">
                <li><a href="index2.html">Crear usuario</a></li>
                <li><a href="#">Ver usuario</a></li>
                <li><a href="#">Actualizar usuario</a></li>
                <li><a href="#">Eliminar usuario</a></li>
            </ul>
        <div class="form">
            <form action="crearUsuario.php" method="post">
                <p>Nombre</p>
                <label for="Nombre">Su nombre</label>
                <br>
                <input type="text" name="nombre" placeholder="Nombre o Nombres" required>
                <p>Apellido Paterno</p>
                <label for="apellidoPaterno">Su apellido paterno</label>
                <br>
                <input type="text" name="apellidoPaterno" placeholder="Apellido paterno" required>
                <p>Apellido Materno</p>
                <label for="apellidoMaterno">Su apellido materno</label>
                <br>
                <input type="text" name="apellidoMaterno" placeholder="Apellido materno" required>
                <p>Edad</p>
                <label for="edad">Su edad</label>
                <br>
                <input type="number" name="edad" placeholder="Edad">
                <p>Usuario</p>
                <label for="usuario">Escriba el nombre de su usuario</label>
                <br>
                <input type="text" name="usuario" placeholder="Este le dar&aacute; acceso a la plataforma" required>
                <p>Contrase&ntilde;a</p>
                <label for="contraseña">Cree una contrase&ntilde;a para su usario</label>
                <br>
                <input type="text" name="contraseña" placeholder="Aqu&iacute; su nueva contrase&ntilde;a" required>
                <br>
                <br>
                <input type="submit" name="crear" value="Finalizar">
                
            </form>
        </div>
        <div class="tabla">
            <table>
                <tr>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Usuario</td>
                </tr>
            </table>
            
        </div>
    </body>
</html>

<?php
$servidor="localhost";
$usuario="formulario";
$clave="12345";
$baseDeDatos="bdFormulario";

$enlace=mysql_connect($servidor, $usuario, $clave, $baseDeDatos);
if (isset($_POST['crear'])) {
    $nombre=$_POST['nombre'];
    $apellidoPaterno=$_POST['apellidoPaterno'];
    $apellidoMaterno=$_POST['apellidoMaterno'];
    $usuario=$_POST=['usuario'];

    $insertar="insert into datos values ('$nombre','$apellidoPaterno','$apellidoMaterno','$usuario')";

    $ejecutar=mysqli_query($enlace, $insertar);

    if (!$ejecutar) {
        echo "Error en la ejecucion alv";
    }

}

?>