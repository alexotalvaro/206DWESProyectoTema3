<!DOCTYPE html>

<html>


    <head>
        <title>ejercicio 23</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <?php
        require_once '../core/221024libreriaValidacionFormularios.php';

        $aErrores = ['usuario' => '', 'contra' => '']; //Aquí se definen los campos donde guardamos los errores.
        $EntradaValida = true;

        if (isset($_REQUEST['enviar'])) {
            $aErrores['usuario'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuario'], 300, 1, 1); //Comprobamos que nuestros campos son correctos con alfanumerico.
            $aErrores['contra'] = validacionFormularios::comprobarAlfabetico($_REQUEST['contra'], 300, 1, 1); //Comprobamos que nuestros campos son correctos con alfanumerico.
            // Recorremos el array de errores.
            foreach ($aErrores as $key => $value) {

                if ($value != null) {
                    $_REQUEST[$key] = '';
                    $EntradaValida = false;
                }
            }
        } else {
            $EntradaValida = false;
        }

        if ($EntradaValida) {

            print 'El usuario es: ' . $_REQUEST['usuario'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra el usuario.
            print 'La contraseña es: ' . $_REQUEST['contra'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra la contraseña.
        } else {
            ?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <label>Usuario: 
                    <input type="text" name="usuario" />
                </label>
                <?php
                if ($aErrores['usuario'] != null) {
                    print '<p style="color: red";>' . $aErrores['usuario'] . '</p>';
                }
                ?>
                <br>
                <label>Contraseña:
                    <input type="password" name="contra" />
                </label>

                <?php
                if ($aErrores['contra'] != null) {
                    print '<p style="color: red";>' . $aErrores['contra'] . '</p>';
                }
                ?>
                <br>
                <input type="submit" name="enviar" value="Iniciar Sesion" />
            </form>


        <?php } ?>

    </body>

</html>


