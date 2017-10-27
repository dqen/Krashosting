<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('databases/newsdatabase/connect_newsdatabase.php');

    $article = new News();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>home</title>
    <link rel="stylesheet" href="css/master.css" type="text/css">

</head>
<body>

    <div class="banner">
    </div>
    <ul class="menu">
        <li class="menuitem"><a href="/index.php">Home</a></li>
        <li class="menuitem"><a href="pages/contact.html">Contact</a></li>
        <li class="menuitem"><a href="pages/over_ons.html">over ons</a></li>
        <li class="menuitem"><a href="pages/pakketen.html">paketten</a></li>
    </ul>
    <div class="container">
            <div id="pakket1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et tortor in sem condimentum convallis nec congue ante. Donec orci velit, faucibus quis venenatis ut, pretium ac sapien. Phasellus eu turpis nunc. Phasellus dignissim tortor sit amet lorem gravida, eget tristique turpis condimentum. In hac habitasse platea dictumst. Morbi pharetra lectus et pellentesque imperdiet. Phasellus velit nibh, dictum non nisi et, rhoncus semper lectus. Nulla ultrices mollis enim at scelerisque. Nam consequat blandit eros ac lobortis. Sed vestibulum diam eget mauris finibus dignissim. Integer ex ligula, tempor ac ornare quis, pretium ut purus</p></div>
            <div id="pakket2"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et tortor in sem condimentum convallis nec congue ante. Donec orci velit, faucibus quis venenatis ut, pretium ac sapien. Phasellus eu turpis nunc. Phasellus dignissim tortor sit amet lorem gravida, eget tristique turpis condimentum. In hac habitasse platea dictumst. Morbi pharetra lectus et pellentesque imperdiet. Phasellus velit nibh, dictum non nisi et, rhoncus semper lectus. Nulla ultrices mollis enim at scelerisque. Nam consequat blandit eros ac lobortis. Sed vestibulum diam eget mauris finibus dignissim. Integer ex ligula, tempor ac ornare quis, pretium ut purus.</p></div>
            <div id="pakket3"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et tortor in sem condimentum convallis nec congue ante. Donec orci velit, faucibus quis venenatis ut, pretium ac sapien. Phasellus eu turpis nunc. Phasellus dignissim tortor sit amet lorem gravida, eget tristique turpis condimentum. In hac habitasse platea dictumst. Morbi pharetra lectus et pellentesque imperdiet. Phasellus velit nibh, dictum non nisi et, rhoncus semper lectus. Nulla ultrices mollis enim at scelerisque. Nam consequat blandit eros ac lobortis. Sed vestibulum diam eget mauris finibus dignissim. Integer ex ligula, tempor ac ornare quis, pretium ut purus.</p></div>
            <div id="pakket4"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et tortor in sem condimentum convallis nec congue ante. Donec orci velit, faucibus quis venenatis ut, pretium ac sapien. Phasellus eu turpis nunc. Phasellus dignissim tortor sit amet lorem gravida, eget tristique turpis condimentum. In hac habitasse platea dictumst. Morbi pharetra lectus et pellentesque imperdiet. Phasellus velit nibh, dictum non nisi et, rhoncus semper lectus. Nulla ultrices mollis enim at scelerisque. Nam consequat blandit eros ac lobortis. Sed vestibulum diam eget mauris finibus dignissim. Integer ex ligula, tempor ac ornare quis, pretium ut purus.</p></div>
            <div id="break"></div>

            <div id="nieuws1"><h3><?php echo $article->get_item(1, "header"); ?></h3> <p><?php echo $article->get_item(1, "articlesnippet"); ?></p></div>
            <div id="nieuws2"><h3><?php echo $article->get_item(2, "header"); ?></h3> <p><?php echo $article->get_item(2, "articlesnippet"); ?></p></div>
            <div id="nieuws3"><h3><?php echo $article->get_item(3, "header"); ?></h3> <p><?php echo $article->get_item(3, "articlesnippet"); ?></p></div>
    </div>
</body>
</html>