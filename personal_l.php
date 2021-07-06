<html>
<body>
<?php
$a=$_POST['fname'];
$b=$_POST['Lname'];
$c=$_POST['Gender'];
$d=$_POST['birthday'];
$e=$_POST['Ano'];
$f=$_POST['Pno'];
$g=$_POST['add'];
$h=$_POST['pc'];
$i=$_POST['City'];
$j=$_POST['State'];
$k=$_POST['mno'];
$l=$_POST['email'];
$p=$_POST['AL'];
$n=$_POST['TD'];
$conn=new mysqli("localhost","root","","bank system");
$sql="INSERT INTO personal_l(fname,lname,gender,dob,adhar,pan,address,pincode,city,state,mnum,email) 
VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$conn->query($sql);
echo "loan approved with 2% interest   ";
echo $p*$n*2/100;
echo "  rupees of ";
echo $n;
echo " year/years";
$conn->close();
?>
</body>

</html>