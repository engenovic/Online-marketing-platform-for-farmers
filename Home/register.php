<?php
session_start();
require 'connection.php';
$submit=$_POST['submit'];
if(isset($submit)) 		
{
$username=$_POST['username'];
$password=$_POST['password'];
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$phone=$_POST['phone'];
$county=$_POST['county'];
$userType=$_POST['userType'];
$email=$_POST['email'];
// echo $username. $password;
// exit;
$sql = "INSERT INTO members(username,password,Fname,Lname,phone,county,mtype,email) VALUES ('$username','$password','$fName','$lName','$phone','$county','$userType','$email')";
if(mysqli_query($connect, $sql)){
  header("Location: ../feedback/regSuccess.php?success=Successfully Registered");
} else{
  header("Location: ../feedback/regFailed.php?error=Failed to register");
}
}
else 
{	 
 header("Location: index.php?error=Please check your input!");
}
// close connection
mysqli_close($connect);
?>