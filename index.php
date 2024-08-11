<?php

use Core\Database;

$heading  = "Home";

require("Core/function.php");
require("views/index.view.php");
require("Core/Database.php");

//connect MySQL database.
$config = require("config.php");

$db = new Database($config["database"]);

 //$urlQuery = var_dump(parse_url($_SERVER["REQUEST_URI"])["query"]);

 //echo dd($_GET["id"]);

 $id = $_GET["id"];

 $query = "select * from posts where id = ?";  // query is something like ? | :id
 //echo $query;

$posts = $db->query($query, [$id])->find();

//dd($posts);

dd($routes);

foreach ($posts as $post) {
  echo "<p>ID: {$post["id"]} title: {$post["title"]}</p>";
}



