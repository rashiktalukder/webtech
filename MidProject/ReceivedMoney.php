<!DOCTYPE html>
<head>
<title> Received Money </title>
</head>
<Body>
    <h1> Ammount <h1>
    <?php
$myfile = fopen("Rashik_Bank.txt", "w") or die("Unable to open file!");
$txt1 = "5000000000";
//fwrite($myfile, $txt);
$txt = "1000000000"+$txt1;
fwrite($myfile, $txt);
fclose($myfile);
?>

    <form method="POST" action="HomePage.php"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="submit" value="Back">
    </form>
</Body>
</html>