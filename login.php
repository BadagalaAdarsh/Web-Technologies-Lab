<?php

//=================CONNECTING TO DATABASE======================//
$conn=mysqli_connect("localhost","root","","hospital");

if(mysqli_connect_error()){
  die("connection failed".mysqli_connect_error()."<br>");
}
else{
  echo "Connection established<br>";
}
//=================CONNECTING TO DATABASE======================//

// ================RETREIVING FORM DATA=======================//
$user=$_POST["username"];

// ================RETREIVING FORM DATA=======================//


//===================EXECUTING QUERY=========================//
$select="Select * from registration where email='".$user."'";

$result=mysqli_query($conn, $select);

$row = mysqli_fetch_assoc($result);

$pass=$row["password"];
//===================EXECUTING QUERY=========================//


//====================AUTHENTICATION=========================//
if ($_POST["password"]==$pass) {
  echo "User authenticated Successfully<br>";
  echo "Welcome ".$row["firstname"];
}
else {
  echo "User not found";
}
//====================AUTHENTICATION=========================//

 ?>
