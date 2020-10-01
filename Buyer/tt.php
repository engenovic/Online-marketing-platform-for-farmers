<?php
$connect=new mysqli("localhost","root","Ngeno12.N","ONMARK");

if($connect->connect_error){
	echo "error:{$con->connect_error}";
}
$sql="SELECT  * from product WHERE PID=4  ";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_array($result))
{
  $avail= $row['Quantity'];
  if(4>$avail){
  	echo "Order Fail. Insufficient Quantity of the Type!";
  	exit;
  }
  else{
  	$sql="UPDATE product SET Quantity=Quantity-1 Where PID=4";

			$result=$connect->query($sql);

			if($result) {
				//echo "Successs updated";
			}else {
			echo $connect->error;
			exit;
			}
  }
}

mysqli_close($connect);
?>