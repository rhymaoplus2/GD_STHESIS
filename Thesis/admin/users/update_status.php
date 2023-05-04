<?php
// Include the database connection file
include "php/db_conn.php";

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the ID of the user from the hidden input field
    $id = $_POST["id"];
    // Get the value of the status from the button clicked in the modal
    $status = $_POST["status"];
    
    // Update the status of the user with the given ID
    $sql = "UPDATE users SET status = $status WHERE id = $id";
    
    if ($conn->query($sql) === TRUE) {
        header("Location:index.php?id=$id&Account Activated");
    } else {
        echo "Error updating status: ";
    }
    
    // Close the database connection
    $conn->close();
}
?>
