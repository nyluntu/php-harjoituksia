<?php

include "asetustiedosto.php";

?>
<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Suoritus lomake</title>
</head>

<body>

<form method="post" action="tallenna_suoritus.php">
  <h1>Suoritus lomake</h1>

  <label>Etunimi</label>
  <input name="etunimi" type="text" value=""  />
  <br/>

  <label>Sukunimi</label>
  <input name="sukunimi" type="text" value="" required="required" />
  <br/>

  <label>Teeman nimi</label>
  <input name="teeman_nimi" type="text" value="" required="required" />
  <br/>

  <label>Arvosana</label>
  <input name="arvosana" type="number" value="" required="required" min="0" max="5" />
  <br/>

  <label>Huomiot</label>
  <textarea name="huomiot"></textarea>
  <br/>

  <input name="reset" type="reset" value="Tyhjennä" />
  <input name="submit" type="submit" value="Lisää suoritus" />
</form>

<?php

$yhteys = muodosta_sql_yhteys();
$teemojen_nimet = mysqli_query($yhteys, sql_hae_teemat());

if(mysqli_num_rows($teemojen_nimet) > 0) {
  while($rivi = mysqli_fetch_assoc($teemojen_nimet)) {
    echo "<a href='suoritus_lomake.php?teema=" . $rivi['teeman_nimi'] . "'>" . $rivi['teeman_nimi'] . "</a><br/>";
  }
} else {
  echo "Teemoja ei löytynyt";
}

$tietokannan_rivit = mysqli_query($yhteys, sql_hae_suoritukset_teeman_nimella($_GET['teema']));
if(!$tietokannan_rivit) {
  die("SQL kyselyvirhe: " . mysqli_error($yhteys));
}

?>

<table>
  <tr>
    <td>Nimi</td>
    <td>Teeman nimi</td>
    <td>Arvosana</td>
    <td>Huomiot</td>
  </tr>
  <?php while($rivi = mysqli_fetch_assoc($tietokannan_rivit)) { ?>
    <tr>
      <td><?php echo $rivi["etunimi"] . " " . $rivi["sukunimi"] ?></td>
      <td><?php echo $rivi["teeman_nimi"] ?></td>
      <td><?php echo $rivi["arvosana"] ?></td>
      <td><?php echo $rivi["huomiot"] ?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>

<?php
mysqli_close($yhteys);
?>
