<?php

$mysqli = new mysqli("db", "user", "password", "appDB");

$result = $mysqli->query("SELECT * FROM works");

$works=[];
while ($row = mysqli_fetch_assoc($result)) {
    $works[] = $row;
}

include('templates/worksTemplate.php');