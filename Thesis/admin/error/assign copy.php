<?php
require "./php/db_conn.php";

// Check if form is submitted
if(isset($_POST['submit'])) {
  // Get section name and assigned users
  $section_name = $_POST['section_name'];
  $assigned_users = $_POST['assigned_users'];

  // Ensure assigned users are not more than 10
  $assigned_users = array_slice($assigned_users, 0, 10);

  // Update section table with assigned users
  $update_query = "UPDATE section SET ";
  foreach($assigned_users as $key => $value) {
    $update_query .= "t".($key+1)." = '".$value."', ";
  }
  // Remove trailing comma and space
  $update_query = rtrim($update_query, ", ");
  $update_query .= " WHERE name = '".$section_name."'";
  $result = mysqli_query($conn, $update_query);

  if($result) {
    // Redirect to section page with success message
    header("Location: section.php?msg=success");
  } else {
    // Redirect to section page with error message
    header("Location: section.php?msg=error");
  }
} else {
  // Invalid request, redirect to section page
  header("Location: section.php");
}
?>
