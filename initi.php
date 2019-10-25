<?php
	$host = "localhost";
	$database = "personal";
	$user = "root";
	$pass = "";
	
	$con = new mysqli($host,$user,$pass,$database);

	if($con->connect_error){
		die("Erro 1".$con->connect_error);
	}
	else{
		//BACKGROUNDO-COLOR
			$query = "SELECT value FROM cssconfig WHERE name LIKE 'background-color'";
			
			if($result= $con->query($query)){
				
				return $result;
				
			}
	}
?>