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
$sql = "SELECT si_no, name, email, password, message, date FROM test";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "si_no: " . $row["si_no"] . " - Name: " . $row["name"] . "Email: " . $row["email"] . "password: " . $row["password"] . "message: " . $row["message"] . "date: " . $row["date"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
