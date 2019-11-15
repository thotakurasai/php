<html>
	<head>
		<title> Source Script</title>
	</head>
	<body>
		<?php 
			
			$name = "John";
			$age = "22";
			$rank = "23";
			$str = "name={$name}&age={$age}&rank={$rank}";
		?>
		<a href="destination.php?<?php echo $str; ?> ">
		Destination</a>
	</body>
</html>