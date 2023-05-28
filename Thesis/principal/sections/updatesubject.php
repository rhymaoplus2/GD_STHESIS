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
    
    // Loop through the subject columns
    for ($i = 1; $i <= 10; $i++) {
        $subject = validate($_POST['subject' . $i]);
        $sql = "UPDATE students SET subject{$i}='$subject' WHERE section='$name'";
        $result = mysqli_query($conn, $sql);
    }

    if ($result) {
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