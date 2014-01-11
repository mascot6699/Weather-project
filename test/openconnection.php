<?php
// Create connection
//format is mysqli_connect(host,username,password,dbname);
$con=mysqli_connect("localhost","root","umang","csvtest");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: \n" . mysqli_connect_error();
  //close connection if errors
  mysqli_close($con);
  }
  else
  {
    echo "no errors\n";
  }
  
  
  //All query can be written in the command using syntax ==> mysqli_query(CONNECTION_NAME,QUERY)
  //create database
  $sql="CREATE DATABASE sample";
if (mysqli_query($con,$sql))
  {
  echo "Database sample created successfully\n";
  }
else
  {
  echo "Error creating database: \n " . mysqli_error($con);
  }
  
  // Create table
$sql="CREATE TABLE test 
(
A INT NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(A),
B INT,
C INT,
D INT
)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table test created successfully\n";
  }
else
  {
  echo "Error creating table: \n" . mysqli_error($con);
  }
  
  
  //Insertion of data
if(mysqli_query($con,"INSERT INTO test (A,B,C,D) VALUES (101,2,3,4)")){echo "success\n";}else{echo "failed 1\n";}
if(mysqli_query($con,"INSERT INTO test (A,B,C,D) VALUES (101,2,3,4)")){echo "success\n";}else{echo "failed 2\n";}
if(mysqli_query($con,"INSERT INTO test (A,B,C,D) VALUES (102,2,3,4)")){echo "success\n";}else{echo "failed 3\n";}

?>