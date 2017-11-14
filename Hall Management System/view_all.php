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
		<title>View all</title>
	</head>
	
	<body>
		<h1 align="center">Student's Information</h1><br/><br/>
		<?php 
			//function select_all($connection) start	
			function select_all($connection){
			$query="select * from info";
			$result= mysqli_query($connection,$query);
			if(!$result)
				die("database queri field.");
		?>
		<table border="1" style="width:80%" align= "center">
			<th style="width:15%">ID</td>
			<th style="width:15%">Name</td>
			<th style="width:15%">Dept</td>
			<th style="width:15%">Room</td>
			<th style="width:15%">Update</td>
			<th style="width:15%">Delete</td>
		
		</table>
		<?php 
		
	
				
			while($row=mysqli_fetch_assoc($result))
			{
			
				$dd = $row["id"];
			?>
			
			<table border="1" style="width:80%" align= "center">
				<tr>
				
					<td style="width:15%"><?php echo $row["id"]   ?></td>
					<td style="width:15%"><?php echo $row["Name"] ?></td>
					<td style="width:15%"><?php echo $row["Dept"] ?></td>
					<td style="width:15%"><?php echo $row["Room"] ?></td>
					<td style="width:15%"><a href="update.php?id=<?php  echo $dd; ?>" ><b>Update</b></a></td>
					<td style="width:15%"><a href="delete.php?id=<?php  echo $dd; ?>" ><b>Delete</b></a></td><br/>
				
				
				</tr>
			</table>
			
				
				
		<?php
				
			}
		}
			//function select_all($connection) end

		select_all($connection);	
		?>
	<br/>
	<a href="http://localhost/site/home.php"><h2 align = "center">Go to <b>Home</b> page</h2></a><br/><br/>

	</body>
	
</html>