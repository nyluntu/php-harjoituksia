<?php

// Tietokantapalvelimen yhteyttä varten asetettavat muuttujat
$palvelimen_osoite = "localhost";
$mysql_kayttajatunnus = "root";
$mysql_salasana = "";
$mysql_tietokanta = "harjoituskanta";


function muodosta_mysql_yhteys() {
	global $palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta;
	
	$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);
	if(!$yhteys) {
		die("Yhteysvirhe: " . mysqli_connect_error());
	}
 	return $yhteys;
}

?>