<?php
include "db_conn.php";
session_start();


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
    $sub11 = test_input($_POST['sub1']);

    // get today's day number
    $day = date('j');

    if (empty($username)) {
        header("Location: ../index.php?error=User Name is Required");
    } else if (empty($password)) {
        header("Location: ../index.php?error=Password is Required");
    } else {

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            // the user name must be unique
            $row = mysqli_fetch_assoc($result);
            
            // check if user has enough XP to log in
            if (($row['xp'] - $day) >= 1) {
                // check if one of the roles is "subject teacher"
                $roles = [$row['role'], $row['role2'], $row['role3']];
                foreach ($roles as $role) {
                    $role_lower = strtolower($role);
                    if (strpos($role_lower, 'subject teacher') === 0) {
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['username'] = $row['username'];
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['sec1'] = $row['sec1'];
                        $_SESSION['sub1'] = $row['sub1'];
                        $_SESSION['sub2'] = $row['sub2'];
                        $_SESSION['sub3'] = $row['sub3'];
                        $_SESSION['sub4'] = $row['sub4'];
                        $_SESSION['sub5'] = $row['sub5'];
                        $_SESSION['sub6'] = $row['sub6'];
                        $_SESSION['sub7'] = $row['sub7'];
                        $_SESSION['sub8'] = $row['sub8'];
                        $_SESSION['sub9'] = $row['sub9'];
                        $_SESSION['sub10'] = $row['sub10'];
                        $_SESSION['role'] = $role;
                        header("Location: ../home.php");
                        exit();
                    }
                }
                // if none of the roles is "subject teacher"
                header("Location: ../index.php?error=You do not have access to this page");
            } else {
                header("Location: ../index.php?error=You do not have access to this page");
            }

        } else {
            header("Location: ../index.php?error=Incorrect User name or password");
        }

    }
    
} else {
    header("Location: ../index.php");
}
