<?php
	$host='localhost';
	$dbuser='root';
	$pass='Ravalisai@9';
	$dbname="student";
	$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
	if(mysqli_connect_errno())
	{
		die("connection Failed" .mysqli_connect_error());
	}
	else
	{
		echo "Connection Established";
	}
?>
<html>
		
	<body>
		
	</body>
</html>
<?php
	mysqli_close($conn);
?>