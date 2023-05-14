<?php
// Include the database connection file
include "./php/db_conn.php";

// Get the column name from the session variable
$name = $_SESSION['name'];

// SQL query to select the values from sec1 to sec10 where the column name matches
$query = "SELECT sec1, sec2, sec3, sec4, sec5, sec6, sec7, sec8, sec9, sec10 FROM users ";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    // Fetch the values and display them
    while ($row = mysqli_fetch_assoc($result)) {
        echo "sec1: " . $row['sec1'] . "<br>";
        echo "sec2: " . $row['sec2'] . "<br>";
        echo "sec3: " . $row['sec3'] . "<br>";
        echo "sec4: " . $row['sec4'] . "<br>";
        echo "sec5: " . $row['sec5'] . "<br>";
        echo "sec6: " . $row['sec6'] . "<br>";
        echo "sec7: " . $row['sec7'] . "<br>";
        echo "sec8: " . $row['sec8'] . "<br>";
        echo "sec9: " . $row['sec9'] . "<br>";
        echo "sec10: " . $row['sec10'] . "<br>";
    }
} else {
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
