<?php

/*
$luku1 = $_POST["luku1"];
$luku2 = $_POST["luku2"];
$yhteensa = $luku1 + $luku2;

// POST (esimerkiksi lomakkeita varten)
echo "Yhteensa: " . $yhteensa;
echo "<br/>Ulkoinen tiedosto ottaa vastaan POST -muodossa lähetetyt tiedot."
*/

$etunimi = $_GET["etunimi"];
$sukunimi = $_GET["sukunimi"];

echo "Nimesi on " . $etunimi . " " . $sukunimi;
?>