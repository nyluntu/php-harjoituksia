<?php 
header('Content-Type: text/html; charset=utf-8'); 

$servername = "localhost";
$username = "trtknu15a3";
$password = "tr54!1";
$dbname = "tuotteet";

$yhteys = mysqli_connect($servername, $username, $password, $dbname);
if(!$yhteys) {
	die("virhe yhteyden muodostamisessa." . mysqli_connect_error());
}

// muodostetaan sql kysely tuotteiden hakua varten.
$sql = "SELECT id, nimi, kuvaus, hinta FROM tuotteet WHERE tarjous = 1";

if(!$vastaus = mysqli_query($yhteys, $sql)) {
	die("Virhe SQL-kyselyssä!" . mysqli_error($yhteys));
}

$rivien_maara = mysqli_num_rows($vastaus);
$tuoterivit = $vastaus;
?>