<?php

  $postNimi = $_POST["nimi"];
  $postSahkoposti = $_POST["sahkoposti"];

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lomakkeen tietojenkäsittelijä</title>
</head>
<body>

<?php // var_dump($_POST); ?>

<p>Nimesi on: <?php echo $postNimi ?></p>
<p>Sähköpostisi on: <?php echo $postSahkoposti; ?></p>

</body>
</html>
