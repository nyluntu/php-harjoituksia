<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harjoituskanta";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Yhteysvirhe: " . mysqli_connect_error());
}

$sql = "INSERT INTO suoritukset (etunimi, sukunimi, teeman_nimi, arvosana, huomiot)
 VALUES ('Turo', 'Nylund', 'PHP -ohjelmointi', 0, 'Toivoton tapaus')";

if (mysqli_query($conn, $sql)) {
    echo "Uusi tieto luotu onnistuneesti";
} else {
    echo "Virhe: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
 ?> 