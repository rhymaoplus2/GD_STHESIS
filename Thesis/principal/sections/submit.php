<?php
// Retrieve the form data
$grade = $_POST['grade'];
$section = $_POST['section'];

// Validate and process the data as needed
// ...

// Include the database connection file
require "./php/db_conn.php";

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO section (grade, name) VALUES (?, ?)");
$stmt->bind_param("ss", $grade, $section);

// Execute the statement
if ($stmt->execute()) {
    header("Location:index.php?id=$id&success=Success!");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and the database connection
$stmt->close();
$conn->close();
?>
