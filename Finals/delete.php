<?php
include "functionboard.php";
// check if message ID is provided via GET request
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    // delete the message with the specified ID
    $sql = "DELETE FROM messages WHERE id = $id";
    if (mysqli_query($dbc, $sql)) {
        echo "Message deleted successfully.";
        //redirects user to display board
        header("Location: /finals/Displayboard.php");
    } else {
        echo "Error deleting message: " . mysqli_error($dbc);
    }
}
?>