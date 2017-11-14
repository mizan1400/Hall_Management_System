<html>
	<head>
		<title> Second page</title>
	</head>
	
	<body>
		<?php 
			print_r($_GET);
			echo "<br/>";
			//print_r($_GET['id']);
			$i=$_GET['id'];
			echo "{$i}<br/>";
			print_r($_GET['name']);
			
		
		?>
	
	</body>
	
</html>