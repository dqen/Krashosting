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
    <script>

    </script>
    <div>
        <form autocomplete="on" id="form1">

            <input name="comporpart" value="0" hidden>
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
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
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

        <form autocomplete="on" id="form2">
            <input name="comporpart" value="1" hidden>
            <label for="name">Company Name</label>
            <input name="name" id="name" required>
            <label for="contactpers">Contact Person</label>
            <input name="contactpers" id="contactpers" required>
            <label for="emailcontactpers">Email Contact Person</label>
            <input name="emailcontactpers" id="emailcontactpers" required>
            <label for="gendercontactperson">Gender</label>
            <input name="gendercontactperson">
        </form>
    </div>
</body>
</html>