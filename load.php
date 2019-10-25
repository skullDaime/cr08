<?php

	
function get_bgcolor(){
	$host = "localhost";
	$database = "personal";
	$user = "root";
	$pass = "";
	
	$con = new mysqli($host,$user,$pass,$database);

	if($con->connect_error){
		die("Erro 1".$con->connect_error);
	}
	else{
		
		$Query = "SELECT value FROM cssconfig WHERE name= 'background-color'";
		
		if($result = $con->query($Query)){
			
			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()) {
					echo($row["value"]);
				}
			}
			else{
				
				echo("erro 1");
			}
		}
		else{
			echo("erro 2");
			
		}
	}
}

function get_txtcolor(){
	$host = "localhost";
	$database = "personal";
	$user = "root";
	$pass = "";
	
	$con = new mysqli($host,$user,$pass,$database);

	if($con->connect_error){
		die("Erro 1".$con->connect_error);
	}
	else{
		
		$Query = "SELECT value FROM cssconfig WHERE name= 'fontcolor'";
		
		if($result = $con->query($Query)){
			
			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()) {
					echo($row["value"]);
				}
			}
			else{
				
				echo("erro 1");
			}
		}
		else{
			echo("erro 2");
			
		}
	}
}
?>