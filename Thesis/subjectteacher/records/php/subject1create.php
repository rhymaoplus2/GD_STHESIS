<?php
session_start();
include "db_conn.php";
if(isset($_POST['submit']))
{
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $semester = $_POST['semester'];
    $quarter = $_POST['quarter'];
    // Loop through each student's grades and insert them into the database
    foreach ($_POST['studentname'] as $index => $studentname)
    {
        $subjectname = $_POST['subjectname'][$index];
        $grade = $_POST['grade'][$index];
        $teacher = $_POST['teacher'][$index];
        $section = $_POST['section'][$index];
        $adviser = $_POST['adviser'][$index];
        $firstname = $_POST['firstname'][$index];
        $middlename = $_POST['middlename'][$index];
        $lastname = $_POST['lastname'][$index];
        $gender = $_POST['gender'][$index];
        $sy = $_POST['sy'][$index];
        $year = $_POST['year'][$index];
        $ts = $_POST['ts'][$index];
        $studentid = $_POST['studentid'][$index];
        // Skip inserting the record if the grade is 0
        if ($grade == 0) {
            continue;
        }

        // Determine the value of the remarks field based on the grade
        if ($grade >= 75) {
            $remarks = "PASSED";
        } else {
            $remarks = "FAILED";
        }

        // Check if the record already exists
        $query = "SELECT * FROM grade WHERE studentname='$studentname' AND semester='$semester' AND quarter='$quarter'";
        $query_run = mysqli_query($conn, $query);
        $name = $_SESSION['name'];
        if (mysqli_num_rows($query_run) > 0) {
            // The record already exists, show an error message
            header("Location: ../subject1.php?error=Hello $name, You already submitted a grade for this student this quarter and semester. Go back and click update!");
            exit();
        } else {
            // The record doesn't exist, insert it into the database
            $query = "INSERT INTO grade(studentname,subjectname,grade,teacher,section,adviser,firstname,middlename,lastname,gender,remarks,semester,quarter,sy,year,ts,studentid) 
                      VALUES ('$studentname','$subjectname','$grade','$teacher','$section','$adviser',
                      '$firstname','$middlename','$lastname','$gender','$remarks','$semester','$quarter','$sy','$year','$ts','$studentid')";
            $query_run = mysqli_query($conn, $query);

            if (!$query_run)
            {
                header("Location: ../subject1.php?error=Error inserting grades into database");
                exit();
            }
        }
    }
    header("Location: ../subject1view.php?success=Grades added successfully");
}


?>
