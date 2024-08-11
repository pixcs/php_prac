<?php

use Core\Database;

require("Core/function.php");
$config = require("config.php");
require("Core/Database.php");

$db = new Database($config["database"]);

$heading = "Note";
$currentUserId = 1;

$note = $db->query("select * from notes where id = :id", [
    "id" => $_GET["id"]
])->findOrFail();

authorized($note["user_id"] === $currentUserId);

require("views/note.view.php");
