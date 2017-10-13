<?php 
var_dump($_COOKIE);
var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($_COOKIE["error"] > 3){
        setcookie("text" ,  "window.confirm('tevaak ingvuld');",0);
        // header("location:krashosting.php");
        exit();
    }else{
        $email = $_POST["email"];
        $mysqli = new mysqli("localhost", "root", "root", "login_krashosting");
        $sql = "SELECT wachtwoord, email, admin FROM login WHERE email = '$email';";
        $query = $mysqli->query($sql);
        $r= $query->fetch_assoc();
        if ($r["email"] === $_POST["email"] && $r["wachtwoord"] === $_POST["wachtwoord"]){
            // header("location:../index.php");
            exit();
        }else{
            $value = $_COOKIE["error"]++;
            // $value = $value++;
            setcookie("error", $_COOKIE["error"], 0);
            setcookie("text" , "wachtwoord of gebruikersnaam fout", 0);
            // header("location:krashosting.php");
            exit();
        }
    }
}else{
    // header("location:krashosting.php");
    exit();
}
?>