<h4>Tietojen hakeminen (mysqli olio-ohjelmoinnin tapaisesti)</h4>
<?php

include "asetustiedosto.php";

// Yhteyden luominen
$tietokantaOlio = new mysqli($palvelimen_osoite, $mysql_kayttajatunnus, $mysql_salasana, $mysql_tietokanta);

// Tarkistetaan tuliko yhteysvirheitä
if(mysqli_connect_errno()) {
      echo "Tietokantayhteys ei onnistunut " . mysqli_connect_errno();
      exit();
}

$sql = "SELECT id, etunimi, sukunimi, teeman_nimi, arvosana FROM suoritukset";

// Ajetaan kysely tietokantapalvelimella
if(!$vastaus = $tietokantaOlio->query($sql)) {
	die("SQL -kyselyssä oli virhe: " . mysqli_error($yhteys));
}

// Tarkistetaan onko yhtään löytynyttä riviä
if(mysqli_num_rows($vastaus) > 0) {
echo "<table>";
		echo "<tr>";
		echo "<th>Id</th>";
		echo "<th>Etunimi</th>";
		echo "<th>Sukunimi</th>";
		echo "<th>Teeman nimi</th>";
		echo "<th>Arvosana</th>";
		echo "</tr>";
	while($rivi = $vastaus->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $rivi["id"] . "</td>";
		echo "<td>" . $rivi["etunimi"] . "</td>";
		echo "<td>" . $rivi["sukunimi"] . "</td>";
		echo "<td>" . $rivi["teeman_nimi"] . "</td>";
		echo "<td>" . $rivi["arvosana"] . "</td>";
		echo "</tr>";
	}
echo "</table>";
}

// Tyhjennetään haussa saadut tiedot muistista
$vastaus->free();
// Suljetaan yhteys
$tietokantaOlio->close();
?>
