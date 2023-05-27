<?php

if (isset($_POST['create'])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_POST['id']);
    $idnumber = validate($_POST['idnumber']);
    $lrnnumber = validate($_POST['lrnnumber']);

    $firstname = validate($_POST['firstname']);
    $middlename = validate($_POST['middlename']);
    $lastname = validate($_POST['lastname']);
    $fullname = validate($_POST['fullname']);
    $gender = validate($_POST['gender']);
    $suffix = validate($_POST['suffix']);
    $birthplace = validate($_POST['birthplace']);
    $birthday = validate($_POST['birthday']);
    $age = validate($_POST['age']);
    $address = validate($_POST['address']);
    $parent = validate($_POST['parent']);
    $syear = validate($_POST['syear']);
    $grade = validate($_POST['grade']);
    $section = validate($_POST['section']);

    // Check if syear and idnumber already exist in the database
    $check_query = "SELECT idnumber FROM students WHERE idnumber='$idnumber'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // syear and idnumber already exist, redirect with an error message
        header("Location: ../teacher_create.php?error=The student with the ID number has already enrolled for this school year");
        exit();
    } else {
        // syear and idnumber don't exist, proceed with inserting the record

        $user_data = "id=" . $id .
            "&idnumber=" . $idnumber .
            "&lrnnumber=" . $lrnnumber .
          
            "&firstname=" . $firstname .
            "&middlename=" . $middlename .
            "&lastname=" . $lastname .
            "&fullname=" . $fullname .
            "&suffix=" . $suffix .
            "&gender=" . $gender .
            "&birthplace=" . $birthplace .
            "&birthday=" . $birthday .
            "&age=" . $age .
            "&address=" . $address .
            "&parent=" . $parent .
            "&syear=" . $syear .
            "&grade=" . $grade .
            "&section=" . $section;

        if (empty($lrnnumber)) {
            header("Location: ../teacher_create.php?error=LRN number is required&$user_data");
            exit();
        } elseif (empty($middlename)) {
            header("Location: ../teacher_create.php?error=Middle Name is required&$user_data");
            exit();
        } elseif (empty($firstname)) {
            header("Location: ../teacher_create.php?error=First Name is required&$user_data");
            exit();
        } elseif (empty($lastname)) {
            header("Location: ../teacher_create.php?error=Last Name is required&$user_data");
            exit();
        } elseif (empty($gender)) {
            header("Location: ../teacher_create.php?error=Gender is required&$user_data");
            exit();
        } elseif (empty($syear)) {
            header("Location: ../teacher_create.php?error=School Year is required&$user_data");
            exit();
        } elseif (empty($section)) {
            header("Location: ../teacher_create.php?error=Section Name is required&$user_data");
            exit();
        } elseif (empty($fullname)) {
            header("Location: ../teacher_create.php?error=Section Name is required&$user_data");
            exit();
        } else {
            $sql = "INSERT INTO students (id, idnumber, lrnnumber,  firstname, middlename, lastname, fullname, gender, suffix, birthplace, birthday, age, address, parent, syear, grade, section)
                    VALUES ('$id', '$idnumber', '$lrnnumber','$firstname', '$middlename', '$lastname', '$fullname', '$gender', '$suffix', '$birthplace', '$birthday', '$age', '$address', '$parent', '$syear', '$grade', '$section')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ../index.php?success=Added Successfully");
                exit();
            } else {
                header("Location: ../index.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
}
?>
