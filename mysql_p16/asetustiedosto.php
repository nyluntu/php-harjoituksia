<?php

define("PALVELIMEN_NIMI", "localhost");
define("TIETOKANTA_KAYTTAJA", "root");
define("TIETOKANTA_SALASANA", "");
define("TIETOKANTA_NIMI", "web_ohjelmointi_p16");


function muodosta_sql_yhteys() {
  $yhteys = mysqli_connect(PALVELIMEN_NIMI, TIETOKANTA_KAYTTAJA, TIETOKANTA_SALASANA, TIETOKANTA_NIMI);
  if(!$yhteys) {
      die("Yhteysvirhe: " . mysqli_connect_error());
  }

  return $yhteys;
}

function sql_hae_teemat() {
  return "SELECT DISTINCT teeman_nimi FROM suoritukset";
}

function sql_hae_suoritukset_teeman_nimella($teeman_nimi) {
  return "SELECT id, etunimi, sukunimi, teeman_nimi, arvosana, huomiot
          FROM suoritukset
          WHERE teeman_nimi = '" . $teeman_nimi . "'";
}

 ?>
