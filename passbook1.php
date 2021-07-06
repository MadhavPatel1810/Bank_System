<html>
	<body>
		<?php
		$b=$_POST['adhar'];
			$conn=new mysqli("localhost","root","","bank system");
			$sql="SELECT * FROM passbook1";
echo "<table border='1'><tr>
				<td>adhar</td>
				<td>amount</td>
				<td>mode</td>
				<td>after transaction</td>
				<td>date</td>
				<td>time</td>
			</tr>
";
if($result=$conn->query($sql))
{
	if($result->num_rows>0)
	{
		while($row=$result->fetch_array())
		{

			if($row['adhar']==$b)
			{
				$w=$row['adhar'];
				$x=$row['amount'];
				$y=$row['mode'];
				$z=$row['final'];
				$p=$row['dates'];
				$q=$row['times'];
				
				
				echo "<tr><td>'$w'</td>
						  <td>'$x'</td>
						  <td>'$y'</td>
						  <td>'$z'</td>
						  <td>'$p'</td>
						  <td>'$q'</td>
						  </tr>";
			}
		}
	}
}
echo "</table>";
echo "<a href='home.html'>go to home page</a>";

		?>
		
	</body>

</html>