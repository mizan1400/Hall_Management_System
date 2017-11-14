<?php 
	//create database connection_aborted
	$connection=mysqli_connect("localhost","root","mizan","project");
	
	if(mysqli_connect_errno())
	{
		die("Database not connected: ". mysqli_connect_error(). (mysqli_connect_errno()));
	}

?>


<html>
	<head>
		<title>Hall Management System</title>
	</head>
	
	<body>
	
		<h1 align="center">Hall Management System</h1><br/><br/>
		<h2><a href="http://localhost/site/view_all.php"><b>Student's Information</b></a><br/></h2>
		<h2><a href="http://localhost/site/insert.php"><b>Insert New Student</b></a><br/></h2>
		
		
		
	</body>
</html>

<?php 
	mysqli_close($connection);
?>