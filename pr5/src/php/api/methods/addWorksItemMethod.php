<?php


function addWorksItemMethod()
{
    $name = $_GET["name"];
    $description = $_GET["desc"];
    $type = $_GET["type"];

    header('Content-Type: application/json');
    print_r(json_encode(addItemToWorks($name, $type, $description), JSON_UNESCAPED_UNICODE));
}
