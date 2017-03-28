<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP hello world esimerkki!</title>
</head>
<body>

<?php

echo "Moi maailma!<br/>";

// Muuttujien alustaminen
$henkilonIka = 34;
$henkilonNimi = "Turo Nylund";
$henkilonPituus = 165.5;
$booleanMuuttuja = true;

// Tietojen tulostaminen
echo $henkilonNimi . "<br/>";
echo $henkilonIka . "<br/>"; 
echo $henkilonPituus . "<br/>"; 
echo $booleanMuuttuja;

// Yhden rivin kommentti
# Yhden rivin kommentti
/*
Usean 
rivin kommentointi
*/

echo "<br/>Yhteenlasku: " . (5+4);
echo "<br/>Vähennyslasku: " . (10-6);
echo "<br/>Kertolasku: " . (10*6);
echo "<br/>Jakolasku: " . (10/6);
echo "<br/>Jakojäännös: " . (10%6);

define("SEKUNTTEJA_TUNNEISSA", 3600);

echo "<br/><br/>";
echo SEKUNTTEJA_TUNNEISSA;

if($henkilonIka == 25) {
	echo "<br/>Henkilö on 25-vuotias";
} else {
	echo "<br/>Henkilö ei ole 25-vuotias";
}

echo "<br/>For -loop esimerkki:";
for ($i=0; $i < 10; $i++) { 
	echo "<br/>" . $i;
}

// funktion käyttö
function tulostaNaytolle($funktionParametri) {

	echo "<br/>" . $funktionParametri;

}
tulostaNaytolle("Hei funktio!");

// arvon palauttava funktio
function laskeYhteen($luku1, $luku2) {
	return $luku1+$luku2;
}

$summa = laskeYhteen(34, 64.5);
tulostaNaytolle($summa);

?>

</body>
</html>