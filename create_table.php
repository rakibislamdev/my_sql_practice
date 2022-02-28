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

// create table on db
$sql = "CREATE TABLE `codedb`.`php_test1` ( `si no` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `email` VARCHAR(20) NOT NULL , `roll` INT(11) NOT NULL , PRIMARY KEY (`si no`))";

// execute the sql code
$result = mysqli_query($conn, $sql);

// table connection check 
if (!$result) {
    die("sorry we can not create table" . mysqli_connect_error());
} else {
    echo "table create is successful";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table - using by php</title>
</head>

<body>

</body>

</html>