<?php


session_start();
if(!isset($_SESSION['username'])) {
	header("Location: ../feedback/denyAccess.php?error=You must login as a buyer!! ");
}
$memberID=$_SESSION['username'];
require '../Home/connection.php';
//$submit=$_POST['submit'];
if(isset ($_POST['submit'])) 		
{

$location=$_POST['location'];
$landmark=$_POST['landmark'];
$county=$_POST['county'];
$Quantity=$_POST['quantity'];
$pid=$_POST['id'];

$supplyid=rand(1500, 9999); 

//calculate total

$sql="SELECT UPrice FROM PRODUCT where PID='$pid'";
$result=$connect->query($sql)->fetch_assoc();
$total= $result['UPrice']*$Quantity;
$credit=0.92*$total;
$cost=0.08*$total;



$sql = "INSERT INTO supply(supplyID,memberID,PID,Quantity,Total,Location,landmark,county) VALUES ('$supplyid','$memberID','$pid','$Quantity','$credit','$location','$landmark', '$county')";

$result=$connect->query($sql);

if($result) {
	
 $amount=$cost;


$TransType="outflow";
$Customer=$memberID;
$Custype="Seller";
$current="SELECT MAX(TransID)  as current From Transaction";
$result=$connect->query($current)->fetch_assoc();
$current= $result['current'];


$Balance="SELECT Balance FROM TRANSACTION WHERE TransID='$current'";
$Balance=$connect->query($Balance)->fetch_assoc();
$Balance= $Balance['Balance']+$amount-$credit;

$sql="INSERT INTO TRANSACTION (Amount,TransType,Customer,Custype,Balance) VALUES('$amount','$TransType','$Customer','$Custype','$Balance')";



$result=$connect->query($sql);

if($result) {


	  		$sql="UPDATE product SET Quantity=Quantity+'$Quantity' Where PID='$pid'";

			$result=$connect->query($sql);

			if($result) {

				
$sellerID=$memberID;
$Amount=$credit;
$current="SELECT MAX(CreditID)  as current From credit WHERE sellerID='$sellerID'";//where sellerID??
$result=$connect->query($current)->fetch_assoc();
$current= $result['current'];


$Balance="SELECT Balance FROM credit WHERE CreditID='$current' ";
$Balance=$connect->query($Balance)->fetch_assoc();
$Balance= $Balance['Balance']+$Amount;


				$sql="INSERT INTO CREDIT (sellerID,Amount,Type,Balance)VALUES('$sellerID','$Amount','Deposit','$Balance')";//where sellerID??
				$result=$connect->query($sql);

				if($result) {
					echo "Successful Transaction.$credit has been credited to your account";
				}else {
					echo $connect->error;
				}
				
			}else {
			echo $connect->error;
			exit;
			}
	//echo "Successful Transaction.$credit has been credited to your account";
}else {
	echo $connect->error;
}



}else {
	echo $connect->error;
}
}
else 
{	 
 echo "There is an error";
}
// close connection
mysqli_close($connect);
?>