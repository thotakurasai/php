<html>
	<head>
		<title> My first Script</title>
	</head>
	<body>
		<?php 
			
			function math($a,$b)
			{
				$sum = $a + $b;
				echo "{$sum} <br />";
				$subtract = $a - $b;
				echo "{$subtract} <br />";
				$multiply = $a * $b;
				echo "{$multiply} <br />";
				$divide = $a / $b;
				echo "{$divide} <br />";
				return array($sum,$subtract,$multiply,$divide);
			}
			$arr = math(25,5);
			echo "sum:" .$arr[0];echo "<br />";
			echo "subtract:" .$arr[1];echo "<br />";
			echo "multiply:" .$arr[2];echo "<br />";
			echo "divide:" .$arr[3];echo "<br />";
		?>
	</body>
</html>