<html>
	<head>
		<title> Firts page</title>
	</head>
	
	<body>
	
		<?php 
			$username=$_POST['name'];
			$passward=$_POST['passward'];
			$sub=$_POST['sub'];
			
			if($username=="mizan"&&$passward=="1234")
				echo "{$username}: {$passward} is correct."; 
			else
				echo "wrong input";
				echo "<br/>{$sub}";
		
			 
		?>

	</body>
	
</html>