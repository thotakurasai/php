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
			$sql = "update student_info ".
					"set name='chaitanya', dob='1998/02/02' ".
					"where id=3";
			$res = mysqli_query($conn,$sql);
			if(!$res)
			{
				die("query failed");
			}
			else
			{
				echo "updated succesfully";
			}
		?>
	</body>
</html>
<?php
	mysqli_close($conn);
?>