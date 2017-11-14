<!DOCTYPE html>
<html>
	<head>
		<title>First page</title>
	</head>
	<body>
		<?php
			$username = $_POST["username"];
			$password = $_POST["password"];
			if($password == "secret")
			{
				echo "Login successful Mr. ". $username ."<br/>";
			}
			else
			{
				echo "Enter correct password.<br/>";
			}
		?>
	</body>
</html>