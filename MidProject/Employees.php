<!DOCTYPE html>
<head>
<title> Employees </title>
</head>
<Body>
    <h1> 10k Employees <h1>
    <a href="ManageEmpSal.php">Employees salary</a>

    <form method="POST" action="HomePage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">
    </form>
</Body>
</html>