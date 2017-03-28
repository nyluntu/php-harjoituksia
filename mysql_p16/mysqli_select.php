<?php

$palvelimen_nimi = "localhost";
$tietokanta_kayttaja = "root";
$tietokanta_salasana = "";
$tietokanta_nimi = "web_ohjelmointi_p16";

// luodaan yhteys
$yhteys = mysqli_connect($palvelimen_nimi, $tietokanta_kayttaja, $tietokanta_salasana, $tietokanta_nimi);
if(!$yhteys) {
    die("Yhteysvirhe: " . mysqli_connect_error());
}

$sql = "SELECT id, etunimi, sukunimi, teeman_nimi, arvosana, huomiot
        FROM suoritukset
        WHERE arvosana >= 3";

$tietokannan_rivit = mysqli_query($yhteys, $sql);

if(!$tietokannan_rivit) {
  die("SQL kyselyvirhe: " . mysqli_error($yhteys));
}

if(mysqli_num_rows($tietokannan_rivit) > 0) {

  while($rivi = mysqli_fetch_assoc($tietokannan_rivit)) {

    echo "<p>";
    echo "<strong>ID: " . $rivi["id"] . "</strong><br/>";
    echo "Nimi: " . $rivi["etunimi"] . " " . $rivi["sukunimi"] ."<br/>";
    echo "Teeman nimi: " . $rivi["teeman_nimi"] . "<br/>";
    echo "Arvosana: " . $rivi["arvosana"] . "<br/>";
    echo "Huomiot: " . $rivi["huomiot"];
    echo "</p>";

  }

} else {
  echo "Rivejä ei löytynyt";
}

mysqli_close($yhteys);


?>
