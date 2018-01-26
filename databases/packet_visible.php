<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $visible1 = $_POST["package_1"];
    $visible2 = $_POST["package_2"];
    $visible3 = $_POST["package_3"];
    $visible4 = $_POST["package_4"];
    var_dump($_POST);
    if($_POST["package"] ==  1 ){
        $sql = "UPDATE package SET visible = $visible1 WHERE idpackage = 1" ;
    }elseif($_POST["package"] ==  2){
        $sql =  "UPDATE package SET visible = $visible2 WHERE idpackage = 2";
    }elseif($_POST["package"] ==  3){
        $sql = "UPDATE package SET visible = $visible3 WHERE idpackage = 3";
    }else{
        $sql = "UPDATE package SET visible = $visible4 WHERE idpackage = 4";
    }
    $mysqli->real_escape_string($sql);
    $query = $mysqli->query($sql);  
   
    header("location:../pages/profiel_pagina.php");     
}else{
    header("location:../pages/profiel_pagina.php");
    exit();
}
?>