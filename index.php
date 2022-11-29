<!DOCTYPE html>

<html>


    <head>
        <title>EJERCICIOS TEMA 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Tipografía -->
        <link href="https://fonts.googleapis.com/css2?family=Chela+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&family=Lobster&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">




        <style>

            *{
                margin: 0;
                padding: 0;


            }
            body {
                background:  #00bbfc ;
                background-size: 100%;
                height: 100%;
                background-repeat: no-repeat;



            }

            main{
                margin-bottom: 15vh;
            }

            h1 {

                text-align: center;
                text-decoration: underline;
                color: black;
                font-family: 'Indie Flower', cursive;

            }

            table {

                border-collapse: collapse;
                border: none;
                font-family: 'Architects Daughter', cursive;
            }

            tr td{

                padding-left: 15px;
            }


            td {
                border: 1px solid black;
            }

            footer {
                background-color: white;
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


            td img {
                Width: 15px;
            }
        </style>

    </head>

    <body>
        <header><h1> TEMA 3: CARACTERÍSTICAS DEL LENGUAJE PHP</h1></header>

        <main>
            <table>

                <!-- AQUI VAN LAS COLUMNAS -->
                <tr>
                    <th>ENUNCIADO</th>
                    <th>PLAY</th>
                    <th>CÓDIGO</th>
                </tr>

                <!-- AQUÍ EL EJERCICIO 0 -->
                <tr>
                    <td>0. Hola mundo y phpinfo().</td>
                    <td><a href="codigoPHP/ejercicio00.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio00.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 1 -->
                <tr>
                    <td>1. Inicializar variables de los distintos tipos de datos básicos(string, int, float, bool) y mostrar los
                        datos por pantalla (echo, print, printf, print_r,
                        var_dump).</td>
                    <td><a href="codigoPHP/ejercicio01.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio01.php"><img src="doc/php.png"></a></td>
                </tr>

                <!-- AQUÍ EL EJERCICIO 2 -->
                <tr>
                    <td>2. Inicializar y mostrar una variable heredoc.</td>
                    <td><a href="codigoPHP/ejercicio02.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio02.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 3 -->
                <tr>
                    <td>3. Mostrar en tu página index la fecha y hora actual formateada en castellano. (Utilizar cuando sea
                        posible la clase DateTime)</td>
                    <td><a href="codigoPHP/ejercicio03.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio03.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 4 -->
                <tr>
                    <td>4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués.</td>
                    <td><a href="codigoPHP/ejercicio04.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio04.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 5 -->
                <tr>
                    <td>5. Inicializar y mostrar una variable que tiene una marca de tiempo (timestamp)</td>
                    <td><a href="codigoPHP/ejercicio05.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio05.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 6 -->
                <tr>
                    <td>6. Operar con fechas: calcular la fecha y el día de la semana de dentro de 60 días.</td>
                    <td><a href="codigoPHP/ejercicio06.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio06.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 7 -->
                <tr>
                    <td>7. Mostrar el nombre del fichero que se está ejecutando</td>
                    <td><a href="codigoPHP/ejercicio07.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio07.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 8 -->
                <tr>
                    <td>8. Mostrar la dirección IP del equipo desde el que estás accediendo</td>
                    <td><a href="codigoPHP/ejercicio08.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio08.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 9 -->
                <tr>
                    <td>9. Mostrar el path donde se encuentra el fichero que se está ejecutando.</td>
                    <td><a href="codigoPHP/ejercicio09.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio09.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 10 -->
                <tr>
                    <td>10. Mostrar el contenido del fichero que se está ejecutando.</td>
                    <td><a href="codigoPHP/ejercicio10.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio10.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 11 -->
                <!--<tr>
                    <td>11. Mostrar el documento PHPDoc del proyecto que se está ejecutando generado con PHP Documentor o
                        ApiGen.</td>
                    <td><a href="codigoPHP/ejercicio11.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio11.php"><img src="doc/php.png"></a></td>
                </tr>-->
                <!-- AQUÍ EL EJERCICIO 12 -->
                <tr>
                    <td>12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).</td>
                    <td><a href="codigoPHP/ejercicio12.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio12.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 13 -->
                <tr>
                    <td>13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.</td>
                    <td><a href="codigoPHP/ejercicio13.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio13.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 14 -->
                <tr>
                    <td>14. Comprobar las librerías que estás utilizando en tu entorno de desarrollo y explotación. Crear tu
                        propia librería de funciones y estudiar la
                        forma de usarla en el entorno de desarrollo y en el de explotación.</td>
                    <td><a href="codigoPHP/ejercicio14.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio14.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 15 -->
                <tr>
                    <td>15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. Recorrer el array para
                        calcular el sueldo percibido durante la
                        semana. (Array asociativo con los nombres de los días de la semana).</td>
                    <td><a href="codigoPHP/ejercicio15.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio15.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 16 -->
                <tr>
                    <td>16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                    <td><a href="codigoPHP/ejercicio16.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio16.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 17 -->
                <!-- <tr>
                    <td>17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las
                        personas que tienen reservado el
                        asiento en un teatro de 20 filas y 15 asientos por fila. (Inicializamos el array ocupando únicamente 5
                        asientos). Recorrer el array con
                        distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las
                        personas que lo ocupan.</td>
                    <td><a href="codigoPHP/ejercicio17.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio17.php"><img src="doc/php.png"></a></td>
                </tr> -->
                <!-- AQUÍ EL EJERCICIO 18 -->
                <!-- <tr>
                    <td>18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</td>
                    <td><a href="codigoPHP/ejercicio18.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio18.php"><img src="doc/php.png"></a></td>
                </tr><! AQUÍ EL EJERCICIO 19 -->
                <!-- <tr> 
                    <td>19. Construir una librería de funciones de validación de campos de formularios
                        (LibreríaValidacionFormularios.php) para utilizarla en los
                        siguientes ejercicios. Discusión: diferencia entre librería de funciones y clase.</td>
                    <td><a href="codigoPHP/ejercicio19.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio19.php"><img src="doc/php.png"></a></td>
                </tr> -->
                <!-- AQUÍ EL EJERCICIO 20 -->
                <tr>
                    <td>20. Convertir la LibreriaValidacionFormularios.php en una clase ValidacionFormularios.php. El profesor
                        facilitará a los alumnos la clase
                        AAMMDDValidacionFormularios.php desarrollada en el curso anterior como punto de partida.</td>
                    <td><a href="codigoPHP/ejercicio20.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio20.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 21 -->
                <tr>
                    <td>21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página
                        Tratamiento.php para que muestre
                        las preguntas y las respuestas recogidas.</td>
                    <td><a href="codigoPHP/ejercicio21.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio21.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 22 -->
                <tr>
                    <td>22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma
                        página las preguntas y las respuestas
                        recogidas.</td>
                    <td><a href="codigoPHP/ejercicio22.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio22.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 23 -->
                <tr>
                    <td>23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma
                        página las preguntas y las respuestas
                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el
                        mensaje correspondiente.</td>
                    <td><a href="codigoPHP/ejercicio23.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio23.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 24 -->
                <tr>
                    <td>24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma
                        página las preguntas y las respuestas
                        recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el
                        mensaje correspondiente, pero las
                        respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a
                        teclearlas.</td>
                    <td><a href="codigoPHP/ejercicio24.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio24.php"><img src="doc/php.png"></a></td>
                </tr><!-- AQUÍ EL EJERCICIO 25 -->
                <tr>
                    <td>25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.</td>
                    <td><a href="codigoPHP/ejercicio25.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio25.php"><img src="doc/php.png"></a></td>
                </tr>
                <!-- AQUÍ EL EJERCICIO 26 
                <tr>
                    <td>26. Probar la plantilla anterior desarrollando un formulario que recoja la temperatura y la presión
                        atmosférica en una serie de fechas y (cuando
                        el usuario lo decida) genere un informe con los datos recibidos y un promedios, mínimos y máximos de
                        temperatura y presión atmosférica.</td>
                    <td><a href="codigoPHP/ejercicio26.php"><img src="doc/play.png"></a></td>
                    <td><a href="mostrarcodigo/muestraejercicio26.php"><img src="doc/php.png"></a></td>
                </tr>
                -->

            </table>

        </main>

        <footer>
            <a href="/../index.php" style="text-decoration:none">
                <img src="../doc/home.png" alt="inicio" onmouseover="this.width = 50;this.height = 50;"
                     onmouseout="this.width = 39;this.height = 39;" width="39" title="inicio" />
            </a>
            <a href="/doc/CV.pdf" target="_blank" style="text-decoration: none">
                <img src="/doc/cv-logo.png" alt="curriculum" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="curriculum vitae" class="icono_cv" />
            </a>

            © Alejandro Otálvaro Marulanda

            <a href="http://www.linkedin.com/in/alejandro-otálvaro-marulanda/" target="_blank"
               style="text-decoration: none">
                <img src="/doc/link2.png" alt="linkedin" onmouseover="this.width = 50;" onmouseout="this.width = 39;"
                     width="39" title="linkedin" class="icono_link" />
            </a>

        </footer>

    </body>


</html>