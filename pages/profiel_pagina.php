<?php
    
    session_start();
    $result= "";
    if($_SESSION["admin"] == 1){
        $admin .= "<form id=\"adduser\" action=\"../databases/adduser.php\" method=\"POST\">
            <label for=\"adduser\">add user</label>
            <input id=\"addusername\" type=\"text\" name=\"username\" placeholder= \"username\">
            <select name=\"admin\">
            <option value= 1 >admin</option>
            <option value= 2 >werknemer</option>
            <option value = 3 >particulier</option>
            </select>
            <input type=\"submit\" placeholder=\"verzenden\">
            </form>";
    }
    $gebruiker = $_SESSION["gebruiker"];
    $gebruiker .= "<br>";
    
    $listparticulier = "";
    $listparticulier .= "<table style=\"width:50%\">
                <tr>
                    <th>idguest</th>
                    <th>naam</th>
                    <th>telefoon</th>
                    <th>email</th> 
                    <th>adress</th>
                    <th>geslacht</th>
                    <th>leeftijd</th>
                    <th>betalingsgegevens</th>";
                    if($_SESSION["admin"] == 1){
                        $listparticulier .= "<th>verwijderen</th>";
                        $listparticulier .= "<th>bewerken</th>";
                    }else{
                        $listparticulier .= "<th>bewerken</th>";
                    }
                    $listparticulier .= "</tr>";
                    
                
                $count = 0;
                //hallo
    $mysqli = new mysqli("localhost", "root", "root", "krashosting");
    $sql = "SELECT * FROM particulier";
    $query = $mysqli->query($sql);
    while($r= $query->fetch_assoc()){
        $idnaam = $r["idparticulier"];
                $listparticulier .= "<tr>
                        <td>{$r["idparticulier"]}</td>
                        <td>{$r["naam"]}</td>
                        <td>{$r["telefoon"]}</td>
                        <td>{$r["email"]}</td> 
                        <td>{$r["adress"]}</td>
                        <td>{$r["geslacht"]}</td>
                        <td>{$r["leeftijd"]}</td>
                        <td>{$r["betalingsgegevens"]}</td>"; 
                        if($_SESSION["admin"] == 1){
                            $listparticulier .="<td><form method=\"POST\" action=\"../databases/verwijderen_database.php\"><input type=\"submit\" name=\"idnaam\" value=\"$idnaam\"></form></td>";                      
                            $listparticulier .= "<td><form method=\"POST\" action=\"../databases/bewerken_database.php\"><input type=\"submit\" name=\"idnaam\" value=\"$idnaam\"></form></td>";
                        }else        
                
                        $listparticulier .="<td><form action=\"../databases/bewerken_database.php\"><input type=\"submit\" value=\"$idnaam\"></form></td>
                     </tr>";
                   
                    $count++;
    }
    $listparticulier .= "</table>";
    if($_SESSION["loggedin"] == 1){
        $result = "verander je wachtwoord voor veiligheidsmaatregelen";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>login</title>
        <link rel="stylesheet" href="../css/master.css" type="text/css">
        <link rel="stylesheet" href="../css/profiel_pagina.css" type="text/css">
        <script src="../js/profiel_pagina.js"></script>
    </head>
    <body>
        <div class="border1">
            <?php   
                echo  "<div class=\"border1\">";
                echo $gebruiker;
                echo "</div>";
                echo  "<div class=\"border1\">";
                echo $admin;
                echo "</div>";
            ?>
        </div>
        <br><br>
        
        <div class="border1">
            <form action="../databases/packet_visible.php" method="POST" >
                <p>package 1</p>
                <select name="package_1">
                    <option value= 1 >visible</option>
                    <option value= 0 >invisible</option>
                </select>
                <input value="1" type="submit" name="package" placeholder="verzenden">

            </form>
            <form action="../databases/packet_visible.php" method="POST" >
                <p>package 2</p>
                <select name="package_2">
                    <option value= 1 >visible</option>
                    <option value= 0 >invisible</option>
                </select>
                <input value="2" type="submit" name="package" placeholder="verzenden">

                </form>
            <form action="../databases/packet_visible.php" method="POST" >
                <p>package 3</p>
                <select name="package_3">
                    <option value= 1 >visible</option>
                    <option value= 0 >invisible</option>
                </select>
                <input value="3" type="submit" name="package" placeholder="verzenden">

                </form>
            <form action="../databases/packet_visible.php" method="POST" >
                <p>package 4</p>
                <select name="package_4">
                    <option value= 1 >visible</option>
                    <option value= 0 >invisible</option>
                </select>
                <input value="4" type="submit" name="package" placeholder="verzenden">
            </form>
        </div>
        <br><br>

        <div class="border1">
            <label for="open_ww">verander je wachtwoord</label><br>
                <form action="../databases/profiel_db.php" method="POST" class="form" onload="disableAllInputs()">
                    <input type="password" name="oudwachtwoord" placeholder="oud wachtwoord"><br>
                    <input type="password" name="wachtwoord" placeholder="nieuw wachtwoord"><br>
                    <input type="password" name="wachtwoord2" placeholder="herhaal wachtwoord"><br>
                    <input type="submit" placeholder="verzenden">
                </form>
            </div>
        </div>
        <br><br>
        <div class="">
            <?php
            for($i - 0; $i < count("$count");$i++){
                echo $listparticulier;
            }
                
            ?>
        </div>
    </body>
</html>
