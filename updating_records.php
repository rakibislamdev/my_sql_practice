<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codedb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `test` WHERE `message` = 'amr sonar bangla'";
$result = mysqli_query($conn, $sql);

$number_of_rows = mysqli_num_rows($result);

echo "Total row = $number_of_rows";

// usage of where clause to fetch data

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "si_no: " . $row["si_no"] . " - Name: " . $row["name"] . "Email: " . $row["email"] . "password: " . $row["password"] . "message: " . $row["message"] . "date: " . $row["date"] . "<br>";
    }
} else {
    echo "0 results";
}

// usage of where clause to update data

$sql = "UPDATE `test` SET `name` = 'aohan' WHERE `test`.`si_no` = 1";
$result = mysqli_query($conn, $sql);
echo $result;

if (!$result) {
    echo "sorry! data is not updated";
} else {
    echo "data updated successfully";
}

mysqli_close($conn);

// UPDATE `test` SET `message` = 'amr sonar bangla' WHERE `test`.`si_no` = 3;
