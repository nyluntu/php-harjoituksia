<?php

include "asetustiedosto.php";

// Yhteyden luominen
$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

if(!$yhteys) {
	die("Yhteysvirhe: " . mysqli_connect_error());
}

$sql = "UPDATE suoritukset SET teeman_nimi = 'Matematiikka', arvosana = 0 WHERE id = 2";

if(mysqli_query($yhteys, $sql)) {
	echo "Tietojen päivitys onnistui!";
} else {
	echo "Päivitys ei onnistunut!" . mysqli_error($yhteys);
}

// Suljetaan yhteys
mysqli_close($yhteys);

?>