<?php require_once 'authController.php'; 
if(!isset($_SESSION['id'])){
	header('location: login.php');
	exit();
}

/*function getPosts()
{
	$posts = array();
	$posts[0] = $_POST['id'];
	$posts[1] = $_POST['username'];
	$posts[2] = $_POST['email'];
	return $posts;
	
}

if(isset($_POST['search']))
{
	$data = getPosts();
	
	$searchQuery = "select * from users where id=data[0]";
	
	$search_Result = mysqli_query($connect, $search_query);
	
	if($search_Result)
	{
		if(mysqli_num_rows($search_Result))
		{
			while($row = mysqli_fetch_array($search_Results))
			{
				$id = $row['id'];
				$username = $row['username'];
				$email = $row['email'];
			}
		}else{
			echo "No data for this ID";
		}
		}else{
			echo "result error";
	}
}*/
?>


<html lang="en">
	<head>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

		
		<title>Homepage</title>
	</head>
	
	<body>
		<!--<form action="homepage.php" method="post">
			<input type="number" name="id" placeholder="id" value="<?php echo $user_id; ?>"><br><br>
			<input type="number" name="username" placeholder="username" value="<?php echo $username; ?>"><br><br>
			<input type="number" name="email" placeholder="email" value="<?php echo $email; ?>"><br><br>
			<div>
				<input type="submit" name="update" value="Add">
				<input type="submit" name="delete" value="Delete">
				<input type="submit" name="search" value="Find">
			</div>
		</form>-->
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4 form-div login">
					
					<?php if(isset($_SESSION['message'])): ?>
					
						<div class="alert <?php echo $_SESSION['alert-class']; ?> ">
							<?php echo ($_SESSION['message']);
								unset($_SESSION['message']);
								unset($_SESSION['alert-class']);
							?>
						</div>
					<?php endif; ?>
					
					<h3> welcome <?php echo $_SESSION['username']; ?> </h3>
					
					<a href="homepage.php?logout=1" class="logout">logout</a>
					
					<?php if(!$_SESSION['verified']): ?>
						<div class="alert alert-warning">
							you need to verify your account.
							signin to your email and click on
							verification link mailed to you.
							<strong><?php echo $_SESSION['email']; ?></strong>
						</div>
					<?php endif; ?>
					<?php if($_SESSION['verified']): ?>
						<button class="btn btn-block btn-lg btn-primary">I am verified!</button>
					<?php endif; ?>
				</div>
			</div>
		</div>
		
	</body>
</html>
