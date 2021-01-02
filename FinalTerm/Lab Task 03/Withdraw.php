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
$withdraw=0;
$satatement = $db-> prepare("select * from users where id=?");
	$satatement->execute(array($id));
	$result = $satatement-> fetchAll (PDO::FETCH_ASSOC);
	foreach($result as $row){
		$balance=$row['balance'];
	}
	echo "balance".$balance."<br>";
if(isset($_POST['formWithdraw'])){
	if(empty($_POST['withdraw'])){
		$withdrawErr="";
	}
	else{
		$withdraw=$_POST['withdraw'];
	}
	if($balance>$withdraw){
		$aftrwithdrawt=$balance-$withdraw;
	
	
	$statement1 = $db->prepare("update users set balance = ?  where id=?");
	$statement1->execute(array ($aftrwithdrawt,$id) );
	echo "After Withdraw".$aftrwithdrawt;
	}
	else{
		echo "Can not withdraw is money";
	}
}
?>
<form action="" method="POST">
	<label>Withdraw Amount</label>
	<input type="text" name="withdraw" >
	<input type="submit" name="formWithdraw" value="Withdraw">
</form>

</body>
</html>