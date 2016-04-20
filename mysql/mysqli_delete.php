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

// sql to delete a record
 $sql = "DELETE FROM suoritukset WHERE id=3";

if (mysqli_query($conn, $sql)) {
    echo "Rivi poistettu onnistuneesti!";
} else {
    echo "Tapahtui virhe riviä poistettaessa: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?> 