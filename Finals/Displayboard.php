<!--
Name: Davis McCue
Date: 5/10/2023
Description: Form Created for user when they hit submit it gets sent to the functionboard.php to be processed -->
<title>Display Board</title>
<?php include 'include/header.php'; ?>
<div class="Messages">
    <h2>Messages:</h2>
<?php
    include "functionboard.php";
    // retrieve messages from database and display them
	$sql = "SELECT * FROM messages ORDER BY id DESC";
	$result = mysqli_query($dbc, $sql);
	
	if (mysqli_num_rows($result) > 0) 
    {
		while ($row = mysqli_fetch_assoc($result)) {
             // generate delete button for each message
            $delete_btn = '<a href="delete.php?id=' . $row["id"] . '">Delete</a>';
            // display message content along with the delete button
            echo '<p><strong>'."Name: " . $row["name"] . "<br> Age: " . $row["age"] .'</strong> ' ."<br> Message: ". $row["message"] . ' ' . $delete_btn . '</p>';
		}
    }
    else
    {
        echo"Sorry! no messages yet! Please go to the Message Board Tab to get started!";
    }
?>
</div>
<?php include 'include/footer.php'; ?>