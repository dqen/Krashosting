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

</head>
<body>

        <div class="banner">
        </div>
    <ul class="menu">
        <li class="active"><a href="/index.php">Home</a></li>
        <li class="menuitem"><a href="pages/contact.html">Contact</a></li>
        <li class="menuitem"><a href="pages/over_ons.html">over ons</a></li>
        <li class="menuitem"><a href="pages/pakketen.php">paketten</a></li>
    </ul>
        <div class="blended_grid">
            <div class="pageColumnLeft">
                <h2>Pakket 1</h2>
            </div>
            <div class="pageColumnMid">
                <h2>Pakket 2</h2>
            </div>
            <div class="pageColumnRight">
                <h2>Pakket 3</h2>
            </div>
            <div class="pageFooter">
                <h2>Custom Pakket</h2>
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