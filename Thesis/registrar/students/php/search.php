<?php 
include "./db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted
    $search_query = $_POST['search_query'];
    
    // Create the SQL query to search for the student records
    $sql = "SELECT * FROM students WHERE firstname LIKE '%$search_query%' OR lastname LIKE '%$search_query%'";
    
    // Execute the SQL query
    $result = mysqli_query($conn, $sql);
    
    // Check if there are any records found
    if (mysqli_num_rows($result) > 0) {
        // Display the records in a table
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["lastname"]."</td><td>".$row["firstname"]."</td><td>".$row["middlename"]."</td><td>".$row["lrnnumber"]."</td><td>".$row["section"]."</td></tr>";
        }
    } else {
        echo "No records found.";
    }
}
?>
