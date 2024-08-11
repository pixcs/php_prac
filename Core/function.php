<?php
require "Core/Response.php";

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorized($condition, $response = Response::FORBIDDEN)
{
    if (!$condition) {
        die($response);
    }
}
