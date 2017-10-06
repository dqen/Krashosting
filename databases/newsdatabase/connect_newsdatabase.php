<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 06/10/2017
 * Time: 10:20
 */

// Start connect to database

$newsdatabase = new mysqli("localhost", "root", "root", "nieuws");

$newssnippets = $newsdatabase->query("SELECT idnieuws, header, articlesnippet FROM nieuwsitems;");

$newssnippetsassoc = $newssnippets->fetch_assoc();

// End connect to database
//
// Variables for printing the table contents

// -- Variable for newsheader
$newsheader = $newssnippetsassoc["header"];

// -- Variable for newssnippet
$newsarticlesnippet = $newssnippetsassoc["articlesnippet"];

// -- Variable for newsID (I don't think it's needed anywhere, but just so it's not missed.
$newsid = $newssnippetsassoc["idnieuws"];

/** TL;DR:
 *  The variables usable for printing the News Article Snippets are as follows:
 *
 *  $newsheader = Returns the Header of the Article.
 *  $newsarticlesnippet = Returns the first 2 sentences of the news Article.
 *  $newsid = Returns the News ID.
 *
 */