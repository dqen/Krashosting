<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
</head>
<body>
<div class="banner">
    </div>
<ul id="menu">
    <li class="menuitem"><a href="index.html">Home</a></li>
    <li class="menuitem"><a href="contact.html">Contact</a></li>
    <li class="menuitem"><a href="pages/krashosting.php">login</a></li>
</ul>
<form action="inloggendb.php" method="POST">
    <input type="email" name="email"  placeholder="email"><br>
    <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
    <input type="submit" placeholder="verzenden">
</form>
<div id="test"></div>
</body>
</html>
