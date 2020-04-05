<!DOCTYPE html>
<html>
    <head>
        <script>
            function modificar(primary) {
                window.location="http://localhost/practicas/formulario_css/modificar.php?idMod="+primary;
            }
        </script>
        <title>leer usuario</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">        
    </head>
    <body>
        <ul class="menu">
                <li><a href="crear.php">Crear usuario</a></li>
                <li><a href="leer.php">Ver usuario</a></li>
                <li><a href="modificar.php">Actualizar usuario</a></li>
                <li><a href="#">Eliminar usuario</a></li>
                <li><a href="index.html">Salir</a></li>
            </ul>
            <div class="form">
        <div class="tabla">
            <table>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Mod</td>
                </tr>
                    <?php
                        include("control/leerUsuario.php");
                    ?>
            </table>
            </div>
        </div>
        <a href="crear.php">volver</a>
    </body>
</html>