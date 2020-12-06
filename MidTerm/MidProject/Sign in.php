<!DOCTYPE html>
<head>
<title> Sign in </title>
</head>
<Body>

<?php
include 'header3.php'

?>
    User Name: <input type="text" name="name" required><br><br>
    

    Password:<input type="var" name="password"><br><br>
    Contact no.:<input type="text" name="CN"><br><br>
    
    Email: <input type="text" name="email"><br><br>

    Gender: <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="other">Other<br><br>
    Present Add:<input type="text" name="preAdd"><br><br>
    Permanent Add:<input type="text" name="perAdd"><br><br>

<?php
$nameError = "";
if($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_REQUEST["name"])) {
$nameError = "Name is required";
}
else {
echo "Name is: " . $_REQUEST["name"];
}
}
?>

<form method="POST" action="Login.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


 <br>
<span><?php echo $nameError; ?></span><br>
<input type="submit">
</form>

    <form method="POST" action="LandingPage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">

</form>


    
    
<?php include 'footer2.php' ?>
</Body>
</html>