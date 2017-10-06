<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 06/10/2017
 * Time: 10:20
 */

$newsdatabase = new mysqli("localhost", "root", "root", "nieuws");

$newssnippets = $newsdatabase->query("SELECT idnieuws, header, articlesnippet FROM 'nieuwsitems'");
