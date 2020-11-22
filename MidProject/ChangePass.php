<!DOCTYPE html>
<head>
<title> Change Password </title>
</head>
<Body>
Previous Password:<input type="var" name="prepass"><br><br>
New Password:<input type="var" name="newpass"><br><br>
<input type="submit" value="OK"><br><br>

<form method="POST" action="Profile.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">
    </form>

</Body>
</html>