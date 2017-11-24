<?php
    session_start();
    $result= "";
    if($_SESSION["admin"] == 1){
        $admin .= "<form id=\"adduser\" action=\"../databases/adduser.php\" method=\"POST\">
        <label for=\"adduser\">add user</label>
        <input id=\"adduser\" type=\"text\" name=\"username\" placeholder= \"username\">
        <select name=\"admin\">
        <option value= 1 >admin</option>
        <option value= 2 >werknemer</option>
        </select>
        <input type=\"submit\" placeholder=\"verzenden\">
        </form>";
    }
    $gebruiker = $_SESSION["gebruiker"];
    $gebruiker .= "<br>";

    if($_SESSION["loggedin"] == 1){
        $result = "verander je wachtwoord voor veiligheidsmaatregelen";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="../css/master.css" type="text/css">
        <link rel="stylesheet" href="../css/profiel_pagina.css" type="text/css">
        <script src="profiel_pagina.js"></script>
    </head>
    <body>
        <?php   
            echo $gebruiker;
            echo $admin;
        ?>

        <form action="../databases/packet_visible.php" method="POST" >
            <select name="package_1">
                <option value= 1 >visible</option>
                <option value= 0 >invisible</option>
            </select>
            <select name="package_2">
                <option value= 1 >visible</option>
                <option value= 0 >invisible</option>
            </select>
            <select name="package_3">
                <option value= 1 >visible</option>
                <option value= 0 >invisible</option>
            </select>
            <select name="package_4">
                <option value= 1 >visible</option>
                <option value= 0 >invisible</option>
            </select>
            <input type="submit" placeholder="verzenden">
        </form>
        <label for="open_ww">verander je wachtwoord</label>
        <p style="color:red;"><?php echo $result?></p>
        <input type="button" id="open_ww" onclick="open_ww()" >
        <div id="change_ww"> 
        <input type="button" id="close_ww" onclick="close_ww()">
        <form action="../databases/profiel_db.php" method="POST" class="form" onload="disableAllInputs()">
            <input type="password" name="oudwachtwoord" placeholder="oud wachtwoord"><br>
            <input type="password" name="wachtwoord" placeholder="nieuw wachtwoord"><br>
            <input type="password" name="wachtwoord2" placeholder="herhaal wachtwoord"><br>
            <input type="submit" placeholder="verzenden">
        </form>
        </div>
    </body>
</html>
