<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql = "SELECT wachtwoord, email, admin FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    if ($r["email"] === $_POST["email"]){
        session_start($r["email"]);
        $_SESSION["name"] = $r["email"];
        header("location:krashosting.php");
    }
}else{
    header("location:krashosting.php");
}
?>