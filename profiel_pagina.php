<?php
    session_start();
    $gebruiker = $_SESSION['gebruiker'];
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql1 = "SELECT wachtwoord, email, FROM login WHERE email = $gebruiker;";
    $query = $mysqli->query($sql1);
    $r= $query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
</head>
<body>
<form action="inloggendb.php" method="POST" class="form" onload="disableAllInputs()">
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
    <input type="submit" placeholder="verzenden">
</form>
</body>
</html>