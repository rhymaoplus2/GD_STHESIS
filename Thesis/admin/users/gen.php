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

    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        header("Location:users.php");
    }

    $stmt->close();
} else if(isset($_POST['update'])){
    $id = validate($_POST['id']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: generate.php?id=$id&error=Username is required");
    } else if (empty($password)) {
        header("Location: generate.php?id=$id&error=Password is required");
    } else {
        $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
        $stmt->bind_param("ssi", $username, $password, $id);
        $result = $stmt->execute();

        if ($result) {
            header("Location: users.php?success=User information updated successfully");
        } else {
            header("Location: generate.php?id=$id&error=Unknown error occurred");
        }

        $stmt->close();
    }
}
