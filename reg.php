<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Database Connection</title>
  </head>
  <body>
    <h2>Checking Database Connectivity</h2>
    <?php
//  =======ESTABLISHING CONNECTION WITH DATABSE=============//
    $host='localhost';
    $user='root';
    $password='';
    $database='Hospital';

    $conn = mysqli_connect($host,$user,$password,$database);
//  =======ESTABLISHING CONNECTION WITH DATABSE=============//

//  =======cONFIRMING DATABASE CONNECTIVITY================//
    if(mysqli_connect_error()){
      die('Connection Failed'.mysqli_connect_error());
    }
    echo 'Connection Established....:)<br>';
//  =======cONFIRMING DATABASE CONNECTIVITY================//

// ==================CREATE DATABSES========================//
  $db='CREATE DATABASE Hospital';
  if(mysqli_query($conn, $db)){
    echo 'Database created Sucessfully';
  }
  else{
    echo 'Error creating databse'.mysqli_error($conn).'<br>';
  }
// ==================CREATE DATABSES========================//

//===================CREATE TABLE =========================//
    $table='CREATE TABLE registration(
      firstname varchar(15),
      lastname varchar(15),
      age INTEGER,
      email varchar(30),
      password varchar(20))';

    if(mysqli_query($conn, $table)){
      echo 'table created Successfully<br>';
    }
    else {
      echo "Error creating Table".mysqli_error($conn).'<br>';
    }
//===================CREATE TABLE =========================//



//  =======Closing DataBase Connection===================//
    mysqli_close($conn);
    echo "Connection closed Successfully";
//  =======Closing DataBase Connection===================//

     ?>
  </body>
</html>
