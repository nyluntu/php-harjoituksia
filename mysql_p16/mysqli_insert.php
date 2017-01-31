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

// Määritetään sql komento
$sql = "INSERT INTO suoritukset (etunimi, sukunimi, teeman_nimi, arvosana, huomiot)
  VALUES ('John', 'Doe', 'Tietokannat -perusteet', 4, '')";

// Ajetaan sql komento
if(mysqli_query($yhteys, $sql)) {
  echo "Uusi suoritus lisätty!";
} else {
  echo "Virhe: " . $sql . "<br/>" . mysqli_error($yhteys);
}

// Suljetaan yhteys
mysqli_close($yhteys);



?>
