<?php
$servername = "localhost";
$username = "abc";
$password = "12345";
$dbname = "testwt";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn -> connect_error) {
	die("Error in db connection: " . $conn -> connect_error);
}

?>