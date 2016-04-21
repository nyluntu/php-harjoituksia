<html>
<body>

<h1>Rivien tulostaminen taulukkoon</h1>

<?php

$nimia = array("Ville", "Pekka", "Anna", "Liisa");

echo "<table>";

foreach($nimia as $arvo) { 
	echo "<tr><td>" . $arvo ."</td></tr>";
}

echo "</table>";

?>

</body>
</html>
