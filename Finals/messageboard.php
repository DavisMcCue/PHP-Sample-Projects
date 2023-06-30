<!--
Name: Davis McCue
Date: 5/10/2023
Description: Form Created for user when they hit submit it gets sent to the functionboard.php to be processed -->
<!DOCTYPE html>
<html>
<head>
	<title>Message Board</title>
</head>
<body>
    <!--header added-->
    <?php include 'include/header.php'; ?>
	<h3>Message Board</h3>
	<form method="post" action="functionboard.php">
		  <label for="name">Name:</label>
		  <input type="text" id="name" name="name" required><br><br>
        
          <label for="age">Age:</label>
		  <input type="number" id="age" name="age" required><br><br>
        
		  <label for="message">Message:</label>
		  <textarea id="message" name="message" required></textarea><br><br>
        <!--Div created to move the submit button-->
		<div class="submit">
		  <input type="submit" value="Post Message">
        </div>
	</form>
    <!--footer added-->
    <?php include 'include/footer.php'; ?>
	
</body>
</html>