<?php

$servername = "localhost";
$username = "root";
$passowrd = "";

$conn = mysqli_connect($servername, $username, $passowrd);

// create db using by php code
$sql = "CREATE DATABASE codedb";
mysqli_query($conn, $sql);

if (!$conn) {
    die("sorry we failed to connect database" . mysqli_connect_error());
} else {
    echo "connection is successful";
}



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database - using by php</title>
</head>

<body>

</body>

</html>