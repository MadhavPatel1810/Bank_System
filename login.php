<html>
<body>
<?php
date_default_timezone_set("Asia/Kolkata");

$conn=new mysqli("localhost","root","","bank system");
$sql="SELECT * FROM register WHERE uid=$_POST[uid]";
if($result = $conn->query($sql)){
    if($result->num_rows > 0){
        echo "<table border='1px'>";
            while($row = $result->fetch_array()){
            if($row['pwd']==$_POST['pwd'])
			{
				echo "$row[name] <br>";
			 
				echo "login successfull on". date('d.m.Y')." ". date('h:i:sa')."<br>";
				echo "<a href='home.html'>go to home page</a>";
			}
			else
				
				{
					echo "<br>wrong password"; 
					echo "<br><a href='login.html'>back</a>";
				}	
        }

        $result->free();
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
$conn->close();
?>
</body>
</html>