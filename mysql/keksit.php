<h4>PHP-koodit kommentoituna. Ota kommentit esimerkeistä pois.</h4>
<?php
// Asettaa tuote1-nimisen cookien arvolla auto. Cookie on voimassa tunnin.
setcookie("tuote1", "Banaani 1kg", time() + 3600);
setcookie("tuote2", "Omena 1kg");
?>

<?php
// Poistaa cookien. 
// setcookie("tuote2", "");

// Vanhenemisaika asetettu menneisyyteen. Poistaa myös cookieen.
// setcookie("tuote1", "", time() - 3600);
?>

<?php

echo "Ostoskori: " . $_COOKIE["tuote1"];
echo "<br/>Ostoskori: " . $_COOKIE["tuote2"];

?>