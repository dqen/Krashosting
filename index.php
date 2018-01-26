<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('databases/connect_newsdatabase.php');

    $article = new News();
    $result= "";
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "SELECT * from package";
    $mysqli->real_escape_string($sql);
    $query = $mysqli->query($sql); 
    while($r= $query->fetch_assoc()){  
        $name = $r["name"];
        $description = $r["description"];
        $visible = $r["visible"];
        $price = $r["price"];
        if($visible == 1){
            $result .= "<div class=\"w3-third w3-margin-bottom\">
            <ul class=\"w3-ul w3-border w3-hover-shadow\">
                <li class=\"w3-theme\">
                    <p class=\"w3-xlarge\">$name</p>
                </li>
                <li class=\"w3-padding-16\">$description</li>
                <li class=\"w3-padding-16\">$price</li>
                <li class=\"w3-theme-l5 w3-padding-24\">
                    <button class=\"w3-button w3-teal w3-padding-large\"><i class=\"fa fa-check\"></i> Sign Up</button>
                </li>
            </ul>
        </div>";
        } 
    }  
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

        <div class="banner">
        </div>

    <ul class="menu">
        <li class= "menuitem "id="active"><a href="index.php">Home</a></li>
        <li class="menuitem"><a href="pages/contact.php">Contact</a></li>
        <li class="menuitem"><a href="pages/over_ons.php">over ons</a></li>
        <li class="menuitem"><a href="pages/pakketen.php">paketten</a></li>
    </ul>
<!--        <div class="blended_grid">-->
<!--            <div class="pageColumnLeft">-->
<!--                <h2>Pakket 1</h2>-->
<!--            </div>-->
<!--            <div class="pageColumnMid">-->
<!--                <h2>Pakket 2</h2>-->
<!--            </div>             <div class="pageColumnRight">-->
<!--                <h2>Pakket 3</h2>-->
<!--            </div>-->
<!--            <div class="pageFooter">-->
<!--                <h2>Custom Pakket</h2>-->
<!--            </div>-->
<!--        </div>-->
        <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
            <h2>PRICING</h2>
            <p>Choose a pricing plan that fits your needs.</p><br>
            <?php
            echo $result;
            ?>


        <div id="flexcontainer">
        <div class="newsdiv">
            <div class="imgdiv" id="img1">
                <!--                <h4>--><?php //echo $articles->get_item(1, "header"); ?><!--</h4>-->
            </div>
            <div class="newscontainer">
                <p>
                    <!--                    --><?php //echo $articles->get_item(1, "articlesnippet"); ?>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate magna eget velit consequat tincidunt. Nulla vitae libero lorem.
                </p>
            </div>
            <a href="#" class="readmore">READ MORE...</a>
        </div>

        <!-- News Item 2 -->

        <div class="newsdiv">
            <div class="imgdiv" id="img1">
                <!--                <h4>--><?php //echo $articles->get_item(2, "header"); ?><!--</h4>-->
            </div>
            <div class="newscontainer">
                <p>
                    <!--                    --><?php //echo $articles->get_item(2, "articlesnippet"); ?>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate magna eget velit consequat tincidunt. Nulla vitae libero lorem.
                </p>
            </div>
            <a href="#" class="readmore">READ MORE...</a>
        </div>

        <!-- News Item 3 -->

        <div class="newsdiv">
            <div class="imgdiv" id="img1">
                <!--                <h4>--><?php //echo $articles->get_item(3, "header"); ?><!--</h4>-->
            </div>
            <div class="newscontainer">
                <p>
                    <!--                    --><?php //echo $articles->get_item(3, "articlesnippet"); ?>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate magna eget velit consequat tincidunt. Nulla vitae libero lorem.
                </p>
            </div>
            <a href="#" class="readmore">READ MORE...</a>
        </div>

    </div>
</div>
</body>


</html>