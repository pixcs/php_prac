<?php

use Core\Database;

require("Core/function.php");
$config = require("config.php");
require("Core/Database.php");

$db = new Database($config["database"]);

//dd($db);

$notes = $db->query("SELECT * FROM notes where user_id = 1")->get();
//dd($notes);

$heading = "My Notes";

require("views/notes.view.php");

?>