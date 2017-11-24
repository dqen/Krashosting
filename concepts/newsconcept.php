<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 27/10/2017
 * Time: 11:21
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once("../databases/connect_newsdatabase.php");

$articles = new News();

?>
<!DOCTYPE HTML>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>News Item Concept & Execution</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <style>

            /* START CSS RESET */

            /* http://meyerweb.com/eric/tools/css/reset/
            v2.0 | 20110126
            License: none (public domain)
            */

            html, body, div, span, applet, object, iframe,
            h1, h2, h3, h4, h5, h6, p, blockquote, pre,
            a, abbr, acronym, address, big, cite, code,
            del, dfn, em, img, ins, kbd, q, s, samp,
            small, strike, strong, sub, sup, tt, var,
            b, u, i, center,
            dl, dt, dd, ol, ul, li,
            fieldset, form, label, legend,
            table, caption, tbody, tfoot, thead, tr, th, td,
            article, aside, canvas, details, embed,
            figure, figcaption, footer, header, hgroup,
            menu, nav, output, ruby, section, summary,
            time, mark, audio, video {
                margin: 0;
                padding: 0;
                border: 0;
                font-size: 100%;
                font: inherit;
                vertical-align: baseline;
            }
            /* HTML5 display-role reset for older browsers */
            article, aside, details, figcaption, figure,
            footer, header, hgroup, menu, nav, section {
                display: block;
            }
            body {
                line-height: 1;
            }
            ol, ul {
                list-style: none;
            }
            blockquote, q {
                quotes: none;
            }
            blockquote:before, blockquote:after,
            q:before, q:after {
                content: '';
                content: none;
            }
            table {
                border-collapse: collapse;
                border-spacing: 0;
            }

            /* END CSS RESET */

            *, p, h1, h2, h3, h4, h5, h6, a {
                font-family: 'Roboto', sans-serif;
            }

            a {
                text-decoration: none;
                transition: all 0.5s ease;
            }

            a:hover {
                color: red;
            }

            #flexcontainer {
                display: flex;
                padding: 5px;
            }

            .newsdiv {
                height: 300px;
                width: 250px;
                background-color: lightgray;
                margin-right: 5px;
                overflow: hidden;
            }

            .newsdiv a {

            }

            .newsdiv h4 {
                font-size: 25px;
                text-transform: uppercase;
                font-weight: bold;
                background-color: rgba(0, 0, 0, 0.8);
                position: relative;
                top: 100px;
                color: white;
                /*500*/
                width: 250px;
                padding-left: 5px;
                height: 50px;
            }

            .newsdiv .imgdiv {
                /*150*/
                height: 75px;
                background-image: url("http://i.dailymail.co.uk/i/pix/2012/10/17/article-0-158CAE40000005DC-837_964x641.jpg");
                background-size: cover;
                margin-bottom: 10px;
                box-shadow: 0px 1px 2px 1.5px rgba(0,0,0,0.75);
            }

            .newsdiv .newscontainer {
                padding: 5px;
                height: 200px;
            }

            .newsdiv .readmore {
                margin-left: 5px;
            }
        </style>
    </head>
    <body>

        <!-- News Item 1 -->

        <div id="flexcontainer">
            <div class="newsdiv">
                <div class="imgdiv" id="img1">
                    <h4><?php echo $articles->get_item(1, "header"); ?></h4>
                </div>
                <div class="newscontainer">
                <p>
                    <?php echo $articles->get_item(1, "articlesnippet"); ?>
                </p>
                </div>
                <a href="#" class="readmore">READ MORE...</a>
            </div>

            <!-- News Item 2 -->

            <div class="newsdiv">
                <div class="imgdiv" id="img1">
                    <h4><?php echo $articles->get_item(2, "header"); ?></h4>
                </div>
                <div class="newscontainer">
                    <p>
                        <?php echo $articles->get_item(2, "articlesnippet"); ?>
                    </p>
                </div>
                <a href="#" class="readmore">READ MORE...</a>
            </div>

            <!-- News Item 3 -->

            <div class="newsdiv">
                <div class="imgdiv" id="img1">
                    <h4><?php echo $articles->get_item(3, "header"); ?></h4>
                </div>
                <div class="newscontainer">
                    <p>
                        <?php echo $articles->get_item(3, "articlesnippet"); ?>
                    </p>
                </div>
                <a href="#" class="readmore">READ MORE...</a>
            </div>

        </div>
    </body>
</html>