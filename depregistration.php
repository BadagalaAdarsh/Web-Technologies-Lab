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
$id=$_POST["id"];
$name=$_POST['name'];
$blockname=$_POST['block_name'];
// ================RETREIVING FORM DATA=======================//


//===================EXECUTING QUERY=========================//
$insert="insert into depregistration values('$id','$name','$blockname')";

if(mysqli_query($conn, $insert)){
  echo "New Department is Arrived";
}
else {
  echo "Values are not entered";
}

//===================EXECUTING QUERY=========================//


 ?>
