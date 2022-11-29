<?php

$ofecha = new DateTime(null, new DateTimeZone('Europe/Madrid'));

echo $ofecha->format('1 d/m/y H:i:s')
?>