<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <style>
        #errormsg{
            display: block;
            background-color: black;
            color: white;
            width:500px;
            height: 300px;
            z-index: 100;
            position: absolute;
            top:0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.querySelector(".form");
            form.addEventListener("keypress", function (e) {
                let key = e.charCode || e.keyCode || 0;
                if (key === 13) {
                    e.preventDefault();
                }
            });
        });
        </script>
</head>
<body>
    <?php echo $_SESSION["error"];?>
    <?php session_destroy()?>
    <div class="banner">
    </div>
<!--    <ul id="menu">-->
<!--        <li class="menuitem"><a href="../index.html">Home</a></li>-->
<!--        <li class="menuitem"><a href="contact.html">Contact</a></li>-->
<!--        <li class="menuitem"><a href="krashosting.php">login</a></li>-->
<!--    </ul>-->
    <form action="../databases/inloggendb.php" method="POST" class="form" onload="disableAllInputs()">
        <p><?php echo $_SESSION["fout"]?></p>
        <input type="email" name="email" placeholder="email"><br>
        <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
        <input type="submit" placeholder="verzenden">
    </form>
    <div id="test"></div>
    
</body>
</html>