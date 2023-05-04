<?php
include "db_conn.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['id'])) {
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: index.php");
        exit();
    }
} else if(isset($_POST['update'])) {
    $id = validate($_POST['id']);
    $name = validate($_POST['name']);
    $role = validate($_POST['role']);
    $role2 = validate($_POST['role2']);
    $role3 = validate($_POST['role3']);

    if (empty($name)) {
        header("Location: update.php?id=$id&error=Name Required");
        exit();
    } else {
        $sql = "UPDATE users SET name='$name', role='$role', role2='$role2', role3='$role3' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php?success=successfully updated");
            exit();
        } else {
            header("Location: index.php?error=unknown error occurred");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
