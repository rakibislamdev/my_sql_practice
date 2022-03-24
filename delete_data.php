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
$sql = "DELETE FROM `test` WHERE `name` = 'aohan'";
$result = mysqli_query($conn, $sql);

$aff = mysqli_affected_rows($conn);
echo "<br>Number of affected row is: $aff <br>";
