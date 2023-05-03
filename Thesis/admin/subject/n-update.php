<?php
if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM subjects WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location:update.php");
    }
} elseif (isset($_POST['update'])) {
    include "db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $subjectname = validate($_POST['subjectname']);

    if (empty($subjectname)) {
        header("Location: update.php?id=$id&error=Subject Name is Required!");
        exit();
    } else {
        $sql = "UPDATE subjects SET subjectname='$subjectname' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: index.php?id=$id&success=successfully updated");
            exit();
        } else {
            header("Location: update.php?id=$id&error=unknown error occurred");
            exit();
        }
    }
}
