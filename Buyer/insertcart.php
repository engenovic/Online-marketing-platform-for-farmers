<?php

$id=$_POST['id'];
$name=$_POST['name'];
$quantity=1;

$price=$_POST['price'];



$sql="INSERT INTO cart SET PID='$id', Name='$name',Quantity='$quantity',Price='$price' ON DUPLICATE KEY UPDATE Quantity=Quantity+1";




//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

//insert into database
$result=$connect->query($sql);

if($result)  {
echo "success";
  }else {
  	echo "failed";
  }?>
