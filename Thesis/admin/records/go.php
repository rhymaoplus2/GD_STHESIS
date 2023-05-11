<?php
// Assuming you have established a database connection
include "../php/db_conn.php";
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Retrieve the session value from the query parameter
$session = $_GET['session'];

// SQL query to update the status column to 1 for the matching session
$sql = "UPDATE grade SET status = 1 WHERE session = '$session'";

// Execute the query
if (mysqli_query($conn, $sql)) {
    // Update successful
     header("Location: validate.php");
} else {
    // Error occurred
    echo "Error updating status: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
