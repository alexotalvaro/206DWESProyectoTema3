<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIO 03 PDO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">





        <style>

            body{
                background-color: mistyrose;
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
        </style>

    </head>
    <body>
        <?php
        //Incluir libreria de validacion
        require_once '../core/221024libreriaValidacionFormularios.php';
        //La siguiente variable comprueba si se han producido errores o no en los input.
        $entradaOk = true;
        //El siguiente array inicia dos campos, uno por cada input a registrar.
        $aErrores = [
            'Nombre' => '',
            'NotaMedia' => ''
        ];
        //y el array de respuestas con los mismos campos;
        $aRespuestas = [
            'Nombre' => '',
            'NotaMedia' => ''
        ];
        //En el siguiente bloque de código. se comprueba si se ha pulsado el botón Enviar.
        //Si se ha pulsado, se rellena con los valores de los input rellenados por los usuarios.
        if (!empty($_REQUEST['Enviar'])) {
            //Validación del nombre
            $aErrores['Nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['Nombre'], 1000, 1, 1);
            //Validación de la nota media
            $aErrores['NotaMedia'] = validacionFormularios::comprobarEntero($_REQUEST['NotaMedia'], 280, 0, 1);
            /*
             * Bucle para comprobar si ha habido errores.Si los ha habido, pone la variable $entradaOk a false
             * 
             */
            foreach ($aErrores as $clave => $valor) {
                if ($valor != null) {
                    $_REQUEST[$clave] = '';
                    $entradaOk = false;
                }
            };
        } else {
            //$entradaOk a false
            $entradaOk = false;
        }
        if ($entradaOk) {
            //Si todo ha ido bien, cargo los valores recogidos en el array de respuestas.
            $aRespuestas['Nombre'] = $_REQUEST['Nombre'];
            $aRespuestas['NotaMedia'] = $_REQUEST['NotaMedia'];
            echo "<h3><span style='color:orange'>Nombre: </span> " . $aRespuestas['Nombre'] . "</h3>";
            echo "<br>";
            echo "<h3><span style='color:orange'>Nota Media: </span>" . $aRespuestas['NotaMedia'] . "</h3>";
            //El siguiente bucle queda comentado, es necesario para imprimir iterativamente el array,
            //Pero el estandar de desarrollo reclama una impresión perosnalizada campo a campo.
        } else {
            ?>
            <form name="ejercicio024" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <fieldset id="primerFieldset">
                    <legend>Nombre y apellidos</legend>
                    <label for="Nombre">Nombre usuario:</label><br>
                    <input type="text" id="Nombre" name="Nombre" value="<?php echo $_REQUEST['Nombre'] ?? '' ?>">
                    <p><?php echo '<span style="color: red;">' . $aErrores['Nombre'] . '</span>'; ?></p>
                </fieldset>
                <fieldset>
                    <legend>¿Cuál ha sido su nota media en el ciclo?</legend>
                    <label for="NotaMedia">Introduzca su nota como entero:</label><br>
                    <input type = "text"  name = "NotaMedia" value = "<?php echo $_REQUEST['NotaMedia'] ?? '' ?>"/>
                    <p><?php echo '<span style="color: red;">' . $aErrores['NotaMedia'] . '</span>'; ?></p>
                </fieldset>
                <fieldset id="botones">
                    <div  id="botonEnviarBotonReset">
                        <input type="submit" name="Enviar" value="Enviar" id="botonEnviar"/>
                    </div>
                </fieldset>
            </form>
        <?php } ?>

        <footer>
            <a href="/../index.html" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>

            © Alejandro Otálvaro Marulanda

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="../doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>
        </footer>

    </body>
</html>
