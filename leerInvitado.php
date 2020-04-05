<!DOCTYPE html>
<html>
    <head>
        <title>Ver Usuario como invitado</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">        
    </head>
    <body>
        <ul class="menu">
                <li><a href="leerInvitado.php">Ver usuario</a></li>
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
        <a href="index.html">salir</a>
    </body>
</html>