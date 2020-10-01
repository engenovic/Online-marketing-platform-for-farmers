<?php 
session_start();

$user= $_SESSION['username'];



//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}


 $date = date("Y-m-d");
//ment 2 days
$mod_date = strtotime($date."+ 2 days");
$delivery_date= date("Y-m-d",$mod_date);



$name=$_POST['name'];
$number=$_POST['number'];
$landmark=$_POST['landmark'];
$city=$_POST['city'];
$address=$_POST['address'];
// echo $name;
// echo $number;
// echo $landmark;
// echo $city;
// echo $address;
// exit;
$sql="INSERT INTO delivery (BuyerID,name,number,landmark,city,address) VALUES('$user','$name','$number','$landmark','$city','$address')";

$result=$connect->query($sql);

if($result) {
	echo "Successfully saved";
}else {
	echo $connect->error;
}

 ?>