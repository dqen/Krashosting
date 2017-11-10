<?php
session_start();
function randompassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gebruiker = $_SESSION["gebruiker"] ;
    $email = $_POST['username'];
    $email = "$email";
    $wachtwoord = randompassword();
    $admin = $_POST["admin"]; 
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "INSERT INTO login (email, wachtwoord, admin, attempt, loggedin)
    VALUES ($email, $wachtwoord, $admin, 0, 0);";
    $mysqli->set_charset ($sql );
    $query = $mysqli->query($sql);   
    var_dump($sql);
}else{
    header("location:../pages/profiel_pagina.php");
    exit();
}
?>