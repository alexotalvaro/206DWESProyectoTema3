<!DOCTYPE html>

<html>


    <head>
        <title>ejercicio 24</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: mistyrose;
                text-align: center;
            }
            h1{

                font-family: 'Quicksand', sans-serif;

            }

            table {

                border-collapse: none;
                border: black solid 0.1em;
                font-family: 'Arial'
            }

            tr td{

                padding-left: 15px;
            }


            td {
                border: 1px solid black;
            }

            footer {
                background-color: grey;
                bottom: 0;
                position: fixed;
                width: 100%;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                left: 0px;

            }
            fieldset{
                width: 18vw;

            }


            strong {

                font-size: 16pt;
            }

            .icono_cv {
                position: absolute;
                top: 25px;
                left: 100px;
            }

            .icono_link {
                position: absolute;
                top: 25px;
                right: 200px;
            }

            .obligatorio{
                background: yellow;
            }

            table{
                border: none;
            }
            table td{
                border: none;
            }
        </style>
    </head>



    <body>
         <a href="../indexProyectoTema3.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="linkedin" class=".icono_cv" /></a>
        <?php
        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 11 11 2022
         * Ultima actualizacion: 22 11 2022
         */
        require_once '../core/221024libreriaValidacionFormularios.php';

        $aErrores = ['usuarioOp' => null, 'numericoOp' => null, 'usuarioOb' => null, 'numericoOb' => null]; //Aquí se definen los campos donde guardamos los errores.
        $aRespuestas = ['rUsuarioOp' => null, 'rNumericoOp' => null, 'rUsuarioOb' => null, 'rNumericoOb' => null];
        $EntradaValida = true;

        if (isset($_REQUEST['enviar'])) {
            $aErrores['usuarioOb'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuarioOb'], 300, 1, 1); //Comprobamos que nuestros campos son correctos con alfanumerico. OBLIGATORIO
            $aErrores['numericoOb'] = validacionFormularios::comprobarFloat($_REQUEST['numericoOb'], 10000, 1, 1); //Comprobamos que nuestros campos son correctos FLOAT .OBLIGATORIO
            $aErrores['usuarioOp'] = validacionFormularios::comprobarAlfabetico($_REQUEST['usuarioOp'], 300, 1, 0); //Comprobamos que nuestros campos son correctos con alfanumerico. OPCIONAL
            $aErrores['numericoOp'] = validacionFormularios::comprobarFloat($_REQUEST['numericoOp'], 300, 1, 0); //Comprobamos los campos que sean FLOAT y se separan por . 
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

            $aRespuestas['rUsuarioOb'] = $_REQUEST['usuarioOb'];
            $aRespuestas['rNumericoOb'] = $_REQUEST['numericoOb'];
            $aRespuestas['rUsuarioOp'] = $_REQUEST['usuarioOp'];
            $aRespuestas['rNumericoOp'] = $_REQUEST['numericoOp'];

            print 'El usuario Obligatorio es: ' . $aRespuestas['rUsuarioOb'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra el usuario.
            print 'El numero Obligatorio es: ' . $aRespuestas['rNumericoOb'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra la contraseña.

            if (empty($aRespuestas['rUsuarioOp'])) {
                print 'El Usuario Opcional es: ' . $aRespuestas['rUsuarioOp'] . '<br>';
            }
            if (empty($aRespuestas['rNumericoOp'])) {
                print 'El numero Opcional es: ' . $aRespuestas['rNumericoOp'] . '<br>';
            }
        } else {
            ?>


            <fieldset>
                <legend>Introduce los datos</legend>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <label>Usuario Obligatorio: 
                        <input class="obligatorio"  type="text" name="usuarioOb" value="<?php echo $_REQUEST["usuarioOb"] ?? ''; ?>"/><?php
                        if ($aErrores['usuarioOb'] != null) {
                            print '<p style="color: red";>' . $aErrores['usuarioOb'] . '</p>';
                        }
                        ?>
                    </label>


                    <br>

                    <label>Usuario Opcional: 
                        <input type="text" name="usuarioOp" value="<?php echo $_REQUEST["usuarioOp"] ?? ''; ?>"/>
                    </label>
                    <?php
                    if ($aErrores['usuarioOp'] != null) {
                        print '<p style="color: red";>' . $aErrores['usuarioOp'] . '</p>';
                    }
                    ?>
                    <br>

                    <label>Numerico Obligatorio:
                        <input class="obligatorio" type="text" name="numericoOb" value="<?php echo $_REQUEST["numericoOb"] ?? ''; ?>"/>
                    </label>

                    <?php
                    if ($aErrores['numericoOb'] != null) {

                        print '<p style="color: red";>' . $aErrores['numericoOb'] . '</p>';
                    }
                    ?>
                    <br>


                    <label>Numerico Opcional:
                        <input type="text" name="numericoOp" value="<?php echo $_REQUEST["numericoOp"] ?? ''; ?>"/>
                    </label>

                    <?php
                    if ($aErrores['numericoOb'] != null) {

                        print '<p style="color: red";>' . $aErrores['numericoOp'] . '</p>';
                    }
                    ?>
                    <br>

                    <input type="submit" name="enviar" value="Enviar" />

                </form>
            </fieldset>



        <?php } ?>

        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>

            © Alejandro Otálvaro Marulanda

        </footer>
    </body>

</html>


