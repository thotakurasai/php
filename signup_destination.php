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
	<head>
		<title>Signup Page</title>
	</head>
		
	<body>
		<?php
		if(isset($_POST['submit']))
		{
			
			$first = $_POST['first_name'];
			$last = $_POST['last_name'];
			$email = $_POST['email'];
			$year = $_POST['year'];
			$month = $_POST['month'];
			$day = $_POST['day'];
			$gender = $_POST['gender'];
			$pass = $_POST['pass'];
			$repass = $_POST['repass'];
			$dob = $year.'/'.$month.'/'.$day;
			$name = $first.' '.$last;
				if(empty($first)||empty($last)||empty($email)||empty($year)||empty($month)||empty($day)||empty($gender)||empty($pass)||empty($repass))
				{
					echo "can't leave this field empty";
				}
				elseif($pass!=$repass){
					echo "password's Didn't Match";
					
				}
				else{
					$sql = "insert into sign_up(first,last,email,dob,gender,pass)".
						"values('$first', '$last','$email','$dob','$gender','$pass')";
					$res = mysqli_query($conn,$sql);
					if(!$res)
					{
						die("query failed");
					}
					else
					{
						echo "Data Inserted succesfully";
						"<br /> ";
						
						$sql = "select * from sign_up";
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
					}
				}
		}
		else
		{
			echo "form not submitted";
		}
		
		?>
	</body>
</html>
<?php
	mysqli_close($conn);
?>
