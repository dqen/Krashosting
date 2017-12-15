<?php
/**
 * Created by PhpStorm.
 * User: geertsoetens
 * Date: 06/10/2017
 * Time: 10:20
 */

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

class News {

    private $database;

    public function __construct() {

        // Establish connection to database
        $this->database = new mysqli("localhost", "root", "root", "krashosting");

    }

    public function get_item($id, $neededitem)
    {

        $query = $this->database->query("SELECT $neededitem FROM nieuwsitems WHERE idnieuws = '$id';");

        $row = $query->fetch_row();

        return $row["0"];

    }

    public function add_newsitem($title, $article) {

        $snippet = substr($article, 0, 165) . "...";

        $esctitle = $this->database->real_escape_string($title);
        $escarticle = $this->database->real_escape_string($article);
        $escsnippet = $this->database->real_escape_string($snippet);

        if ($this->database->query("INSERT INTO nieuwsitems (idnieuws, header, articlesnippet, article) VALUES (NULL, '$esctitle', '$escsnippet', '$escarticle');")) {
            return "Database updated.";
        } else {
            return "An error has occured.";
        }
    }

    public function update_newsitem($id, $title, $article) {

        $snippet = substr($article, 0, 165) . "...";

        $esctitle = $this->database->real_escape_string($title);
        $escarticle = $this->database->real_escape_string($article);
        $escsnippet = $this->database->real_escape_string($snippet);

        if ($title == "") {
            if ($this->database->query("UPDATE nieuwsitems SET articlesnippet = '$escsnippet', article = '$escarticle' WHERE idnieuws = '$id';")) {
                return "Article of $id successfully updated.";
            } else {
                return "Something went wrong while updating the article...";
            }
        } else if ($article == "") {
            if ($this->database->query("UPDATE nieuwsitems SET header = '$esctitle' WHERE idnieuws = '$id';")) {
                return "Header of $id successfully updated.";
            } else {
                return "Something went wrong while updating the header...";
            }
        } else if ($id == "") {

            return "ERROR! ID is required!";
        } else if ($article == "" && $title == ""){

            return "You have to update something...";
        } else {
            $this->database->query("UPDATE nieuwsitems SET header = '$esctitle', articlesnippet = '$escsnippet', article = '$escarticle' WHERE idnieuws = '$id';");

            return "Both article & header of $id have been updated!";
        }

    }

    public function delete_newsitem($id) {

        if ($this->database->query("DELETE FROM nieuwsitems WHERE idnieuws = '$id';")) {
            return "News item $id has been deleted.";
        } else {
            return "Id is required.";
        }

    }

    public function get_recent() {

        if ($result = $this->database->query("SELECT * FROM nieuwsitems;")) {

            $rowcount = $result->num_rows;

            $resultarr = array();

            for($i = $rowcount; $i < ($rowcount - 3); $i--) {

                if ($row = $this->database->query("SELECT * FROM nieuwsitems WHERE idnieuws = '$i'")) {
                    $rowarr = $row->fetch_row();

                    return $rowarr;
                } else {
                    return "Error fetching row.";
                }

            }
        } else {
            return "An unexpected error occurred. Please contact an administrator.";
        }
    }
}

/** TL;DR:
 *
 *  There's 4 "items" you can call using the "get_item(@param, @param)". They are as follows:
 *
 *  idnieuws        : Returns the ID of the row. You need to enter this as the first parameter aswell.
 *  header          : Returns the HEADER of the news article.
 *  articlesnippet  : Returns a snippet of the news article.
 *  article         : Returns the entire article, that does NOT include the header.
 *
 *  You can now also use "add_newsitem(@param, @param)". It requires 2 parameters:
 *
 *  "title"         : STRING        - The title of the new news article
 *  "article"       : STRING        - The article itself. The function automatically creates a snippet.
 *
 *  The "add_newsitem()" does NOT check for XSS OR validates the inputs. it DOES however put them
 *  through the "real_escape_string()" function.
 *
 *  You can also update an article using the "update_newsitem(param, param, param)". It requires 3 parameters.
 *  If you do not want to update, for example, a header, then you have to leave the field empty. ID is required. ex:
 *
 *      $newsobj->update_newsitem([id] 1, [header/title] "", [article]"updated article")
 *
 *  The parameters are as follows:
 *
 *  "id"            : STRING / INT  - This declares what article you want to edit.
 *  "title"         : STRING        - The new or updated title for the article.
 *  "article"       : STRING        - The new or updated article.
 *
 *  Deleting news items is also possible now. "delete_newsitem(@param)". It only requires the ID of the item you want
 *  to delete. IT DOES NOT UPDATE THE AUTO INCREMENT YET, SO THE ID WILL STILL GO BEYOND THE ONE YOU DELETED, 4 WILL
 *  NOT BECOME 3. If you deleted the most recent news item (let's say it's ID is 4)  and you create a new one. The new
 *  one's ID will still become 5, not 4. Keep that in mind.
 *
 *  Here's an example:
 *
 *      $newsobj->delete_newsitem(@param)
 *
 */