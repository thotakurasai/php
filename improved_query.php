<?php
	$host='localhost';
	$dbuser='root';
	$pass='';
	$dbname="student";
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
	if(mysqli_connect_errno())
	{
		die("connection Failed" .mysqli_connect_error());
	}
?>
<html>
		
	<body>
		<p> query the database </p>
		<?php
			$sql = "select * from student_info";
			$res = mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query failed");
			}
			while($row=mysqli_fetch_assoc($res))
			{
				foreach($row as $key=>$val)
				{
					echo ucfirst($key). ": {$val}<br />"; //camelcase implemented
				}
				echo "<br /><hr /><br />";
			}
			mysqli_free_result($res);
		?>
	</body>
</html>
<?php
	mysqli_close($conn);
?>