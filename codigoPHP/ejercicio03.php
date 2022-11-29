<?php
setLocale(LC_ALL, 'es_ES.utf8');
date_default_timezone_set('Europe/Madrid');
//$fecha=date('j - F - Y h:i:s A',time());
print 'Fecha con date <br>';
//$fechaactual = new DateTime();
print strftime('%A %d de %B del %Y');

print '<br> Fecha con DateTime()';

$fecha = new DateTime();
print '<br>';
print $fecha->format('d F o H:i:s');

?>