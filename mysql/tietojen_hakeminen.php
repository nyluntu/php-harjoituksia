<h4>Tietojen hakeminen</h4>
<?php

include "asetustiedosto.php";

// Yhteyden luominen
//$yhteys = muodosta_mysql_yhteys();
$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

if(!$yhteys) {
	die("Yhteysvirhe: " . mysqli_connect_error());
}

$sql = "SELECT id, etunimi, sukunimi, teeman_nimi, arvosana FROM suoritukset";
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
		echo "Teeman nimi: " . $rivi["teeman_nimi"] . "<br/>";
		echo "Arvosana: " . $rivi["arvosana"] . "<br/>";
		echo "<hr />";
	}
	
} else {
	echo "0 riviä";
}

// Suljetaan yhteys
mysqli_close($yhteys);
mysqli_free_result($vastaus);

?>