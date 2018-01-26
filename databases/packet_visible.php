<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gebruiker = $_SESSION["gebruiker"] ;
    $email = $_POST['username'];
    $email = "$email";
    $wachtwoord = randompassword();
    $admin = $_POST["admin"]; 
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql1 = "UPDATE package SET visible = $visible1 WHERE idpacket = 1" ;

//    if()

    $sql2 =  "UPDATE package SET visible = $visible2 WHERE idpacket = 2";
    $sql3 = "UPDATE package SET visible = $visible3 WHERE idpacket = 3";
    $sql4 = "UPDATE package SET visible = $visible4 WHERE idpacket = 4";
    $mysqli->real_escape_string($sql);
    $query = $mysqli->query($sql);   
    header("location:../pages/profiel_pagina.php");     
}else{
    header("location:../pages/profiel_pagina.php");
    exit();
}
?>