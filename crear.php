<!DOCTYPE html>
<html>
    <head>
        <title>crear usuario</title>
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
            <form action="control/crearUsuario.php" method="post">
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
                 <!-- <div class="sexo">
                    <input type="radio" name="sexo" id="sexo" value="hombre">
                    <label class="label-hombre" for="hombre">Hombre</label>

                    <input type="radio" name="sexo" id="sexo" value="mujer">
                    <label class="label-mujer" for="mujer">Mujer</label>
                 </div> -->
                <p>Usuario</p>
                <label for="usuario">Su usuario para entrar a la plataforma</label>
                <br>
                <input type="text" name="usuario" placeholder="usuario" required>
                <p>Contrase&ntilde;a</p>
                <label for="contraseña">Su contrase&ntilde;a para accesar</label>
                <br>
                <input type="text" name="password" placeholder="Contrase&ntilde;a" required>
                <br>
                <br>
                <input type="submit" name="crear" value="Finalizar">
                
            </form>
        </div>
    </body>
</html>