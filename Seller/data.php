<?php 

$sql="SELECT * FROM PRODUCT";


//establish connection
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}

$result=$connect->query($sql);

while($row=$result->fetch_assoc()) {
	$products[]=$row;
}

echo json_encode($products);

 ?>