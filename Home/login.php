<?php
// starting the session
session_start();
// Import the connection details from connection.php
require 'connection.php';
// Checking if login button was clikcked
// ensures the php script is only executed on click on the submit button

if(isset($_POST['submit']))
  {

	    $username=$_POST['username'];
		$password=$_POST['password'];
		$userType=$_POST['userType'];
//pick login details from the form
if(($username=="Admin")&&($password=="Brivic12")){
	$_SESSION['Admin']=$username;
	header("Location: ../admin/index.php");
}
else{
	$sql="select * FROM members where username ='$username' AND password ='$password' AND mtype ='$userType'";
	$results= mysqli_query($connect, $sql); // Executes the query
		$rows=mysqli_num_rows($results);// checks the number of rows with matching records
	// confirms if there was a row found meaning a matching record exists
	if ($rows==1)
	{
		$_SESSION['username']=$username; // Store the Username number inside a session
		if($userType=="Buyer") {
		header("Location: ../Buyer/index.php");
		}else if($userType=="Seller"){
			header("Location: ../Seller/account.php");
		}
		else
		header("Location: index.php?error=You must select Buyer or Seller");
				 }
			 else

			 {
				header("Location: index.php?error=Invalid login Credentials or Account Problem");
			 }
		}
		}
?>
