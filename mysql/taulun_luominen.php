<h4>Taulun luominen.php</h4>
<?php

include "asetustiedosto.php"

// Yhteyden luominen
$yhteys = mysqli_connect($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);
if(!$yhteys) {
	die("Yhteysvirhe: " . mysqli_connect_error());
}

// Luodaan suoritukset -taulu
$sql = "CREATE TABLE suoritukset (
id INT AUTO_INCREMENT PRIMARY KEY,
etunimi VARCHAR(30) NOT NULL,
sukunimi VARCHAR(30) NOT NULL,
teeman_nimi VARCHAR(255),
arvosana INT,
huomiot VARCHAR(255)
)";

// Ajetaan komento tietokantapalvelimella
if(mysqli_query($yhteys, $sql)) {
	echo "Taulu luotu onnistuneesti!";
} else {
	echo "Tapahtui virhe: " . mysqli_error($yhteys);
}

// Suljetaan yhteys
mysqli_close($yhteys);

?>