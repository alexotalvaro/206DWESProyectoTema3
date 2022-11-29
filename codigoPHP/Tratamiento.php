<?php
print'Tu usuario es: ';
isset($_POST["usuario"]) ? print $_POST["usuario"] : "";
print '<br>';
print 'Tu contraseña es: ';
isset($_POST["contraseña"]) ? print $_POST["contraseña"] : "";

// setLocale(LC_ALL, 'es.ES.utf8');
// date_default_timezone_set("Europe/Madrid");
// $oFechaNacimiento = new DateTime();
// print '<br>';
// print 'Naciste el día: '. $oFechaNacimiento->format('d F o H:i:s');
