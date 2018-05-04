<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "highscores";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	$sql = "SELECT s_id, name, score FROM scores";
	$result = $conn->query($sql);

	if(!$result) { echo "blarg:" . $conn->error;}

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "id: " . $row["s_id"]. " - Name: " . $row["name"]. " " . $row["score"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}
	$conn->close();
?>