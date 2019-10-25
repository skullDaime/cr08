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
if (isset($_GET['t'])) {
//Search box value assigning to $Name variable.
   $Name = $_GET['t'];
	$Query = "SELECT * FROM post WHERE id LIKE '%$Name%'";
}
	
	else{
		$Query = "SELECT * FROM post ORDER BY date DESC LIMIT 5";
	}

//Search query.
//Creating unordered list to display result.
   		if($result = $con->query($Query)){
			
			if($result->num_rows > 0){

			while($row = $result->fetch_assoc()) {
			echo("<div onclick=\"window.location.href='post.php?t=".$row['id']."\">");
			echo("<h1>".$row["title"]."</h1>");
			echo("<p>".$row["text"]."</p>");
			echo("<p><right><b>Data de Publicação:</b> ".$row["date"]."</right></p>");
			echo("<img width=\"200\"  src=\".\imgs\\".$row["thum"]."\"></div>");
			echo("</div>");
		}
		}
		}}
?>