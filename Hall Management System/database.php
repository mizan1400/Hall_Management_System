<?php 
	//create database connection_aborted
	$connection=mysqli_connect("localhost","root","mizan","project");
	
	if(mysqli_connect_errno())
	{
		die("Database not connected: ". mysqli_connect_error(). (mysqli_connect_errno()));
	}

?>



<?php 
	//function select_all($connection) start	
		function select_all($connection){
			$query="select * from info";
			$result= mysqli_query($connection,$query);
			if(!$result)
				die("database queri field.");

				
			while($row=mysqli_fetch_assoc($result))
			{
				echo $row["id"]."	";
				echo $row["Name"]."	";
				echo $row["Taka"]."	";
				echo "<hr/>";
				
			}
		}
//function select_all($connection) end			
?>

<?php
	//function insert start
	function insert($connection,$id,$name,$taka){
	$query="insert into info values ($id,'$name',$taka)";
	$result=mysqli_query($connection,$query);
			
	if($result)
	{
		echo "Insertion successful"."<br/>";
	}
	else
	die("Insertion failed. ".mysqli_error($connection));
	//function insert end
	}
?>

<?php
	//function update start
	function update($connection,$name,$taka,$id){
	$query="update info set Name='{$name}', taka=$taka where id=$id";
	$result=mysqli_query($connection,$query);
			
	if($result)
	{
		echo "Update successful"."<br/>";
	}
	else
	die("Update failed. ".mysqli_error($connection));
	//function update end
	}
?>

<?php
	//function delete start
	function delete($connection,$id){
	$query="delete from info where id={$id}";
	$result=mysqli_query($connection,$query);
			
	if($result)
	{
		echo "Delete successful"."<br/>";
	}
	else
	die("Delete failed. ".mysqli_error($connection));
	//function update end
	}
?>

		

<html>
	<head>
		<title>Database</title>
	</head>
	
	<body>
		<h1 align="center">Hall Management</h1><br/>
		
	
		
		<?php 
			$id=10;
			$name="Sajal";
			$taka=420;
			insert($connection,$id,$name,$taka);
			//update($connection,$name,$taka,$id);
			//delete($connection,$id);
			select_all($connection);
			//mysqli_free_result($result);
		?>
		
	
	</body>
</html>

<?php 
	mysqli_close($connection);
?>