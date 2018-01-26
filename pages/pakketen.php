<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
        $result= "";
        $mysqli = new mysqli("localhost", "root", "root", "krashosting");
        $sql = "SELECT * from package";
        $mysqli->real_escape_string($sql);
        $query = $mysqli->query($sql); 
        while($r= $query->fetch_assoc()){  
            $name = $r["name"];
            $description = $r["description"];
            $visible = $r["visible"];
            $price = $r["price"];
            if($visible == 1){
                $result .= "<div class=\"w3-third w3-margin-bottom\">
                <ul class=\"w3-ul w3-border w3-hover-shadow\">
                    <li class=\"w3-theme\">
                        <p class=\"w3-xlarge\">$name</p>
                    </li>
                    <li class=\"w3-padding-16\">$description</li>
                    <li class=\"w3-padding-16\">$price</li>
                    <li class=\"w3-theme-l5 w3-padding-24\">
                        <button class=\"w3-button w3-teal w3-padding-large\"><i class=\"fa fa-check\"></i> Sign Up</button>
                    </li>
                </ul>
            </div>";
            }
            
        }
    $i = 0;
   
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

        <div class="banner">
        </div>

    <ul class="menu">
        <li class= "menuitem "id="active"><a href="../index.php">Home</a></li>
        <li class="menuitem"><a href="contact.php">Contact</a></li>
        <li class="menuitem"><a href="over_ons.php">over ons</a></li>
        <li class="menuitem"><a href="pakketen.html">paketten</a></li>
    </ul>

        <div class="w3-row-padding w3-center w3-padding-64" id="pricing">
            <h2>PRICING</h2>
            <p>Choose a pricing plan that fits your needs.</p><br>
            <?php
            echo $result 
            ?>

            
</div>
    </div>
</div>
</body>


</html>