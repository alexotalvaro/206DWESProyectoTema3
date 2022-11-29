<!DOCTYPE html>

<html>


    <head>
        <title>ejercicio 22</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
        if (isset($_REQUEST['enviar'])) {
           print 'Usuario: '.$usuario=$_POST['usuario'].'<br>';
           print 'Contraseña: '.$contra=$_POST['contra'].'<br>';
        }else{
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>Usuario: <input type="text" name="usuario" value=""></p>
            <p>Contraseña: <input type="password" name="contra" value=""></p>
            <input type="submit" name="enviar" value="Iniciar Sesion">
        </form>

        <?php } ?>

    </body>


</html>
