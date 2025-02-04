<html> 

<head> 
	<style> 
		body { 
			background-color: #f2f2f2; 
			font-family: Arial, sans-serif; 
		} 
		
		h1 { 
			color: #008000; 
			font-size: 2.5em; 
			text-align: center; 
			margin-top: 50px; 
		} 
		
		p { 
			color: #333; 
			font-size: 1.2em; 
			text-align: center; 
			margin-top: 20px; 
		} 
		
		
	</style> 
</head> 

<body>
<?php 

	session_start(); 


	if (isset($_SESSION['user'])) { 
		$user = $_SESSION['user']; 
		$customerName = $user['name']; 
	} else { 
		$customerName = "Valued Customer"; 
	} 


	echo "<h1>Thank You, $customerName!</h1>"; 
	echo"<p>Your order has been received and will be delivered soon.</p>";
    echo"<center><img src='https://media.tenor.com/images/b0e44363b5ca79c8238c959ec557e8d8/tenor.gif/'/></center>"							 
	?>

</body>
</html>
