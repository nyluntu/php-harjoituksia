<?php

include "asetustiedosto.php";

$yhteys = muodosta_sql_yhteys();

// Otetaan talteen POST-sisältö
$etunimi = $_POST["etunimi"];

if(strlen($etunimi) < 3) {
  exit("Etunimi liian lyhyt");
}

$sukunimi = $_POST["sukunimi"];
$teeman_nimi = $_POST["teeman_nimi"];
$arvosana = $_POST["arvosana"];
$huomiot = $_POST["huomiot"];

// Määritetään sql komento
$sql = "INSERT INTO suoritukset (etunimi, sukunimi, teeman_nimi, arvosana, huomiot)
  VALUES ('$etunimi', '$sukunimi', '$teeman_nimi', $arvosana, '$huomiot')";

// Ajetaan sql komento
if(mysqli_query($yhteys, $sql)) {
  echo "Uusi suoritus lisätty!";
} else {
  echo "Virhe: " . $sql . "<br/>" . mysqli_error($yhteys);
}

// Suljetaan yhteys
mysqli_close($yhteys);

?>
<a href="suoritus_lomake.php">Lisää suoritus</a>
