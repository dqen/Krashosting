<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('databases/connect_newsdatabase.php');

    $article = new News();
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
            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                        <p class="w3-xlarge">Basic</p>
                    </li>
                    <li class="w3-padding-16"><b>10GB</b> Storage</li>
                    <li class="w3-padding-16"><b>10</b> Emails</li>
                    <li class="w3-padding-16"><b>10</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide"><i class="fa fa-usd"></i> 10</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-theme-l5 w3-padding-24">
                        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
                    </li>
                </ul>
            </div>

            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme-l2">
                        <p class="w3-xlarge">Pro</p>
                    </li>
                    <li class="w3-padding-16"><b>25GB</b> Storage</li>
                    <li class="w3-padding-16"><b>25</b> Emails</li>
                    <li class="w3-padding-16"><b>25</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide"><i class="fa fa-usd"></i> 25</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-theme-l5 w3-padding-24">
                        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
                    </li>
                </ul>
            </div>

            <div class="w3-third w3-margin-bottom">
                <ul class="w3-ul w3-border w3-hover-shadow">
                    <li class="w3-theme">
                        <p class="w3-xlarge">Premium</p>
                    </li>
                    <li class="w3-padding-16"><b>50GB</b> Storage</li>
                    <li class="w3-padding-16"><b>50</b> Emails</li>
                    <li class="w3-padding-16"><b>50</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide"><i class="fa fa-usd"></i> 50</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-theme-l5 w3-padding-24">
                        <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>


        <div id="flexcontainer">
        <div class="newsdiv">
            <div class="imgdiv" id="img1">
                <!--                <h4>--><?php //echo $articles->get_item(1, "header"); ?><!--</h4>-->
            </div>
            <div class="newscontainer">
                <p>
                    <!--                    --><?php //echo $articles->get_item(1, "articlesnippet"); ?>
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
                </p>
            </div>
            <a href="#" class="readmore">READ MORE...</a>
        </div>

    </div>
</div>
</body>


</html>