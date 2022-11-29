<?php
echo "<style>td {border: black solid;}</style>"; 
echo "<h1>VARIABLES GLOBALES </h1>";
foreach ($GLOBALS as $key => $value) {
    echo ("<h3>".$key."</h3>");
    echo "<table>";
    foreach ($value as $key2 => $value2) {
        echo "<tr>";
        echo "<td>";
        print_r($key2);
        echo "</td>";
        echo "<td>";
        print_r($value2);
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>