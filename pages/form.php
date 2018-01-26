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
        /*  Please do NOT copy this to the document
            It's only for placeholder style.
        */

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
        function open1() {
            const form1 = document.getElementById("form1");
            form1.setAttribute("style", "height: 200px;");

            const form2 = document.getElementById("form2");
            form2.setAttribute("style", "height: 0px; display: none;")
        }

        function open2() {
            const form1 = document.getElementById("form1");
            form1.setAttribute("style", "height: 0px; display: none;");

            const form2 = document.getElementById("form2");
            form2.setAttribute("style", "height: 200px;");
        }
    </script>
    <div>
        <form id="form1" style="height: 200px;" action="../databases/formdatabase.php" method="POST">

            <input type="hidden" name="comporpart" id="comporpart" value="0">
            <label for="name">Name</label>
            <input name="name" id="name" required>
            <label for="lastname">Last Name</label>
            <input name="lastname" id="lastname" required>
            <label for="tel">Tel. Number</label>
            <input name="tel" id="tel">
            <label for="email">E-mail adress</label>
            <input type="email" name="email" id="email">
            <label for="address">Address & Postal/Zip code</label>
            <input name="address" id="adress">
            <input name="postcode" id="postcode">
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <label for="age">Age</label>
            <select name="age" id="age">
                <?php

                    for($a = 0; $a <= 100; $a++) {
                        echo "<option value='$a'>$a</option>";
                    }

                ?>
            </select>

            <br><br>

            <button>Send</button><br>
            <button type="button" onclick="open2()">Company Form</button>

        </form>

        <form autocomplete="on" id="form2" style="height: 0; display: none;" action="../databases/formdatabase.php" method="POST">

            <input type="hidden" name="comporpart" id="comporpart" value="1">
            <label for="name">Company Name</label>
            <input name="name" id="name" required>
            <label for="contactpers">Contact Person</label>
            <input name="contactpers" id="contactpers" required>
            <label for="emailcontactpers">Email Contact Person</label>
            <input name="emailcontactpers" id="emailcontactpers" required>
            <label for="gendercontactperson">Gender</label>
            <select name="gendercontactperson" id="gendercontactperson">
                <option>Male</option>
                <option>Female</option>
            </select>
            <label for="paymentinfo">Payment Details</label>
            <input name="paymentinfo" id="paymentinfo">
            <label for="kvk">Chamber of Commerce Number</label>
            <input name="kvk" id="kvk">
            <label for="address">Payment Address</label>
            <input name="address" id="address">

            <br><br>

            <button>Send</button><br>
            <button type="button" onclick="open1()">Customer Form</button>

        </form>
    </div>
</body>
</html>