<?php
    session_start();
    $result= "";
    if($_SESSION["admin"] == 1){
        $result .= "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <script>
    function open() {
        let open = document.getElementById("wachtwoord");
        open.style.display = "block";
    }
    function close() {
        let close = document.getElementById("close");
        close.style.display = "none";
    
    }
    </script>
</head>
    <body>
        <?php
            echo $_SESSION["gebruiker"];
            echo "<br>";
            echo $_SESSION["error"];
        ?>
        <div id="open_ww" onclick="open()">
            <div id="close" onclick="close()">
            <form action="../databases/profiel_db.php" method="POST" class="form" onload="disableAllInputs()">
                <input type="password" name="oudwachtwoord" placeholder="oud wachtwoord"><br>
                <input type="password" name="wachtwoord" placeholder="nieuw wachtwoord"><br>
                <input type="password" name="wachtwoord2" placeholder="herhaal wachtwoord"><br>
                <input type="submit" placeholder="verzenden">
            </form>
        </div>
    </body>
</html>