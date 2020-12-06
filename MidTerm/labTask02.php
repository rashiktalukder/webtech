<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>
	<?php
	  	$idError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["id"])) {
				  $idError = "Id is required";
			}
			else {
				echo "Id is: " . $_REQUEST["id"];
			}
		} 

		
		$nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "StudentName is required";
			}
			else {
				echo "name is: " . $_REQUEST["name"];
			}
		} 

		

		
		$genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $genderError = "Gender is required";
			}
			else {
				echo "gender is: " . $_REQUEST["gender"];
			}
		} 

		
		$emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "StudentEmail is required";
			}
			else {
				echo "email is: " . $_REQUEST["email"];
			}
		} 

		
		$addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				echo "Address is: " . $_REQUEST["address"];
			}
		} 

		
		$cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $genderError = "City is required";
			}
			else {
				echo "City is: " . $_REQUEST["city"];
			}
		} 
		$stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["state"])) {
				  $stateError = "State is required";
			}
			else {
				echo "State is: " . $_REQUEST["state"];
			}
		} 

		

		
		$countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "Country is required";
			}
			else {
				echo "Country is: " . $_REQUEST["country"];
			}
		} 
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Id: <br/>
	<textarea type="string" name="id" cols="25" rows="1" ></textarea>
	<br />
	<span><?php echo $idError; ?></span><br />

	

	
	Student Name:<br/>
    <textarea type="text" name="name" cols="25" rows="1" ></textarea>
	<br />
	<span><?php echo $nameError; ?></span><br />
	Gender: <br/>
    <input type="checkbox" id="male" name="gender"  value="female"  required>Femele
	<input type="checkbox" id="female" name="gender"  value="male"   required>Male
	<br/>
	<span><?php echo $genderError; ?></span><br />
	Student Email: <br/>
	<textarea type="text" name="address" cols="25" rows="1" ></textarea>
	<br />
	<span><?php echo $emailError; ?></span><br />

	
	Address:<br/>
	<textarea name="address" cols="40" rows="1" ></textarea>
	<br />

	

	Street Address:<br/>
	<textarea  name="streeraddress" cols="40" rows="1" ></textarea>
	<br />
	 Address Line 2:<br/>
	<textarea  name="addressline2" cols="25" rows="1" ></textarea>
	<br />

	
	City:<br/>
    <textarea type="text" name="city" cols="25" rows="1" ></textarea>
	<br />
	state:<br/>
    <textarea type="text" name="state" cols="25" rows="1" ></textarea>
	<br />
	Zip/Postal Code:<br/>
    <textarea type="number" name="zip" cols="25" rows="1" ></textarea>
	<br />
    Country:<select><br/>
				<option name="country" value="" ></option>
				<option name="country" value="BD" >BD</option>
				<option name="country" value="UAE" >UAE</option>
				<option name="country" value="USA" >USA</option>
			</select><br/>

	
	<br /><br />
	<button type="submit"> Save Form </button>
	</form>
</body>
</html>