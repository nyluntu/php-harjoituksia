<?php
// Kirjoitetaan php:n alkuun aina sessioita k�ytett�viss�.
session_start();
?>
<h4>PHP-koodit kommentoituna. Ota kommentit esimerkeist� pois.</h4>

<?php
// Asetetaan sessioon tietoa
$_SESSION['kayttajatunnus'] = "tnylund1";
?>

<?php

// Poistetaan session sis�lt�
// unset($_SESSION['kayttajatunnus']);

echo "Hei : " . $_SESSION['kayttajatunnus'];
?>