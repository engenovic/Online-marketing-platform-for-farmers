<?php

include '../Home/connection.php';
$user=$_POST['userid'];
$sql="DELETE FROM members where username='$user'";

$result=$connect->query($sql);

if($result) {

echo "Successfully Deleted";
}
  ?>
