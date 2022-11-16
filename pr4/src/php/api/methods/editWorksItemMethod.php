<?php


function editWorksItemMethod()
{
    $id = $_GET["id"];
    $name = $_GET["name"];
    $description = $_GET["desc"];
    $type = $_GET["type"];


    header('Content-Type: application/json');
    print_r(json_encode(updateItemInWorks($id, $name, $type, $description), JSON_UNESCAPED_UNICODE));
}
