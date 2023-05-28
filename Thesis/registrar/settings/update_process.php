<?php
include "../php/db_conn.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    // Update the user data in the database
    $updateQuery = "UPDATE users SET username = '$username', password = '$password', name = '$name' WHERE id = 1";
    mysqli_query($conn, $updateQuery);

    // Redirect back to the update form or any other page you want
    header("Location: index.php");
    exit();
}
?>
