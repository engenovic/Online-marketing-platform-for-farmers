<?php
session_start();

$username=$_SESSION['username']; 

require '../Home/connection.php';
$submit=$_POST['submit'];
if(isset($submit))      
{
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$county=$_POST['county']; 
$username=$_POST['session'];

//echo $email. "".$phone." ".$password." ".$Fname. " ".$Lname. " ".$county;


$sql = "UPDATE  members SET password='$password', Fname='$Fname', Lname='$Lname',phone='$phone',county='$county', email='$email' WHERE username='$username'";

$result=$connect->query($sql);
if($result){
	
  header("Location: updateProfile.php?success=Successfully Updated");
} else{
  header("Location: updateProfile.php?error=Failed to update");
}

}
else 
{    
 header("Location: updateProfile.php?error=Please check your input!");
}
// close connection

?>