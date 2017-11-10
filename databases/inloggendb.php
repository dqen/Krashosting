<?php 
session_start();
$email = $_POST["email"];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "SELECT wachtwoord, email, admin, attempt, loggedin FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    $loggedin = $r["loggedin"];
    if($r["attempt"] >= 2){
        $_SESSION["error"] = "<div id='errormsg'><p id='errormsg'> je account is voor veiligheidsredenen geblokkeerd.<br> contacteer de admin voor verderen informatie</p></div>";
        header("location:../pages/krashosting.php");
    }
    if ($r["email"] === $_POST["email"] && $r["wachtwoord"] === $_POST["wachtwoord"]){
        $loggedin++;
    $sql2 = "UPDATE login SET attempt = 0 , loggedin = $loggedin WHERE email = '$email';";
    $query = $mysqli->query($sql2);
    $admin = $r["admin"];
    
    $_SESSION["gebruiker"] = "$email";
    $_SESSION["admin"] = "$admin";
    $_SESSION["loggedin"] = "$loggedin"; 
    header("location:../pages/profiel_pagina.php");
    exit();
    }else{
        $attempts = $r["attempt"];
        $attempts++;
        
        $_SESSION["fout"] = "wachtwoord of gebruikersnaam is fout";
        $mysqli1 = new mysqli("localhost", "root", "root", "krashosting");
        $sql1 = "UPDATE login SET attempt = $attempts WHERE email = '$email';";
        $query = $mysqli1->query($sql1);
        header("location:../pages/krashosting.php");
        exit();
}
}else{
header("location:../pages/krashosting.php");
}
?>