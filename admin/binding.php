<?php 

 include '../Home/connection.php';
 //Retrieve Buyer Data to bind to admin 
//Buyer Transaction summaries
  $Bquery="SELECT orders.orderid, CONCAT( Fname,  ' ', Lname ) AS fullName, orders.Date, CONCAT( orders.Quantity,  ' ', product.prodName ) AS OrderedItem, orders.Total
FROM members
INNER JOIN orders ON Orders.userID = members.username
JOIN product ON orders.PID = product.PID";
//Retrieve Seller Data to bind to admin 
//Seller Transaction summaries
 $Squery="SELECT supply.supplyid, CONCAT( members.Fname,  ' ', members.Lname ) AS fullName, supply.SDate, CONCAT( supply.Quantity,  ' ',product.prodName ) AS SuppliedItem, supply.Total
FROM members
 JOIN supply ON supply.memberID = members.username join product on product.PID=supply.PID" ;
//Retrieve Pending supplies  to bind to admin 
//Pending supplies
$Pquery="SELECT supply.supplyid, CONCAT( members.Fname,  ' ', members.Lname ) AS fullName, supply.SDate, CONCAT( supply.Quantity,  ' ',product.prodName ) AS SuppliedProduct, supply.Total, supply.SDate, supply.County, supply.Location, supply.Landmark
FROM members
 JOIN supply ON supply.memberID = members.username join product on product.PID=supply.PID";
// Select   Users from Database and bind them to User Data table
$Uquery="SELECT username, CONCAT( Fname,  ' ', Lname ) AS fullName, mtype, email
FROM members";
// Total number of Registered Members
$Mresult = mysqli_query($connect, "SELECT * FROM members" );
$Mnum_rows = mysqli_num_rows($Mresult);


// Total Supplies
$Spresult = mysqli_query($connect, "SELECT * FROM supply" );
$Spnum_rows = mysqli_num_rows($Spresult);

// Total number of Registered Members
$Mnresult = mysqli_query($connect, "SELECT * FROM transaction" );
$Mnnum_rows = mysqli_num_rows($Mnresult);


// Retrieve transactions data 
$Tquery="SELECT TransID, DATE, Amount, transType, balance
FROM transaction ";
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
//Pending Supplies result
$Presult=mysqli_query($connect,$Pquery);

while($row=mysqli_fetch_assoc($Presult)){
 $supplies[]=$row;
}


// User Results
$Uresult=mysqli_query($connect,$Uquery);

while($row=mysqli_fetch_assoc($Uresult)){
 $Users[]=$row;
}
//Transaction results
$Tresult=mysqli_query($connect,$Tquery);
while($row=mysqli_fetch_assoc($Tresult)){
 $Trans[]=$row;
}
?>