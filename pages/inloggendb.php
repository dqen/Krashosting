<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_SESSION["error"] > 3){
        $_SESSION["text"] = "tevaak fout ingevuld";
        header("location:krashosting.php");

    }else{
        $email = $_POST["email"];
        $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
        $sql = "SELECT wachtwoord, email, admin FROM login WHERE email = '$email';";
        $query = $mysqli->query($sql);
        $r= $query->fetch_assoc();
        if ($r["email"] === $_POST["email"] && $r["wachtwoord"] === $_POST["wachtwoord"]){
            header("location:../index.php");
        }else{
            $_SESSION["text"] = "wachtwoord of gebruikersnaam fout";
            $_SESSION["error"] = $_SESSION["error"]++;
            header("location:krashosting.php");
        }
    }
}else{
    header("location:krashosting.php");
}
?>