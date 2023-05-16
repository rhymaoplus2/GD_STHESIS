<?php
session_start();
include "db_conn.php";

if (isset($_POST['submit'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $submittedStudents = array(); // Array to keep track of submitted students

    $quarter = validate($_POST['quarter']);
    $semester = validate($_POST['semester']);

    foreach ($_POST['studentname'] as $index => $studentname) {
        $subjectname = validate($_POST['subjectname'][$index]);
        $grade = validate($_POST['grade'][$index]);
        $teacher = validate($_POST['teacher'][$index]);
        $adviser = validate($_POST['adviser'][$index]);
        $firstname = validate($_POST['firstname'][$index]);
        $middlename = validate($_POST['middlename'][$index]);
        $lastname = validate($_POST['lastname'][$index]);
        $gender = validate($_POST['gender'][$index]);
        $sy = validate($_POST['sy'][$index]);
        $year = validate($_POST['year'][$index]);
        $ts = validate($_POST['ts'][$index]);
        $studentid = validate($_POST['studentid'][$index]);
        $section = validate($_POST['section'][$index]);

        $session = validate($_POST['session']);
        $time = validate($_POST['time']);
        $date = validate($_POST['date']);
        $status = validate($_POST['status']);

        if ($grade == 0) {
            continue;
        }

        if ($grade >= 75) {
            $remarks = "PASSED";
        } else {
            $remarks = "FAILED";
        }

        $query = "SELECT * FROM grade WHERE studentname='$studentname' AND semester='$semester' AND quarter='$quarter' AND subjectname='$subjectname'";
        $query_run = mysqli_query($conn, $query);
        $name = $_SESSION['name'];

        if (mysqli_num_rows($query_run) > 0 || in_array($studentname, $submittedStudents)) {
            header("Location: ../subject3.php?error=Hello $name, You already submitted a grade for this student this quarter and semester. Go back and click update!");
            exit();
        } else {
            $submittedStudents[] = $studentname; // Add the student to the submitted students array

            $query = "INSERT INTO grade (studentname, subjectname, grade, teacher, section, adviser, firstname, middlename, lastname, gender, remarks, semester, quarter, sy, year, ts, studentid, session, date, time, status)
                      VALUES ('$studentname', '$subjectname', '$grade', '$teacher', '$section', '$adviser',
                      '$firstname', '$middlename', '$lastname', '$gender', '$remarks', '$semester', '$quarter', '$sy', '$year', '$ts', '$studentid', '$session', '$date', '$time', '$status')";
            $query_run = mysqli_query($conn, $query);

            if (!$query_run) {
                header("Location: ../subject3.php?error=Error inserting grades into the database");
                exit();
            }
        }
    }
    header("Location: ../subject3view.php?success=Grades added successfully");
}
?>
