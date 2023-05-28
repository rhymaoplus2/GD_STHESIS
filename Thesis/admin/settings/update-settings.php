<?php
// update-settings.php

// Include the database connection
include "../php/db_conn.php";

// Get the form data
$username = $_POST['username'];
$password = $_POST['password'];

// Update the settings in the database
$sql = "UPDATE settings SET username = '$username', password = '$password' WHERE id = 1";
if ($conn->query($sql) === TRUE) {
  echo "Settings updated successfully";
} else {
  echo "Error updating settings: " . $conn->error;
}

$conn->close();
?>
