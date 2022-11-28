<?php


function deleteWorksItemMethod()
{
    $id = $_GET["id"];

    header('Content-Type: application/json');
    print_r(json_encode(deleteWorksItem($id), JSON_UNESCAPED_UNICODE));
}
