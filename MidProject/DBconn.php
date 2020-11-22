<!DOCTYPE html>
<html>
<head>
<title> DB Connection </title>
</head>
<body>

<?php

$conn=new mysqli("localhost","abc","12345");
if($conn->connect_error)
{
    die("Connection Failure");
}
else
{
    $sql = "SELECT * FROM `nokia` WHERE employee='1';
    echo $sql;
    echo "CONNECTION successful";
}

?>
</body>


</html>