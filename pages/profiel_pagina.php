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
    <?php
        echo $_SESSION["gebruiker"]
    ?>
<form action="profiel_db.php" method="POST" class="form" onload="disableAllInputs()">
    <input type="password" name="oudwachtwoord" placeholder="oud wachtwoord"><br>
    <input type="password" name="wachtwoord" placeholder="nieuw wachtwoord"><br>
    <input type="password" name="wachtwoord2" placeholder="herhaal wachtwoord"><br>
    <input type="submit" placeholder="verzenden">
</form>
</body>
</html>