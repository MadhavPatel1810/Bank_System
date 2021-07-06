<?php

$servername="localhost";
$username="root";
$password="";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error)
	echo "connection failed";
echo "connection successfull";

$sql="CREATE DATABASE b";

if($conn->query($sql)===TRUE)
	echo "db created";
else
	echo "db failed:::".$conn->error;



$conn->close();
?>