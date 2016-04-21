<html>
<body>

<h1>Tietojen lahettaminen</h1>

<form method="post" action="vastaanota.php">
	<p>Anna luku1:
	<input type="text" name="luku1"/>
	</p>
	<p>Anna luku2:
	<input type="text" name="luku2"/>
	</p>
	<input type="submit" name="Submit" value="Laheta" />
</form>

<a href="vastaanota.php?etunimi=Turo&sukunimi=Nylund">GET-harjoitus (tietojen lahettaminen)</a>

<?php

// $kayttajan_syote = $_POST["etunimi"];

// POST (esimerkiksi lomakkeita varten)
// echo "Kirjoitit: (muuttujasta) " . $kayttajan_syote;


?>

</body>
</html>
