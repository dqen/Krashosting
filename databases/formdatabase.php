<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 08/12/2017
 * Time: 10:27
 */

// PLEASE ENTER THE FORM PAGE LOCATION HERE.
// !! THIS IS A PLACEHOLDER! PLEASE CHANGE. !!
$formpage = "../pages/form.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["comporpart"] === 1) {
        echo "This is the company check";
    } else if ($_POST["comporpart"] === 0) {
        echo "This is the private check";
    } else {
        echo "Something went wrong, please contact an administrator. <br>";
        echo "Dumping admin info... <br>";
        var_dump($_POST);
        return;
    }
} else {
    echo "ERROR 104; <br>";
    echo "ACCESS DENIED.<br><br>";
    echo "<a href=$formpage>< RETURN</a>";
}