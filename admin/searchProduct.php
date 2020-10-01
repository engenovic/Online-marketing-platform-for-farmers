<?php 

 include '../Home/connection.php';
 $Squery="SELECT supply.supplyid, CONCAT( members.Fname,  ' ', members.Lname ) AS fullName, supply.SDate, CONCAT( supply.Quantity,  ' ',product.prodName ) AS SuppliedItem, supply.Total, supply.Status
FROM members
 JOIN supply ON supply.memberID = members.username join product on product.PID=supply.PID" ;
 
// Seller result
$Sresult=mysqli_query($connect,$Squery);

while($row=mysqli_fetch_assoc($Sresult)){
 $sellers[]=$row;

} 

?>