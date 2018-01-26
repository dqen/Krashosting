<?php
$value = $_POST["idnaam"];
$mysqli = new mysqli("localhost", "root", "root", "krashosting");
$sql = "DELETE FROM particulier WHERE idparticulier = $value";
$query = $mysqli->query($sql);
header("location:../pages/profiel_pagina.php");
?>