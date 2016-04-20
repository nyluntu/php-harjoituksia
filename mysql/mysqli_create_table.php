<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harjoituskanta";

// Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
 $sql = "CREATE TABLE suoritukset (
id INT AUTO_INCREMENT PRIMARY KEY, 
etunimi VARCHAR(30) NOT NULL,
sukunimi VARCHAR(30) NOT NULL,
teeman_nimi VARCHAR(255),
arvosana INT,
huomiot VARCHAR(255)
)";

if (mysqli_query($conn, $sql)) {
    echo "Taulu luotu onnistuneesti!";
} else {
    echo "Tapahtui virhe kesken taulun luonnin: " . mysqli_error($conn);
}

mysqli_close($conn);
 ?> 