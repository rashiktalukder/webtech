<!DOCTYPE html>
<head>
<title> Profile </title>
</head>
<Body>
<?php
    Name:"name.Login.php";
?>

<img src="14051689_1632652600398414_4951203628384427102_n.jpg" alt="a boy standing with a UKULAYLE"width="300" height="300">
<br> <br>

<a href="ChangePass.php"> Change Password </a> <br><br>

<form method="POST" action="HomePage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
    <input type="submit" value="Back">
    </form>

</Body>
</html>