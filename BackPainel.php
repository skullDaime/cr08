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
		if(isset($_GET['h'])){
			$a = $_GET['h'];
			$query = "UPDATE cssconfig SET value='\#$a' WHERE name= 'background-color'";
			
			if($result= $con->query($query)){
				
				echo($a);
			}
			else{
				die("erro 2");
			}
		//TEXT COLOR	
		}
		if(isset($_GET['g'])){
			$a = $_GET['g'];
			$query = "UPDATE cssconfig SET value='\#$a' WHERE name= 'fontcolor'";
			
			if($result= $con->query($query)){
				
				echo($a);
			}
			else{
				die("erro 3");
			}
			
		}
		
	}

?>