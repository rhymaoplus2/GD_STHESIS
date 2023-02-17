<?php
include "db_conn.php";

$sql = "SELECT * FROM students ORDER BY id DESC";    
$result = mysqli_query($conn,$sql);

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the selected option
    $sort_by = $_POST['sort-by'];

    // Generate the SQL query based on the selected option
    $query = "SELECT * FROM students ORDER BY $sort_by ASC";

    // Execute the query
    $result = $connection->query($query);

    // Process the results
    while ($row = $result->fetch_assoc()) {
        // Do something with the data, like echo it out
        echo $row['name'] . ' is in year level ' . $row['year_level'] . ' in semester ' . $row['semester'] . '<br>';
    }
}

// Close the connection
$connection->close();