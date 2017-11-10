<?php
    session_start();
    $result= "";
    if($_SESSION["admin"] == 1){
        $admin .= "";
    }
    $gebruiker = $_SESSION["gebruiker"];
    $gebruiker .= "<br>";
    $gebruiker .= $_SESSION["error"];

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
    <script>
    function open_ww() {
        let open = document.getElementById("change_ww");
        open.style.display = "block";
    }
    function close_ww() {
        let close = document.getElementById("change_ww");
        close.style.display = "none";
    }
    </script>
    <style>
        #open_ww{
            width: 20px;
            height: 20px;
            background-color: red;
        }
        #close_ww{
            width: auto;
            height: 20px;
            
        }
        #change_ww{
            display: none;
        }
    </style>
</head>
    <body>
        <?php
           echo $gebruiker
        ?>

        <form action="../databases/adduser.php" method="POST">
        <label for="adduser">add user</label>
        <input id="adduser" type="text" name="username" placeholder= "username">
        <select name="admin">
            <option value= 1 >admin</option>
            <option value= 2 >werknemer</option>
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
