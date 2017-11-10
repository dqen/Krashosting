
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_SESSION["gebruiker"] ;
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "SELECT wachtwoord FROM login WHERE email = '$email';";
    $query = $mysqli->query($sql);
    $r= $query->fetch_assoc();
    $oudwachtwoord = $_POST["oudwachtwoord"];
    $wachtwoord = $_POST["wachtwoord"];
    $wachtwoord2 = $_POST["wachtwoord2"];
    echo $wachtwoord ."<br>". $wachtwoord2 . "<br>" . $email;
    if($oudwachtwoord == $r["wachtwoord"] || $wachtwoord === $wachtwoord2){
        if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z!@#$%]{8,12}$/', $wachtwoord)) {
            
            $sql1 = "UPDATE login SET wachtwoord = '$wachtwoord' WHERE email = '$email';";
            $query1 = $mysqli->query($sql1);
            echo "het is gelukt"; 
        }else{
            $_SESSION["error"] = 'the password does not meet the requirements!';
            header("location:../pages/profiel_pagina.php");
            exit();
        }
    }
}else{
    header("location:../pages/profiel_pagina.php");
    exit();
}
?>