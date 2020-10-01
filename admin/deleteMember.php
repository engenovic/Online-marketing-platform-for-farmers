<?php
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}


$id=$_POST['id'];

$sql="DELETE FROM cart where cartID='$id'";

$result=$connect->query($sql);

if($result) {
	echo 1;
}else {
	echo "Error Removing Item";
}


 ?>