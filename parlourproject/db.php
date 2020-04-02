<?php
$servername ="localhost";//"localhost:8080"
$username="root";
$password="";

$conn =mysqli_connect($servername,$username,$password);

if(!$conn){
  die("connection failed<br>".mysqli_connect_error());
}
else {
  echo "connected<br>";
}


$sql="CREATE DATABASE parlourproject";
if(mysqli_query($conn,$sql)){
  echo "db created<br>";
}
else{
  echo "not created<br>".mysqli_error($conn)."<br>";
}


$conn =mysqli_connect($servername,$username,$password,"parlourproject");

if(!$conn){
  die("connection failed<br>".mysqli_connect_error());
}
else {
  echo "connected<br>";
}



$sqltable="CREATE TABLE userdata(
id INT(6) PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
address VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL,
age INT(20)) ";

if(mysqli_query($conn,$sqltable)){
  echo "TABLE created<br>";
}
else{
  echo "TABLE not created<br>".mysqli_error($conn);
}









$sqltab="CREATE TABLE orders(
id INT(6),
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
tel INT(10) NOT NULL,
address VARCHAR(50) NOT NULL
)";

if(mysqli_query($conn,$sqltab)){
  echo "TABLE created<br>";
}
else{
  echo "TABLE not created<br>".mysqli_error($conn);
}





$sqlart="CREATE TABLE artist(
artistid INT(50),
name TEXT(50) NOT NULL,
address TEXT(50) NOT NULL,
telephone INT(10) NOT NULL
)";

if(mysqli_query($conn,$sqlart)){
  echo "TABLE created<br>";
}
else{
  echo "TABLE not created<br>".mysqli_error($conn);
}



mysqli_close($conn);
?>
