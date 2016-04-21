<html>
<body>

<h1>Turon ensimmäiset kotisivut</h1>

<?php
header('Content-Type: text/html; charset=utf-8'); 
// Alustetaan muuttujia

$otsikko = "Nelilaskin harjoitus";
$kokonaisluku = 23;
$liukuluku = 0.569512;
$booleanarvo = false;

$kokonaisluku = "1500 kappaletta";

$kokonaisluvut = array(25, 26, 95, 53);

/*
Aloitetaan laskemaan numeroita yhteen.
*/

echo $otsikko;

echo "<h4>" . $otsikko . "</h4>\n";
echo "<p>Kokonaisluku: " . $kokonaisluku . "</p>\n";
echo "<p>Liukuluku: " . $liukuluku . "</p>\n";
echo "<p>Boolean: " . $booleanarvo . "</p>\n";

echo "<p>Taulukon toinen solu: " . $kokonaisluvut[1] . "</p>";
?>

</body>
</html>
