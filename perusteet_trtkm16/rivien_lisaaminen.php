<?php

// var_dump tulostaa muuttujan sisällön
// var_dump($_POST);

// Post tyyppisen tiedon vastaanottaminen
// $henkilonNimi = $_POST["etunimi"] . " " . $_POST["sukunimi"];
// echo "(POST) Henkilön nimi: " . $henkilonNimi;

// echo "<br/><br/>";
// Get tyyppisen tiedon vastaanottaminen
// $henkilonNimi = $_GET["etunimi"] . " " . $_GET["sukunimi"];
// echo "(GET) Henkilön nimi: " . $henkilonNimi;

// ==========================================================


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

$etunimi = $_POST["etunimi"];
$sukunimi = $_POST["sukunimi"];

// SQL komennon luominen
$sql = "INSERT INTO tny_henkilot (etunimi, sukunimi) 
        VALUES ('$etunimi', '$sukunimi')";

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

