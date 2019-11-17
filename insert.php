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
			$sql = "insert into student_info(name,dob)".
					"values('suhas', '1998/09/08'),".
					"('ajay', '1998/09/06')";
			$res = mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query failed");
			}
			else
			{
				echo "created succesfully";
			}
		?>
	</body>
</html>
<?php
	mysqli_close($conn);
?>