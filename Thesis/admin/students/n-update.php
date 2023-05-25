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
    $section = validate($_POST['section']);
    $subject1 = validate($_POST['subject1']);
    $subject2 = validate($_POST['subject2']);
    $subject3 = validate($_POST['subject3']);
    $subject4 = validate($_POST['subject4']);
    $subject5 = validate($_POST['subject5']);
    $subject6 = validate($_POST['subject6']);
    $subject7 = validate($_POST['subject7']);
    $subject8 = validate($_POST['subject8']);
    $subject9 = validate($_POST['subject9']);
    $subject10 = validate($_POST['subject10']);

    if (empty($id)) {
        header("Location: update.php?id=$id&error=Name Required");
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
        section='$section',
        subject1='$subject1',
        subject2='$subject2',
        subject3='$subject3',
        subject4='$subject4',
        subject5='$subject5',
        subject6='$subject6',
        subject7='$subject7',
        subject8='$subject8',
        subject9='$subject9',
        subject10='$subject10'
        WHERE id='$id'";
        
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
