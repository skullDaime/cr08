<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "personal";
	
	// Create connection
	$con = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($con->connect_error) {
    	die("<br>Connection failed: " . $con->connect_error);
	}	
	else{
		//a base de dados foi conecta!
if (isset($_GET['q'])) {
//Search box value assigning to $Name variable.
   $Name = $_GET['q'];
	$Query = "INSERT INTO subscribe` (nome, email)  VALUES ('%$Name%', '%$email')";
}
	
//Search query.
//Creating unordered list to display result.
   		if($result = $con->query($Query)){
			
				echo("ok.");
		}
				
		else{
			
			echo("Não registrado");
			
		}
		}
?>