<?php
//=================CONNECTING TO DATABASE======================//
$hospital=mysqli_connect('localhost','root','','hospital');
if(mysqli_connect_error()){
  echo "Connection Failed".mysqli_connect_error();
}
else {
  echo "Connection Established<br>";
}
//=================CONNECTING TO DATABASE======================//

//=================RETREIVING DATA FROM REGISTRATION FORM================//
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phnumber=$_POST['phnumber'];

    $insert="INSERT INTO registration VALUES('$firstname','$lastname','$age','$email','$password','$phnumber')";
    if(mysqli_query($hospital, $insert)){
      echo "Registration Successful ";
    }
    else {
      echo "registration failed".mysqli_error($hospital);
    }
//=================RETREIVING DATA FROM REGISTRATION FORM================//

 ?>
