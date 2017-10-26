<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/master.css" type="text/css">
    <style>
    #errormsg{
        display: block;
        background-color: black;
        color: white;
        width:500px;
        height: 300px;
        z-index: 100;
        position: absolute;
        top:0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
    }
    </style>
    <script type="text/javascript"> 
    function preventEnterKey(e) {
    
    e = e || window.event;
    var keycode = e.which || e.keyCode;
    if (keycode == 13) {
        
        if (e.preventDefault) {
            e.preventDefault();
        } else { 
            e.returnValue = false;
        }
    
        if (e.stopPropagation) { 
            e.stopPropagation();
        } else {
            e.cancelBubble = true;
        }
    
        return false;
    }
}
    function disableAllInputs() {
        try {
            var els = document.getElementsByTagName('input');
            if (els) {
                for ( var i = 0; i < els.length; i++) {
                    els[i].onkeydown = preventEnterKey;
                }
            }
        } catch (e) {
        }
    }
</script>
</head>
<body>
<?php echo $_SESSION["error"];?>
<div class="banner">
    </div>
<ul id="menu">
    <li class="menuitem"><a href="index.html">Home</a></li>
    <li class="menuitem"><a href="contact.html">Contact</a></li>
    <li class="menuitem"><a href="pages/krashosting.php">login</a></li>
</ul>

<form action="inloggendb.php" method="POST" id="form" onload="disableAllInputs()">
    <p><?php echo $_SESSION["fout"]?></p>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="wachtwoord" placeholder="wachtwoord"><br>
    <input type="submit" placeholder="verzenden">
</form>
<div id="test"></div>
</body>
</html>
