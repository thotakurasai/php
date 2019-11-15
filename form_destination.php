<html>
	<head>
		<title> My first Script</title>
	</head>
	<body>
		<?php
		if(isset($_POST['submit']))
		{
			echo "Name: {$_POST['name']} <br />";
			echo "Age: {$_POST['age']} <br />";
			echo "Gender: {$_POST['gender']} <br />";
			echo "Email: {$_POST['email']} <br />";
			if (strlen($_POST['name'])<4)
			{
				echo "username too short";
			}
			elseif(!is_numeric($_POST['age']))
			{
				echo "only digits are allowed in age field";
			}
			elseif(empty($_POST['email']))
			{
				echo "pls provide valid email address";
			}
			else{
				echo "you logged in  successfully";
			}
		}
		else
		{
			echo "form not submitted";
		}
		
		?>
	</body>
</html>