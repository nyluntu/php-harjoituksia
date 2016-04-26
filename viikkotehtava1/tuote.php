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
$tuotenumero = $_GET["tuotenumero"];
if($tuotenumero <= 0) {
	die("Tuotetta ei löytynyt");
}

$sql = "SELECT id, nimi, kuvaus, hinta FROM tuotteet WHERE id = " . $tuotenumero;

if(!$vastaus = mysqli_query($yhteys, $sql)) {
	die("Virhe SQL-kyselyssä!" . mysqli_error($yhteys));
}

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP -viikkotehtävä (tuotesivu)</title>
</head>
<body>
<?php
    
	echo "<table>";
	echo "<tr>";
	echo "<th>Nimi</th>";
	echo "<th>Kuvaus</th>";
	echo "<th>Hinta</th>";
	echo "</tr>";
	
	while($rivi = mysqli_fetch_assoc($vastaus)) {
		echo "<tr>";
        echo "<td>" . $rivi["nimi"]. "</td>";
		echo "<td>" . $rivi["kuvaus"]. "</td>";
		echo "<td>" . str_replace(".", ",", $rivi["hinta"]) . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	echo "<a href='tuotteet.php'>Palaa takaisin</a>";
?>
</body>
</html>