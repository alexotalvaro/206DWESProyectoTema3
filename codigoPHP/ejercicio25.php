<!DOCTYPE html>

<html>


    <head>
        <title>ejercicio 25</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: mistyrose;
            }

            footer {
                background-color: grey;
                position: fixed;
                width: 100%;
                height: 5vh;
                font-size: 1em;
                font-family: 'Chela One', cursive;
                text-align: center;
                padding-top: 20px;
                padding-bottom: 30px;
                bottom: 0;
                left: 0px;


            }

            strong {

                font-size: 16pt;
            }

            .icono_atras {
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
                background: #F8ED4A  ;
            }
            .obligatorioAbajo{
                background:  #fff700 ;
                width: 100px;
            }

            .opcional{
                background:  #a3d1cf ;
            }
            .opcionalAbajo{
                background:  #a3d1cf ;
                width: 100px;
                color: white;

            }

            .disable{
                background:  #b0b0b0 ;
                color:grey;

            }
            .disableAbajo{
                background:  #b0b0b0 ;

                width: 100px;
            }

            input{
                margin: 5px;
                width: 120px;
                border: 1px solid;
            }

            fieldset label{
                padding-right: 12px;
            }

            fieldset input{
                text-align: center;
            }



        </style>
    </head>



    <body>
         <a href="../indexProyectoTema3.php"><img src="../doc/atras.png" onmouseover="this.width = 50;" onmouseout="this.width = 39;"width="39" title="atras" class=".icono_atras" /></a>   
        <?php
        /*
         * @author: ALEJANDRO OTÁLVARO MARULANDA
         * @since: 11 11 2022
         * Ultima actualizacion: 28 11 2022
         */
        require_once '../core/221024libreriaValidacionFormularios.php';

        //Aquí se definen los campos donde guardamos los errores.
        $aErrores = ['eAlfabeticoOb' => null,
            'eAlfabeticoOp' => null,
            'eAlfanumericoOb' => null,
            'eAlfanumericoOp' => null,
            'eNumericoOb' => null,
            'eNumericoOp' => null,
            'eFechaOb' => null,
            'eFechaOp' => null,
            'eEmailOb' => null,
            'eEmailOp' => null];

        //Aquí se definen los campos donde guardamos las respuestas.
        $aRespuestas = ['rAlfabeticoOp' => null,
            'rAlfanumericoOb' => null,
            'rNumericoOp' => null,
            'rAlfabeticoOb' => null,
            'rNumericoOb' => null,
            'rFechaOb' => null,
            'rFechaOp' => null,
            'rEmailOb' => null,
            'rEmailOp' => null];

        $EntradaValida = true;
        $oFechaActual = new DateTime();
        $fechaFormateada  = date_format($oFechaActual, "Y-m-d");

        if (isset($_REQUEST['enviar'])) {
            $aErrores['eAlfabeticoOb'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOb'], 300, 1, 1); //Comprobamos que nuestros campos son correctos con alfanumerico. OBLIGATORIO
            $aErrores['eAlfabeticoOp'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOp'], 300, 1, 0); //Comprobamos que nuestros campos son correctos con alfanumerico. OPCIONAL
            $aErrores['eAlfanumericoOb'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOb'], 10000, 1, 1); //Comprueba el campo Alfanumerico
            $aErrores['eAlfanumericoOp'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOb'], 10000, 1, 0); //Comprueba el campo Alfanumerico
            $aErrores['eNumericoOb'] = validacionFormularios::comprobarFloat($_REQUEST['numericoOb'], 10000, 1, 1); //Comprobamos que nuestros campos son correctos FLOAT .OBLIGATORIO
            $aErrores['eNumericoOp'] = validacionFormularios::comprobarFloat($_REQUEST['numericoOp'], 300, 1, 0); //Comprobamos los campos que sean FLOAT y se separan por . 
            $aErrores['eFechaOb'] = validacionFormularios::validarFecha($_REQUEST['fechaOb'], $fechaFormateada , "01/01/1900", 1); //Comprobamos el campo de la fecha Obligatorio.
            $aErrores['eFechaOp'] = validacionFormularios::validarFecha($_REQUEST['fechaOp'], $fechaFormateada , "01/01/1900", 0); //Comprobamos el campo de la fecha Opcional.
            $aErrores['eEmailOb'] = validacionFormularios::validarEmail($_REQUEST['emailOb'], 1);
            $aErrores['eEmailOp'] = validacionFormularios::validarEmail($_REQUEST['emailOb'], 0);
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

            $aRespuestas['rUsuarioOb'] = $_REQUEST['alfabeticoOb'];
            $aRespuestas['rNumericoOb'] = $_REQUEST['numericoOb'];
            $aRespuestas['rAlfabeticoOp'] = $_REQUEST['alfabeticoOp'];
            $aRespuestas['rNumericoOp'] = $_REQUEST['numericoOp'];
            $aRespuestas['rFechaOb'] = $_REQUEST['fechaOb'];
            $aRespuestas['rFechaOp'] = $_REQUEST['fechaOp'];

            print 'El usuario Obligatorio es: ' . $aRespuestas['rUsuarioOb'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra el usuario.
            print 'El numero Obligatorio es: ' . $aRespuestas['rNumericoOb'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra la contraseña.
            print 'La fecha Obligatoria es: ' . $aRespuestas['rFechaOb'] . '<br>'; //Cuando pulsamos el botón y está bien relleno, nos muestra la contraseña.


            if (!empty($aRespuestas['rAlfabeticoOp'])) {
                print 'El Usuario Opcional es: ' . $aRespuestas['rAlfabeticoOp'] . '<br>';
            }
            if (!empty($aRespuestas['rNumericoOp'])) {
                print 'El numero Opcional es: ' . $aRespuestas['rNumericoOp'] . '<br>';
            }
        } else {
            ?>

            <fieldset>
                <legend>INTRODUCE LOS DATOS </legend>
                <br>
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                    <label>Alfabetico Obligatorio: </label>
                    <input class="obligatorio"  type="text" name="alfabeticoOb" value="<?php echo $_REQUEST["alfabeticoOb"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eAlfabeticoOb'] != null) {
                        print '<p style="color: red";>' . $aErrores['eAlfabeticoOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>Alfabetico Opcional: </label>
                    <input type="text" class="opcional" name="alfabeticoOp" value="<?php echo $_REQUEST["alfabeticoOp"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eAlfabeticoOp'] != null) {
                        print '<p style="color: red";>' . $aErrores['eAlfabeticoOp'] . '</p>';
                    }
                    ?>
                    <br>

                    <label>Alfabetico Desactivado: </label>
                    <input type="text" class="disable" name="alfabeticoDi"  disabled value="<?php echo "ABC" ?? ''; ?>"/>
                    <br>

                    <label>Alfanumerico Obligatorio: </label>
                    <input class="obligatorio"  type="text" name="alfanumericoOb" value="<?php echo $_REQUEST["alfanumericocoOb"] ?? ''; ?>"/>

                    <?php
                    if ($aErrores['eAlfabeticoOb'] != null) {
                        print '<p style="color: red";>' . $aErrores['eAlfabeticoOb'] . '</p>';
                    }
                    ?>

                    <br>
                    <label>Alfanumerico Opcional: </label>
                    <input class="opcional"  type="text" name="alfanumericoOp" value="<?php echo $_REQUEST["alfanumericoOp"] ?? ''; ?>"/>

                    <?php
                    if ($aErrores['eAlfanumericoOp'] != null) {
                        print '<p style="color: red";>' . $aErrores['eAlfabeticoOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>Alfanumerico Desactivado: </label>
                    <input class="disable"  type="text" name="alfanumericoDi" value="<?php echo "123" ?? ''; ?>"/>
                    <br>

                    <label>Numerico Obligatorio:</label>
                    <input class="obligatorio" type="text" name="numericoOb" value="<?php echo $_REQUEST["numericoOb"] ?? ''; ?>"/>

                    <?php
                    if ($aErrores['eNumericoOb'] != null) {

                        print '<p style="color: red";>' . $aErrores['eNumericoOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>Numerico Opcional:</label>
                    <input type="text" class="opcional" name="numericoOp" value="<?php echo $_REQUEST["numericoOp"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eNumericoOb'] != null) {

                        print '<p style="color: red";>' . $aErrores['eNumericoOp'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>Numerico Desactivado: </label>
                    <input type="text" class="disable"  name="numericoDi"  disabled value="<?php echo "12345" ?? ''; ?>"/>
                    <br>
                    <label> Fecha Obligatorio:</label>
                    <input class="obligatorio" type="datetime" name="fechaOb" value="<?php echo $_REQUEST["fechaOb"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eFechaOb'] != null) {
                        print '<p style="color: red";>' . $aErrores['eFechaOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label> Fecha Opcional:</label>
                    <input type="datetime" class="opcional" name="fechaOp" value="<?php echo $_REQUEST["fechaOp"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eFechaOp'] != null) {
                        print '<p style="color: red";>' . $aErrores['eFechaOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>Fecha Desactivado: </label>
                    <input type="datetime" class="disable" name="fechaDi"  disabled value="<?php echo date("d-m-Y") ?? ''; ?>"/>
                    <br>
                    <label>e-Mail Obligatorio: </label>
                    <input class="obligatorio"  type="mail" name="emailOb" value="<?php echo $_REQUEST["emailOb"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eEmailOb'] != null) {
                        print '<p style="color: red";>' . $aErrores['eEmailOb'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>e-Mail Opcional: </label>
                    <input class="opcional"  type="mail" name="emailOp" value="<?php echo $_REQUEST["emailOp"] ?? ''; ?>"/>
                    <?php
                    if ($aErrores['eEmailOp'] != null) {
                        print '<p style="color: red";>' . $aErrores['eEmailOp'] . '</p>';
                    }
                    ?>
                    <br>
                    <label>e-Mail Desactivado: </label>
                    <input class="disable"  type="mail" name="emailOb" value="<?php echo "mail@mail.com" ?? ''; ?>"/>
                    <br>

                    <input type="submit" name="enviar" value="Enviar" />
                </form>
            </fieldset>

        <?php } ?>

        <br><br>
        <p>Leyenda:</p>
        <div class="obligatorioAbajo">Obligatorio</div>
        <div class="opcionalAbajo">Opcional</div>
        <div class="disableAbajo">Desactivado</div>
        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>

            © Alejandro Otálvaro Marulanda

        </footer>
    </body>

</html>



