<?php


 if(!isset($_SESSION['username'])) {
	session_start();
}
$username= $_SESSION['username'];
//establish connection
$connect=new mysqli("localhost","root","","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

$sql="SELECT *
FROM  `product` ";

$result=$connect->query($sql);

while($row=$result->fetch_assoc()) {

	$products[]=$row;





}

$sql="SELECT DISTINCT ProductID as productid,prodName
FROM  `product` where CategoryID=1";
$result1=$connect->query($sql);
while($row1=$result1->fetch_assoc()) {

$fruits[]=$row1;

}

$sql="SELECT DISTINCT ProductID as productid,prodName
FROM  `product` where CategoryID=2";
$result1=$connect->query($sql);
while($row1=$result1->fetch_assoc()) {

$flowers[]=$row1;

}

$sql="SELECT DISTINCT ProductID as productid,prodName
FROM  `product` where CategoryID=3";
$result1=$connect->query($sql);
while($row1=$result1->fetch_assoc()) {

$vegetables[]=$row1;

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
$sql="SELECT  orders.Date, orders.orderID, CONCAT( orders.Quantity,  ' ', product.prodName ) AS orderedItem, orders.price
FROM orders
JOIN product ON orders.PID = product.PID where userID='$username'";
$Oresult=$connect->query($sql);
while($row1=$Oresult->fetch_assoc()) {

$orders[]=$row1;
// print_r($orders);
// exit;

}
$sql="SELECT* FROM debit where buyerID='$username'";
$Dresult=$connect->query($sql);
while($row2=$Dresult->fetch_assoc()) {

$debits[]=$row2;

}
  ?>
