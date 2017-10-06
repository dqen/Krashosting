<?php
    $mysqli = new mysqli("localhost", "root", "root", "pakketen");
    $sql = "SELECT * FROM pakket;";
    $query = $mysqli->query($sql);

    while($r = $query->fetch_assoc()) {
        $pakket[] = $r;

    }
echo '<pre>',print_r($pakket,1),'</pre>';
//    var_dump($pakket)
    ?>
