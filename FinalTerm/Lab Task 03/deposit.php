<?php
	include('../data/dbConn.php');
	if(isset ($_REQUEST['id']) )
	{
		$id= $_REQUEST['id'];
	}
	else
	{
		header('location:../view/index.php');
	}
?>

<!DOCTYPE html>
<html>
<title>Deposit Amount</title>
<body>

<h1>Deposit</h1>
<?php
$deposit=0;
$satatement = $db-> prepare("select * from users where id=?");
	$satatement->execute(array($id));
	$result = $satatement-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row){
		$balance=$row['balance'];
	}
	echo "balance".$balance."<br>";
if(isset($_POST['formDeposit'])){
	if(empty($_POST['deposit'])){
		$depositErr="";
	}
	else{
		$deposit=$_POST['deposit'];
	}
	$aftrDeposit=$deposit+$balance;
	$statement1 = $db->prepare("update users set balance = ?  where id=?");
	$statement1->execute(array ($aftrDeposit,$id) );
	echo "After Deposit".$aftrDeposit;
}
?>
<form action="" method="POST">
	<label>Deposit Amount</label>
	<input type="text" name="deposit" >
	<input type="submit" name="formDeposit" value="Deposit">
</form>

</body>
</html>