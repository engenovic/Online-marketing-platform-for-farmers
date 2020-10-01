<?php

 include '../Home/connection.php';
// if(!isset($_SESSION['username'])) {
	session_start();
//}
$username= $_SESSION['username'];
//establish connection
$connect=new mysqli("localhost","root","","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}
$sql="select * from members WHERE username= '$username'";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_array($result))
{
	//echo $username;
	$username=$row['username'];
	$fullName=$row['Fname']." ".$row['Lname'];
	$fname=$row['Fname'];
	$lname=$row['Lname'];
	$phone=$row['phone'];
	$email=$row['email'];
	$county=$row['county'];
}


$sql="SELECT  supply.SDate, supply.supplyID, CONCAT( supply.Quantity,  ' ', product.prodName ) AS suppliedItem, supply.Total
FROM supply
JOIN product ON supply.PID = product.PID where memberID='$username'";
$result=$connect->query($sql);
while($row=$result->fetch_assoc()) {

$supplys[]=$row;
// print_r($supplys);
// exit;
}

$sql="SELECT* FROM credit where sellerID='$username'";
$Cresult=$connect->query($sql);
while($row2=$Cresult->fetch_assoc()) {

$credits[]=$row2;//What if No records??

}
$sql="SELECT round(MAX( Balance ),2) as Balance
FROM credit
WHERE sellerID =  '$username' AND CreditID=(SELECT MAX(CreditID) FROM CREDIT WHERE sellerID =  '$username' ) ";
$Balance=$connect->query($sql)->fetch_assoc();
$Balance=$Balance['Balance'];



?>
