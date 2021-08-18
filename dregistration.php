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
$name=$_POST["name"];
$qualification=$_POST['qualification'];
$specialization=$_POST['specialization'];
$experience=$_POST['experience'];
// ================RETREIVING FORM DATA=======================//


//===================EXECUTING QUERY=========================//
$insert="insert into dregistration values('$name','$qualification','$specialization','$experience')";

if(mysqli_query($conn, $insert)){
  echo "doctor is invited";
}
else {
  echo "Values are not entered";
}

//===================EXECUTING QUERY=========================//


 ?>
