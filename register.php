<html>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$D=date("d/m/Y");
$T=date("h:i:sa");
				
$servername="localhost";
$username="root";
$password="";
$dbname="bank system";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
	echo "error";
$n=$_POST["un"];
$g=$_POST["Gender"];
$d=$_POST["birthday"];
$i=$_POST["uid"];
$p=$_POST["pwd"];
$c=$_POST["cpwd"];
$bal=2500;
$sql="INSERT INTO register(name,gender,birthday,uid,pwd,cpwd) 
VALUES('$n','$g','$d','$i','$p','$c')";
$conn->query($sql);
echo "registration successfull";
echo "<a href='login.html'>go to Login</a>";

$conn->close();
?>
</body>
</html>