<?php
include "./php/db_conn.php";

// Retrieve the ID from the URL parameter
$id = $_GET['id'];

// Retrieve the new first name from the form submission
$firstname = $_POST['firstname'];

// Update the first name in the database
$sql = "UPDATE students SET firstname = '$firstname' WHERE id = '$id'";
if (mysqli_query($conn, $sql)) {
  echo "First name updated successfully.";
} else {
  echo "Error updating first name: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
