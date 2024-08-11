<?php

use Core\Database;

require("Core/function.php");
$config = require("config.php");
require("Core/Database.php");


$db = new Database($config["database"]);


$heading = "Create New Notes";

require("views/note-create.view.php");

?>