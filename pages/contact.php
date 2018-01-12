<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <link rel="stylesheet" href="../css/contact2.css" type="text/css">
    <title>contact</title>
</head>
<body>
<div class="banner">
</div>
<ul class="menu">
    <li class="menuitem"><a href="/index.php">Home</a></li>
    <li class="menuitem" id="active"><a href="contact.php">Contact</a></li>
    <li class="menuitem"><a href="over_ons.php">over ons</a></li>
    <li class="menuitem"><a href="pakketen.html">paketten</a></li>
</ul>
<div id="contact-container">
    <div id="contact">
        <div>
            <div id="title"><span>Contact Us</span></div>
            <h3 id="adres">Address</h3>
            <div id="grootte">
                <p>Call us for any questions.</p>
                <p><i></i>  Kasteeldreef 122, Tilburg</p>
                <p><i></i>  +00 1515151515</p>
                <p><i></i>  test@test.com</p>
            </div>
        </div>
    </div>
    <div id="map"></div>
</div>
<script>
    function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(51.572785, 5.0791122),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCev8FTXWfDsFrCa6K5QM_ihQDIHXgz8Eo&callback=myMap"></script>
</body>
</html>