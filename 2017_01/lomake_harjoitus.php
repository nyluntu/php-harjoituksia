<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lomakeharjoitus</title>
</head>
<body>

<h1>Lomakeharjoitus</h1>

<form action="tietojenkasittelija.php" method="post">
  Anna nimesi <input type="text" name="nimi" /><br/>
  Anna sähköpostiosoite <input type="text" name="sahkoposti" /><br/>
  Päivämäärä <input type="date" name="paivamaara" /><br/>
  <input type="submit" value="Lähetä tiedot"/>
</form>

<a href="tietojenkasittelija_get.php?nimi=Turo&sahkoposti=turo@mailinator.com">Klikkaa minua!!</a>

</body>
</html>
