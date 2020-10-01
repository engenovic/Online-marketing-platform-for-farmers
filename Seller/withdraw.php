<?php
session_start();
$sellerID=$_SESSION['username'];
$balance=$_POST['balance'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];




//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

//insert into database
$Amount=$amount;
$current="SELECT MAX(CreditID)  as current From credit WHERE sellerID='$sellerID'";//where sellerID??
$result=$connect->query($current)->fetch_assoc();
$current= $result['current'];


$Balance="SELECT Balance FROM credit WHERE CreditID='$current' ";
$Balance=$connect->query($Balance)->fetch_assoc();
$Balance= $Balance['Balance']-$Amount;


				$sql="INSERT INTO CREDIT (sellerID,Amount,Type,Balance)VALUES('$sellerID','$Amount','Withdraw','$Balance')";//where sellerID??
				$result=$connect->query($sql);

				if($result) {
					echo "Confirmed.Kshs.$amount has been sent to $phone";
				}else {
					echo $connect->error;
				}
			?>
