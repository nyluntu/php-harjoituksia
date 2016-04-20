<h4>Tietojen lisääminen tietokantaan</h4>
<?php
include "asetustiedosto.php";

// Yhteyden luominen
$yhteys = muodosta_mysql_yhteys($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

// SQL -komento rivien lisäämiseen
$sql = "INSERT INTO suoritukset (etunimi, sukunimi, teeman_nimi, arvosana, huomiot) 
VALUES ('Olli', 'Ohjelmoija', 'C#-perusteet', 3, 'Hiljalleen omaksuu uusia asioita.')";

// Ajetaan komento tietokantapalvelimella
if(mysqli_query($yhteys, $sql)) {
	echo "Rivin lisääminen onnistui!";
} else {
	echo "Tapahtui virhe: " . mysqli_error($yhteys);
	echo "<br/>" . $sql;
}


// Suljetaan yhteys
mysqli_close($yhteys);

?>