<?php
define("VAKION_NIMI", "vakiomuuttujan arvo");

$sivun_otsikko = "Turon kotisivut";
$tuotteen_nimi = "Polkupyörä";
$tuotteen_hinta = 12.50;
$tarjous = false;

$autotTaulukko = array("Peugeot", "Lada", "Mersu", "Bemari", "Volvo", "Nissani");
sort($autotTaulukko);

function tulosta_taulun_rivi($autonNimi) {
	echo "<tr>";
	echo "<td>" . $autonNimi . "</td>";
	echo "</tr>";
}

?>
<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title><?php echo $sivun_otsikko; ?></title>
	</head>

	<body>
		<h1><?php echo $sivun_otsikko; ?></h1>

<?php
	echo "<table>";
	echo "<tr>";
	echo "<th>Auton merkki</th>";
	echo "</tr>";

	foreach ($autotTaulukko as $autonNimi) {
		tulosta_taulun_rivi($autonNimi);
	}

	echo "</table>";
?>

<?php

$nimi_globaali = "Pekka";

function funktion_muuttujien_nakyvyys() {
	global $nimi_globaali;

	echo $nimi_globaali;
}
funktion_muuttujien_nakyvyys();


function muodosta_html_otsikko($otsikkotaso, $otsikkotasoKiinni, $nimi) {
	return "{$otsikkotaso} Tämä tulostuu funktiosta: {$nimi} {$otsikkotasoKiinni}";
}

function tulosta_nimi($nimi = "TUNTEMATON") {
	echo muodosta_html_otsikko("<h3>", "</h3>", $nimi);
}

tulosta_nimi("Turo 122132");
tulosta_nimi();

// tulostetaan vakiomuuttujan
echo VAKION_NIMI;




 ?>
	</body>
</html>
