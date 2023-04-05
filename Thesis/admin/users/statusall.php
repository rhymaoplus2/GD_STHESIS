<?php
// Include database connection file
include 'db_conn.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  // Get the status value from the AJAX request
  $status = $_POST['status'];
  
  // Update status of users whose status is not greater than 1
  $query = "UPDATE users SET status = $status WHERE status <= 1";
  $result = mysqli_query($conn, $query);
  if ($result) {
    header("Location: users.php?id=$id&success=Successfully updated");
  } else {
    echo "Error: " . mysqli_error($conn);
  }
  
}
?>

