<html>
	<head>
		<title> Firts page</title>
	</head>
	
	<body>
	
		<?php 
			$username=$_POST['name'];
			$passward=$_POST['passward'];
			$sub=$_POST['sub'];
			
			if($username=="root"&&$passward=="mizan")
				echo "{$username}: {$passward} is correct."; 
			else
				echo "wrong input";
				
		
			 
		?>

	</body>
	
</html>