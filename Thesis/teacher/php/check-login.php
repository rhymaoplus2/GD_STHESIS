<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $name = test_input($_POST['name']);
    $sec1 = test_input($_POST['sec1']);

    if (empty($username)) {
        header("Location: ../index.php?error=User Name is Required");
    } else if (empty($password)) {
        header("Location: ../index.php?error=Password is Required");
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            // check if one of the roles contains "adviser"
            if (in_array(strtolower("adviser"), array_map('strtolower', [$row['role'], $row['role2'], $row['role3']]))) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['sec1'] = $row['sec1'];
                $_SESSION['adviser'] = true;
                $_SESSION['role'] = "adviser";
                header("Location: ../home.php");
                exit();
            } else {
                // if none of the roles contains "adviser"
                header("Location: ../index.php?error=You do not have access to this page as an adviser");
            }
        } else {
            header("Location: ../index.php?error=Incorrect User name or password");
        }
    }
} else {
    header("Location: ../index.php");
}
