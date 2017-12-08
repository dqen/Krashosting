<?php
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "SELECT name, description, price FROM package";
    $query = $mysqli->query($sql);
    $result = array() ;
    $i = 0;
    while($r= $query->fetch_assoc()){
        if ($r['idpackage'] < 2){
            $return["$i"] = "{$r["name"]} <br> <br> {$r["description"]} <br> <br> <br> <div> <br> </div><div>&euro;  {$r["price"]} </div> ";
            $i++;
        }
        else{
            $return["$i"] = "{$r["name"]} <br> <br> {$r["description"]} <br> <br> <br> <div> <br> {$r["price"]} </div>";
            $i++;
        }

    }
//    echo "<pre>";
//    var_dump("{$return["0"]}");
//    echo "</pre>";
//
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>pakketen</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <link rel="stylesheet" href="../css/paketten.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="banner">
        </div>
        <ul class="menu">
            <li class="menuitem"><a href="/index.php">Home</a></li>
            <li class="menuitem"><a href="contact.html">Contact</a></li>
            <li class="menuitem"><a href="over_ons.html">over ons</a></li>
            <li class="active"><a href="pakketen.html">paketten</a></li>
        </ul>

        <div id="pakket1"><?php echo $return["0"]; ?></div>
        <div id="pakket2"><?php echo $return["1"]; ?></div>
        <div id="pakket3"><?php echo $return["2"]; ?></div>
        <div id="pakket4"><?php echo $return["3"]; ?></div>
    </div>
</body>
</html>