<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected subject, teacher, and section from the form
    $subject = $_POST["subject"];
    $teacher = $_POST["teacher"];
    $section = $_POST["section"];

    // Connect to the database
    include "./php/db_conn.php";

    // Insert the selected subject into the "students" table
    $query = "UPDATE students SET ";
    $query .= "subject1 = IFNULL(subject1, '$subject'), ";
    $query .= "subject2 = IFNULL(subject2, '$subject'), ";
    $query .= "subject3 = IFNULL(subject3, '$subject'), ";
    $query .= "subject4 = IFNULL(subject4, '$subject'), ";
    $query .= "subject5 = IFNULL(subject5, '$subject'), ";
    $query .= "subject6 = IFNULL(subject6, '$subject'), ";
    $query .= "subject7 = IFNULL(subject7, '$subject'), ";
    $query .= "subject8 = IFNULL(subject8, '$subject'), ";
    $query .= "subject9 = IFNULL(subject9, '$subject'), ";
    $query .= "subject10 = IFNULL(subject10, '$subject') ";
    $query .= "WHERE section = '$section'";
    mysqli_query($conn, $query);

    // Insert the selected subject into the "users" table
    $query = "UPDATE users SET ";
    $query .= "sub1 = IFNULL(sub1, '$subject'), ";
    $query .= "sub2 = IFNULL(sub2, '$subject'), ";
    $query .= "sub3 = IFNULL(sub3, '$subject'), ";
    $query .= "sub4 = IFNULL(sub4, '$subject'), ";
    $query .= "sub5 = IFNULL(sub5, '$subject'), ";
    $query .= "sub6 = IFNULL(sub6, '$subject'), ";
    $query .= "sub7 = IFNULL(sub7, '$subject'), ";
    $query .= "sub8 = IFNULL(sub8, '$subject'), ";
    $query .= "sub9 = IFNULL(sub9, '$subject'), ";
    $query .= "sub10 = IFNULL(sub10, '$subject') ";
    $query .= "WHERE name = '$teacher'";
    mysqli_query($conn, $query);

    // Close the database connection
    mysqli_close($conn);
}
?>
