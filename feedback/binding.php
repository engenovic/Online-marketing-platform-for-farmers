<?php 

 include '../Home/connection.php';
 //Retrieve Buyer Data to bind to admin 
//Buyer Transaction summaries
  $Bquery="SELECT orders.orderid, CONCAT( Fname,  ' ', Lname ) AS fullName, orders.Date, CONCAT( Quantity,  ' ', item ) AS OrderedItem, orders.Total, orders.Status
FROM members
INNER JOIN orders ON Orders.userID = members.username";
//Retrieve Seller Data to bind to admin 
//Seller Transaction summaries
 $Squery="SELECT supply.supplyid, CONCAT( Fname,  ' ', Lname ) AS fullName, supply.SDate, CONCAT( Quantity,  ' ', pname ) AS SuppliedItem, supply.Total, supply.Status
FROM members
INNER JOIN supply ON supply.memberID = members.username";
//Retrieve Pending supplies  to bind to admin 
//Pending supplies
$Squery="SELECT supply.supplyid, CONCAT( Fname,  ' ', Lname ) AS fullName, supply.SDate, CONCAT( Quantity,  ' ', pname ) AS SuppliedItem, supply.Total, supply.Status
FROM members
INNER JOIN supply ON supply.memberID = members.username";
 //Buyer result
  $Bresult=mysqli_query($connect,$Bquery);
  while($row=mysqli_fetch_assoc($Bresult)){
   $buyers[]=$row;
  }
// Seller result
$Sresult=mysqli_query($connect,$Squery);
while($row=mysqli_fetch_assoc($Sresult)){
 $sellers[]=$row;
} 
/**Pending Supplies result
$Presult=mysqli_query($connect,$Pquery);
while($row=mysqli_fetch_assoc($Presult)){
 $supplies[]=$row;
}*/
?>