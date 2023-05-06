<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate the form data (you can add your own validation rules here)

    // Check if the user is authorized to log in
    if($email == 'user@example.com' && $password == 'password') {
        // Redirect the user to the dashboard page
        header('Location: index.php');
        exit;
    } else {
        // Display an error message if the user is not authorized to log in
        $error = 'Invalid email address or password.';
    }
}
?>
