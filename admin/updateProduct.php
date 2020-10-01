 <?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: ../feedback/denyAccess.php?error=You must login as a buyer!! ");
}
$username=$_SESSION['username'];
require 'connection.php';
$submit=$_POST['submit'];
if(isset($submit))      
{
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$county=$_POST['county'];
 $delProd= " DELETE FROM product WHERE PID="$PID"";
$upProduct = "UPDATE  product SET password="$password", Fname="$Fname", Lname="$Lname",phone="$phone",county="$county", email="$email"" WHERE username="$username";
if(mysqli_query($connect, $sql)){
  header("refresh: Location: ../feedback/regSuccess.php?success=Successfully Registered");
} else{
  header("refresh:Location: ../feedback/regFailed.php?error=Failed to register");
}
}
else 
{    
 header("Location: index.php?error=Please check your input!");
}
// close connection
mysqli_close($connect);
?>