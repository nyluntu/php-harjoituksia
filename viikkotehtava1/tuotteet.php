<?php 
include "tuotteet_kontrolleri.php";

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP -viikkotehtävä</title>
</head>
<body>
	<?php if($rivien_maara > 0) { ?>
	<table>
		<tr>
			<th>Nimi</th>
			<th>Kuvaus</th>
			<th>Hinta</th>
			<th></th>
		</tr>
		<?php while($rivi = mysqli_fetch_assoc($vastaus)) { ?>
		<tr>
			<td><?php echo $rivi["nimi"]; ?></td>
			<td><?php echo $rivi["kuvaus"]; ?></td>
			<td><?php echo $rivi["hinta"]; ?></td>
			<td><a href="tuote.php?tuotenumero=<?php echo $rivi["id"]; ?>">Tuotteeseen</a></td>
		</tr>
		<?php } ?>
	</table> 
	<?php } // if $rivien_maara loppuu ?>
	<p>Yhteensä <?php echo $rivien_maara ?> tuotetta</p>
</body>
</html>