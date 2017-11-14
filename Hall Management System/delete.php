
<?php 
	//create database connection_aborted
	$connection = mysqli_connect("localhost","root","mizan","project");
	
	if(mysqli_connect_errno())
	{
		die("Database not connected: ". mysqli_connect_error(). (mysqli_connect_errno()));
	}

?>



<html>
	<head>
		<title>Delete</title>
	</head>
	
	<body>
		<h1 align="center">Delete Student's Information</h1><br/><br/>
			<?php
			
			$dlt = $_GET['id'];
				
			$query="delete from info where id={$dlt}";
			$result=mysqli_query($connection,$query);
			
			if($result)
			{
				echo "Delete successful"."<br/>";
			}
			else
				die("Delete failed. ".mysqli_error($connection));
					
			
			?>
			
	<h3><a href="http://localhost/site/view_all.php"><b>View Results</b></a><br/></h3>
	
	<br/>
	<a href="http://localhost/site/home.php"><h2 align = "center">Go to <b>Home</b> page</h2></a><br/><br/>
	


	</body>
	
</html>