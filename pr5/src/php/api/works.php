<?php

require "services/dbWorker.php";
include "./methods/getWorksMethod.php";
include "./methods/addWorksItemMethod.php";
include "./methods/deleteWorksItemMethod.php";
include "./methods/editWorksItemMethod.php";

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET":
        getWorksMethod();
        break;
    case "POST":
        addWorksItemMethod();
        break;
    case 'DELETE':
        deleteWorksItemMethod();
        break;
    case "PUT":
        editWorksItemMethod();
        break;
    default:
        header("HTTP/1.0 405 Service Unavailable");
}


