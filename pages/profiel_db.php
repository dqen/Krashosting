<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION["gebruiker"] ;
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql = "SELECT wachtwoord FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    $oudwachtwoord = $_POST["oudwachtwoord"];
    $wachtwoord = $_POST["wachtwoord"];
    $wachtwoord2 = $_POST["wachtwoord2"];
    if($oudwachtwoord == $r["wachtwoord"] || $wachtwoord === $wachtwoord2){
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql1 = "UPDATE wachtwoord ";
    $query = $mysqli->query($sql1);
    }
}else{
    header("location:profiel_pagina.php");
}
?>