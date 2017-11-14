<?php
	if(isset($_POST["submit"]))
	{
		echo "submitted";
	}
	else
	{
		echo "Log In";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>First page</title>
	</head>
	<body>
		<form action="first_page.php" method="post">
			Username:<input type="text" name="username" value=""/><br/>
			Password:<input type="password" name="password" value=""/><br/>
			<input type="submit" name="submit" value="Click me!!!"/>
		</form>
	</body>
</html>