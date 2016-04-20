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

$sql = "UPDATE suoritukset SET sukunimi='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Rivin tiedot päivitetty!";
} else {
    echo "Tapahtui virhe päivityksen aikana: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?> 