<?php

// Tietokantapalvelimen yhteyttä varten asetettavat muuttujat 
$palvelimen_osoite = "localhost"; 
$mysql_kayttajatunnus = "trtkm16"; 
$mysql_salasana = "trtkm16"; 
$mysql_tietokanta = "trtkm16"; 

// Yhteyden luominen
// mysqli_connect() funktio luo yhteyden
$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

if(!$yhteys) {
	die("Yhteysvirhe: " . mysqli_connect_error());
}


$sql = "SELECT id, etunimi, sukunimi FROM tny_henkilot";

// Ajetaan kysely tietokantapalvelimella
if(!$vastaus = mysqli_query($yhteys, $sql)) {
	die("SQL -kyselyssä oli virhe: " . mysqli_error($yhteys));
}

// Tarkistetaan onko yhtään löytynyttä riviä
if(mysqli_num_rows($vastaus) > 0) {

	while($rivi = mysqli_fetch_assoc($vastaus)) {
		echo "Id: " . $rivi["id"] . "<br/>";
		echo "Etunimi: " . $rivi["etunimi"] . "<br/>";
		echo "Sukunimi: " . $rivi["sukunimi"] . "<br/>";
		echo "<hr />";
	}
	
} else {
	echo "0 riviä";
}

// Suljetaan yhteys
mysqli_close($yhteys);
mysqli_free_result($vastaus);


?>