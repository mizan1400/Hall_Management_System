<?php
	session_start();

?>
<?php 
	//create database connection_aborted
	$connection = mysqli_connect("localhost","root","mizan","project");
	
	if(mysqli_connect_errno())
	{
		die("Database not connected: ". mysqli_connect_error(). (mysqli_connect_errno()));
	}

?>


<?php
		//function insert start
		 $print=null;
		 $dlt = $_GET['id'];
	function update($dlt,$name,$dept,$room)
	{
		global $connection;
		global $print;
		$query="update info set Name='{$name}', dept='{$dept}', room= {$room} where id={$dlt}";
		$result=mysqli_query($connection,$query);
		
		if($result)
		{
			$print= "Update Successful for id: {$dlt}  name: {$name}  dept: {$dept}  room: {$room}." . "<br/>";
			$print .= "You can update here again." . "<br/>" . "<br/>";
		}
		else
		{
			die("Update failed. ".mysqli_error($connection));
			echo "Update here again correctly." . "<br/>" . "<br/>";
		}
	
	}
//function insert end
?>


<?php 
	
	
	if(isset($_POST['submit']))
	{
			$id=$dlt;
			$name=$_POST["name"];
			$dept=$_POST['dept'];
			$room=$_POST['room'];
			$submit=$_POST['submit'];
			update($dlt,$name,$dept,$room);
			
	}

?>



<html>
	<head>
		<title>Update</title>
	</head>
	
	<body>
		<h1 align="center">Update Student's Information</h1><br/><br/>
		
		
		
		<form action="update.php?id=<?php echo $dlt;?>" method="post">
			<!--ID   : <input type="text" name="id" value="<>"><br/><br/>-->
			Name : <input type="text" name="name" value=""><br/><br/>
			Dept.: <input type="text" name="dept" value=""><br/><br/>
			Room : <input type="text" name="room" value=""><br/><br/>
			<input type="submit" name="submit" value="Update"><br/><br/>
		
		</form>
	
	<?php
		if($print!=null){
			echo $print;
			$print=null;
			}
	
	?>
		
	<h3><a href="http://localhost/site/view_all.php"><b>View Results</b></a><br/></h3>

	<br/>
	<a href="http://localhost/site/home.php"><h2 align = "center">Go to <b>Home</b> page</h2></a><br/><br/>
	


	</body>
	
</html>