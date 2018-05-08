<?php
	$score = 0;
	$score = $_GET["fid_17"];
	$name = "";
	$name = $_GET["name"];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "highScores";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 


	if ("SELECT COUNT(*) FROM scores" < 10) {
		$sql = "INSERT INTO scores (name, score) VALUES (\"$name\", $score)"; 
		if(mysqli_query($conn, $sql)){
    		echo "Records inserted successfully.";
		} else{
    		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	} else {
		$sql = "SELECT MAX(score) FROM scores ORDER BY score DESC";
		if ($sql < $score) {
			$sql = "DELETE FROM scores WHERE score = (SELECT MAX(score) FROM scores ORDER BY score DESC)";
			$sql = "INSERT INTO scores (name, score) VALUES (\"$name\", $score)";
		} else {

		}
	}
	$conn->close();
?>
<script>setTimeout(function(){window.location.href='leaderboard.php'},10);</script>