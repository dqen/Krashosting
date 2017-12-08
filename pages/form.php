<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 24/11/2017
 * Time: 10:26
 */

?>
<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        /* Please do NOT copy this to the document */

        form input, form label {
            display: block;
        }

        div {
            width: 200px;
        }

        #postcode {
            display: inline-block;
            width: 50px;
        }

        #adress {
            display: inline-block;
            width: 66px;
        }


    </style>
</head>
<body>
    <div>
        <form autocomplete="on">
            <label for="name">Name</label>
            <input name="name" id="name" required>
            <label for="lastname">Last Name</label>
            <input name="lastname" id="lastname" required>
            <label for="tel">Tel. Number</label>
            <input name="tel" id="tel">
            <label for="email">E-mail adress</label>
            <input type="email" name="email" id="email">
            <label for="adress">Adress & Postal/Zip code</label>
            <input name="adress" id="adress">
            <input name="postcode" id="postcode">
            <label for="sex" class="sexnage">Sex</label>
            <select name="sex" id="sex">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label>Age</label>
            <select name="age" id="age">
                <?php

                    for($a = 0; $a <= 100; $a++) {
                        echo "<option value='$a'>$a</option>";
                    }

                ?>
            </select>
        </form>
    </div>
</body>
</html>