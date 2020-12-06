<!DOCTYPE html>
<?php 
	session_start();
?>
<html>
	<head>
		<title>Session Example</title>
	</head>
	<body>
		<h1>Session Example</h1>

		<?php 
			$_SESSION["id"] = "user";
			$_SESSION["name"] = "abc";

			echo "Session is set";

			echo "<br />";

			echo "id: " . $_SESSION["id"] . " name: " . $_SESSION["name"];
		?>
	</body>
</html>