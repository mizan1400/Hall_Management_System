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
		<title>Hall Management</title>
	</head>
	
	<body>
	
		<h1 align="center">Hall Management</h1><br/><br/>
		<a href="http://localhost/site/view_all.php"><b>View all</b></a><br/>
		<a href="http://localhost/site/insert.php"><b>Insert</b></a><br/>
		<a href=""><b>Update</b></a><br/>
		<a href=""><b>Delete</b></a><br/>
		
		
	</body>
</html>

<?php 
	mysqli_close($connection);
?>