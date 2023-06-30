<!--
Name: Davis McCue
Date: 5/10/2023
Description: Connects to the database, once that happens and it pass then the data is inserted into the database -->
<?php
	// connect to database
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "Theiceman34$";
	$db_name = "Finalproject";
	
	$dbc = mysqli_connect($db_host, $db_user, $db_password, $db_name);
	if (!$dbc) {
		die("Connection failed: " . mysqli_connect_error());
	}
// insert new message into database
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
        $age = $_POST["age"];
		$message = $_POST["message"];
		
		$sql = "INSERT INTO messages (name, age, message) VALUES ('$name', '$age', '$message')";
		
		if (mysqli_query($dbc, $sql)) {
            //redirects to displayboard
			echo "Message posted successfully.";
            header("Location: /finals/Displayboard.php");
		} else {
			echo "Error posting message: " . mysqli_error($dbc);
		}
	}
?>