<?php 
session_start();
$email = $_POST["email"];
$mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
$sql3 = "SELECT attempt FROM login WHERE email = '$email';";
$query = $mysqli->query($sql3);
$r= $query->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
    $sql = "SELECT wachtwoord, email, admin, attempt FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    if($r["attempt"] >= 2){
    $_SESSION["error"] = "<div id='errormsg'><p id='errormsg'> je account is voor veiligheidsredenen geblokkeerd.<br> contacteer de admin voor verderen informatie</p></div>";
    header("location:krashosting.php");
    }
    if ($r["email"] === $_POST["email"] && $r["wachtwoord"] === $_POST["wachtwoord"]){
        $sql2 = "UPDATE login SET attempt = 0 WHERE email = '$email';";
        $query = $mysqli->query($sql2);
        header("location:../index.php");
        exit();
    }else{
        $attempts = $r["attempt"];
        $attempts++;
        $_SESSION["fout"] = "wachtwoord of gebruikersnaam is fout";
        $mysqli1 = new mysqli("localhost", "root", "root", "login_krashosting");
        $sql1 = "UPDATE login SET attempt = $attempts WHERE email = '$email';";
        $query = $mysqli1->query($sql1);
        header("location:krashosting.php");
        exit();
    }
}else{
header("location:krashosting.php");
}
?>