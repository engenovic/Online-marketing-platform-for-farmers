<?php

session_start();
//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

$grant=$_POST['grant'];
$mpesa=$_POST['mpesa'];
$phone=$_POST['phone'];
$rand=rand(1011, 9999);

$user=$_SESSION['username'];


$sql="INSERT INTO debit (DebitID,mpesaCode,buyerID,Amount,phone) VALUES('$rand','$mpesa','$user','$grant','$phone')";


			$result=$connect->query($sql);

			if($result) {
				echo "Successsfully Saved";
			}else {
			echo $connect->error;
			exit;
			}
 ?>