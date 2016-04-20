<?php

include "asetustiedosto.php";

// Yhteyden luominen
$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

if(!$yhteys) {
	die("Yhteysvirhe: " . mysqli_connect_error());
}

$sql = "UPDATE suoritukset SET etunimi = 'Tero' WHERE id = 3";

if(mysqli_query($yhteys, $sql)) {
	echo "Tietojen päivitys onnistui!";
} else {
	echo "Päivitys ei onnistunut!" . mysqli_error($yhteys);
}

// Suljetaan yhteys
mysqli_close($yhteys);

?>