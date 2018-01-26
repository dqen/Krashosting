<?php
$value = $_POST["idnaam"];
$mysqli = new mysqli("localhost", "root", "root", "krashosting");
//$sql = "SELECT * FROM particulier WHERE idparticulier = $value";
$sql = "SELECT idparticulier, naam, telefoon, email, adress, geslacht, leeftijd FROM particulier";
$query = $mysqli->query($sql);
$r= $query->fetch_assoc();
var_dump($r);

//$sql2 = "UPDATE particulier SET naam=' WHERE id=2";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        echo "id: " . $row["idparticulier"]. " - naam: " . $row["naam"]. " telefoon " . $row["telefoon"]. " email " . $row["email"]. " adres " . $row["adress"]. " geslacht " . $row["geslacht"]. " leeftijd " . $row["leeftijd"]."<br>";
    }
} else {
    echo "0 results";
}


if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
// header("location:../pages/profiel_pagina.php");
?>

<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <label for="naam">naam</label>
        <input value=" $r[\"naam\"]" id="naam" name="naam" type="text">
        <label for="geslacht">geslacht</label>
        <input value="$r[\"geslacht\"]" id="geslacht" name="geslacht" type="text">
        <label for="leeftijd">leeftijd</label>
        <input value="$r[\"leeftijd\"]" id="leeftijd" name="leeftijd" type="text">
        <label for="telefoon">telefoon</label>
        <input value="$r[\"telefoon\"]" id="telefoon"  name="telefoon" type="text">
        <label for="email">email</label>
        <input value="$r[\"email\"] id="email" name="email" type="text">
        <label for="adress">adress</label>
        <input value="$r[\"adress\"] id="adress" name="adress" type="text">
        <label for="betalingsgegevens"></label>
        <label for="betalingsgegevens"></label>
        <input value="$r[\"betalingsgegevens"]}" id="betalingsgegevens" name="betalingsgegevens" type="text">

    </body>
</html>

