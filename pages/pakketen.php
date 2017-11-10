<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "krashosting";


$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$sql = "SELECT name, description FROM packages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"]. "<br>" . $row["description"]. "<br>";
    }
} else{
    echo "jammer joh";
    }

$conn->close();
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

        <div id="pakket1"><?php  ?></div>
        <div id="pakket2"></div>
        <div id="pakket3"></div>
        <div id="pakket4"></div>
    </div>
</body>
</html>