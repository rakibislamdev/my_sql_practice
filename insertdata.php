<?php

$servername = "localhost";
$username = "root";
$passowrd = "";
$database = "codedb";

// connect to databas
$conn = mysqli_connect($servername, $username, $passowrd, $database);

// db connection check
if (!$conn) {
    die("sorry we failed to connect database" . mysqli_connect_error());
} else {
    echo "connection is successful";
}

$name = "Zony";
$email = "zony@gmail.com";
$roll = 908390;

// create table on db
$sql = "INSERT INTO `codedb`.`php_test1` (`name`, `email`, `roll`) VALUES ('$name', '$email', '$roll')";

// execute the sql code
$result = mysqli_query($conn, $sql);

// table connection check 
if ($result) {
    echo "The record has been inserted successfully successfully!<br>";
} else {
    echo "The record was not inserted successfully because of this error ---> " . mysqli_error($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data On Table - using by php</title>
</head>

<body>

</body>

</html>