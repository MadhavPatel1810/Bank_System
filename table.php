<?php

$servername="localhost";
$username="root";
$password="";
$dbname="final";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "connection failed";
echo "connection successfull";

$sql="CREATE DATABASE final";

$sql="CREATE TABLE data(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT
CURRENT_TIMESTAMP ON UPDATE
CURRENT_TIMESTAMP
)";
$conn->query($sql);
$conn->close();
?>