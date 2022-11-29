<?php
date_default_timezone_set("Europe/Madrid");

$fecha = date_create();
echo date_timestamp_get($fecha);

echo date_format($fecha, 'U = Y-m-d H:i:s') . "\n";
?>
