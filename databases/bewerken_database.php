<?php
$value = $_POST["idnaam"];
$mysqli = new mysqli("localhost", "root", "root", "krashosting");
$sql = "SELECT * FROM particulier WHERE idparticulier = $value";
$query = $mysqli->query($sql);
$r= $query->fetch_assoc();
var_dump($r);
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
        <label for="geslacht">geslacht</label>
        <label for="leeftijd">leeftijd</label>
        <label for="betalingsgegevens"></label>
        <input value="$r[\"naam\"]" id="naam" name="naam" type="text">
        <label for="telefoon">telefoon</label>
        <input value="$r[\"telefoon\"]" id="telefoon"  name="telefoon" type="text">
        <label for="email">email</label>
        <input value="$r[\"email\"] id="email" name="email" type="text">
        <label for="adress">adress</label>
        <input value="$r[\"adress\"] id="adress" name="adress" type="text">
        <input value="$r[\"geslacht\"]" id="geslacht" name="geslacht" type="text">
        <input value="$r[\"leeftijd\"]" id="leeftijd" name="leeftijd" type="text">
        <input value="$r[\"betalingsgegevens"]" id="betalingsgegevens" name="betalingsgegevens" type="text">
    </body>
</html>

