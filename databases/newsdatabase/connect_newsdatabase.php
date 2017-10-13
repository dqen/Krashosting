<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 06/10/2017
 * Time: 10:20
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class newsarticle {

    private $database;
    private $assoc;

    public function __construct() {

        // Establish connection to database
        $this->database = new mysqli("localhost", "root", "root", "nieuws");

    }

    public function get_item($id, $neededitem) {

        $query = $this->database->query("SELECT $neededitem FROM nieuwsitems WHERE idnieuws = '$id';");

        $assoc = $query->fetch_row();

        var_dump($assoc);
    }


}

/** TL;DR:
 *
 *  There's 4 "items" you can call using the "get_item()". They are as follows:
 *
 *  idnieuws        : Returns the ID of the row.
 *  header          : Returns the HEADER of the news article.
 *  articlesnippet  : Returns a snippet of the news article.
 *  article         : Returns the entire article, that does NOT include the header.
 *
 */

// Quick test

$article = new newsarticle();

$articletext = $article->get_item("1", "idnieuws");

var_dump($articletext);