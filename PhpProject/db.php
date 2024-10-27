<?php
$servername = "localhost:3306";
$username = "root";
$password = "java";
$dbname = "php";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else 
{
 // echo "connect";
}

?>