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

$sql = "SELECT id, etunimi, sukunimi, teeman_nimi, arvosana, huomiot FROM suoritukset";
if(!$result = mysqli_query($conn, $sql)){
    die('SQL-kysely epäonnistui [' . mysqli_error($conn) . ']');
}

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Id: " . $row["id"]. "<br/>";
		echo "Etunimi: " . $row["etunimi"]. "<br/>";
		echo "Sukunimi: " . $row["sukunimi"]. "<br/>";
		echo "Teeman nimi: " . $row["teeman_nimi"]. "<br/>";
		echo "Arvosana: " . $row["arvosana"]. "<br/>";
		echo "Huomiot: " . $row["huomiot"]. "<br/>";
		echo "<hr/>";
	}
} else {
    echo "0 riviä";
}

mysqli_close($conn);
mysqli_free_result($result)
 ?> 
