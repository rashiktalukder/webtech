<?php
$count=0;
//include('../data/dbConn.php');
if(isset($_POST['formLogin'])){
	if(empty($_POST['username'])){
		$usernameErr="";
		$count=$count+1;
	}
	else{
		$username=$_POST['username'];
	}
	if(empty($_POST['psw'])){
		$pswErr="";
		$count=$count+1;
	}
	else{
		$psw=$_POST['psw'];
	}
	if($count == 0){
	$satatement = $db-> prepare("select * from users where username=? and password=?");
	$satatement->execute(array($username,$psw));
	$num_rows = $satatement->rowcount();
	if ($num_rows>0){
		session_start();
		$_SESSION['name'] = "mobileBankingApp";
		$_SESSION['username'] =$username;
		header ("location: ../view/index.php");
	}
	else{
		echo "invalid username or password "."<br>"."<a href='../view/login.php' >try again</a>";
	}
	}
	else{
		echo "<a href='../view/login.php' >try again</a>";
	}
}
?>