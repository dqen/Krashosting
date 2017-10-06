<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 06/10/2017
 * Time: 10:20
 */

class newsarticle {

    private $database;
    private $assoc;

    public function __construct($nieuwsid) {

        // Establish connection to database
        $this->database = new mysqli("localhost", "root", "root", "nieuws");
//        if($this->database->errno) {
//            return "Failed to establish a connection to the database: " . $this->database->connect_error;
//        }

        $query = $this->database->query("SELECT * FROM nieuwsitems WHERE 'nieuwsid' = $nieuwsid;");

        $this->assoc = $query->fetch_assoc();
    }

    public function get_item($neededitem) {
        return $this->assoc["$neededitem"];
    }


}

/** TL;DR:
 *
 *  There's 4 "items" you can call using the "get_assoc()". They are as follows:
 *
 *  idnieuws        : Returns the ID of the row.
 *  header          : Returns the HEADER of the news article.
 *  articlesnippet  : Returns a snippet of the news article.
 *  article         : Returns the entire article, that does NOT include the header.
 *
 */

// Quick test

$article = new newsarticle(1);

$articletext = $article->get_item("article");

var_dump($articletext);