<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    $email = $_POST["email"];
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql = "SELECT wachtwoord, email, admin FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    if ($r["email"] === $_POST["email"]){
        session_start();
        $_POST["name"] = $r["email"];
        header("location:loginsucces.php");
    }
}else{
    header("location:inloggendb.php");
}
?>