<?php

function getDbObject()
{
    $mysqli = new mysqli("db", "user", "password", "appDB");
    return $mysqli;
}

function getWorks($offset, $limit)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("SELECT * FROM works LIMIT $limit OFFSET $offset");
    $works=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $works[] = $row;
    }
    $mysqli->close();
    return $works;
}

function getUsers($offset, $limit)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("SELECT * FROM users LIMIT $limit OFFSET $offset");
    while ($row = mysqli_fetch_assoc($result)) {
        $row['password'] = "***";
        $users[] = $row;
    }
    $mysqli->close();
    return $users;
}

function addItemToWorks($name, $type, $desc)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("INSERT INTO works (work_name, work_type, work_desc) VALUES ('$name', '$type', '$desc')");
    $mysqli->close();
    return $result;
}

function addUser($name, $password)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("INSERT INTO users (name, password) VALUES ('$name', '$password')");
    $mysqli->close();
    return $result;
}

function updateItemInWorks($id, $name, $type, $desc)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("UPDATE works SET work_name = '$name', work_type = '$type', work_desc = '$desc' WHERE id = '$id'");
    $mysqli->close();
    return $result;
}

function deleteWorksItem($id)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("DELETE FROM works WHERE id = '$id'");
    $mysqli->close();
    return $result;
}

function deleteUser($id)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("DELETE FROM users WHERE id = '$id'");
    $mysqli->close();
    return $result;
}
