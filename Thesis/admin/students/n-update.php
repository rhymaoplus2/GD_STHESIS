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

    $sql = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        header("Location: index.php");
        exit();
    }
} else if (isset($_POST['update'])) {
    $id = validate($_POST['id']);
    $firstname = validate($_POST['firstname']);
    $middlename = validate($_POST['middlename']);
    $lrnnumber = validate($_POST['lrnnumber']);
    $lastname = validate($_POST['lastname']);
    $fullname = validate($_POST['fullname']);
    $suffix = validate($_POST['suffix']);
    $gender = validate($_POST['gender']);
    $birthplace = validate($_POST['birthplace']);
    $birthday = validate($_POST['birthday']);
    $age = validate($_POST['age']);
    $address = validate($_POST['address']);
    $parent = validate($_POST['parent']);
    $syear = validate($_POST['syear']);
    $section = validate($_POST['section']); // Added section variable

    if (empty($id)) {
        header("Location: update.php?id=$id&error=ID Required"); // Updated error message
        exit();
    } else {
        $sql = "UPDATE students SET firstname='$firstname',
        middlename='$middlename',
        lastname='$lastname',
        lrnnumber='$lrnnumber',
        fullname='$fullname',
        suffix='$suffix',
        gender='$gender',
        birthplace='$birthplace',
        birthday='$birthday',
        age='$age',
        address='$address',
        parent='$parent',
        syear='$syear',
        section='$section'
   
        WHERE id='$id'";
        
        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php?success=Successfully updated"); // Updated success message
            exit();
        } else {
            header("Location: index.php?error=Unknown error occurred"); // Updated error message
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>