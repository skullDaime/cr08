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
	$Query = "SELECT * FROM post WHERE title LIKE '%$Name%' OR text LIKE '%$Name%' OR date LIKE '%$Name' ORDER BY date DESC";
}
	
	else{
		$Query = "SELECT * FROM post ORDER BY date DESC LIMIT 5";
	}

//Search query.
//Creating unordered list to display result.
   		if($result = $con->query($Query)){
			
			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()) {
			echo("<br>");
			echo("<div class=\"post\">");
			echo("<h1>".$row["title"]."</h1>");
			echo("<a href=\"post.php?t=".$row['id']."\">LER MAIS</a>");
			echo("<p>".$row["text"]."</p>");
			echo("<p><right><b>Data de Publicação:</b> ".$row["date"]."</b></right></p>");
			echo("<img width=\"200\"  src=\".\imgs\\".$row["thum"]."\"></div>");
			echo("<br>");			
			echo("</div>");
		}
		}
				
		else{
			
			echo("Nenhum resultado encontrado");
			
		}
		}}
?>