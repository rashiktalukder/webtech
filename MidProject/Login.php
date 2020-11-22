<!DOCTYPE html>
<head>
    <title> Login Form </title>
</head>
<body>

<?php

include 'header1.php';
 
$nameError = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
if(empty($_REQUEST["name"])) {
$nameError = "Name is required";
}
else {
echo "Name is: " . $_REQUEST["name"];
}
}

$passError= "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_REQUEST["password"]))
    {
        $passError="Password is Required";
        
    
    }
    else
    {
        echo "Password is: " . $_REQUEST["password"];
    }
}

?>

<?php
$cookie_name = "Guest";
$cookie_value = "1";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 

$myfile = fopen("Values/cookies.txt", "w") or die("Unable to open file!");
fwrite($myfile, $cookie_name . " " . $cookie_value . " ");
fclose($myfile);
?>

<form method="POST" action="HomePage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    User Name:<input type="text='0'" name="name" require>
    <span><?php echo $nameError; ?></span><br />
    <br><br>
    Password:<input type="var" name="password" require>
    <?php echo $passError; ?><br>
    <br><br>
    <input type="submit" value="Login">
    
    <?php

    
if(isset($_POST['submit']))
{
    $username=$_POST['name'];
    if(strlen($username)<=8)
    {
        echo "Name should be more than 8 char";

    }
}
?>

</form>

<form method="POST" action="LandingPage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">

</form>

</body>
</html>