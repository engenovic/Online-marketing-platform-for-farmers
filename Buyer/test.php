<?php  
session_start();
//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

 $data=json_decode($_POST['data'],true);
$orderid=rand(1011, 9999);

$user=$_SESSION['username'];
 foreach (  $data as  $cart) {
 $name=$cart["PID"];
   $qty=$cart["Quantity"];
  $Price=$cart["Price"];
  $Total=$cart["Total"];

  			$sql="UPDATE product SET Quantity=Quantity-'$qty' Where PID='$name'";

			$result=$connect->query($sql);

			if($result) {
				//echo "Success";
			}else {
			echo $connect->error;
			exit;
			}

$sql1="INSERT INTO orders SET orderID='$orderid', userID='$user',PID='$name',Quantity='$qty', Total='$Total',price= '$Price' ON DUPLICATE KEY UPDATE Quantity=Quantity+'$qty' ";

// $sql1="INSERT INTO orders(orderID,userID,PID,Quantity,Price,Total,Date)  VALUES('$orderid','$user','$name','$qty','$Price','$Total',NOW())";

$result=$connect->query($sql1);

	if($result) {
	// echo "successfully inserted into orders";
	}else {
		echo $connect->error;
	}

 	
 }
 
   

	
   




 $amount=$_POST['grand'];


$TransType="inflow";
$Customer=$user;
$Custype="Buyer";
$current="SELECT MAX(TransID)  as current From Transaction";
$result=$connect->query($current)->fetch_assoc();
$current= $result['current'];


$Balance="SELECT Balance FROM TRANSACTION WHERE TransID='$current'";
$Balance=$connect->query($Balance)->fetch_assoc();
$Balance= $Balance['Balance']+$amount;

$sql="INSERT INTO TRANSACTION (Amount,TransType,Customer,Custype,Balance) VALUES('$amount','$TransType','$Customer','$Custype','$Balance')";



$result=$connect->query($sql);

if($result) {
	//echo "Successful into Transaction";
}else {
	echo $connect->error;
}

$sql="DELETE FROM CART";
$result=$connect->query($sql);
if($result) {
	echo 1;
}else {
	echo $connect->error;
}

?>