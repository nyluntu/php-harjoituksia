<?php
// Kirjoitetaan php:n alkuun aina sessioita käytettävissä.
session_start();
?>
<h4>PHP-koodit kommentoituna. Ota kommentit esimerkeistä pois.</h4>

<?php
// Asetetaan sessioon tietoa
$_SESSION['kayttajatunnus'] = "tnylund1";
?>

<?php

// Poistetaan session sisältö
// unset($_SESSION['kayttajatunnus']);

echo "Hei : " . $_SESSION['kayttajatunnus'];
?>