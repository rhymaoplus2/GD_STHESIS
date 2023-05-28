<?php
include "db_conn.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_GET['name'])) {
    $name = validate($_GET['name']);

    $sql = "SELECT * FROM students WHERE section='$name'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        header("Location: index.php");
        exit();
    }
} else if(isset($_POST['update'])) {
    $name = validate($_POST['name']);
    $trackstrand = validate($_POST['trackstrand']);

    // Update students table
    $sqlStudents = "UPDATE students SET trackstrand='$trackstrand' WHERE section='$name'";
    $resultStudents = mysqli_query($conn, $sqlStudents);

    if ($resultStudents) {
        header("Location: index.php?success=successfully%20updated");
        exit();
    } else {
        header("Location: index.php?error=unknown%20error%20occurred");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
?>
