<?php
// Include the database connection file
include "./php/db_conn.php";

// Retrieve the submitted form data
$id = $_POST['id'];
$lrnnumber = $_POST['lrnnumber'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$fullname =    $_POST['fullname']  ;
$suffix =    $_POST['suffix']  ;
$gender =    $_POST['gender']  ;
$birthplace =    $_POST['birthplace']  ;
$birthday =    $_POST['birthday']  ;
$age =    $_POST['age']  ;
$address =    $_POST['address']  ;
$parent =    $_POST['parent']  ;
$syear =    $_POST['syear']  ;
$section =    $_POST['section']  ;
$subject1 =    $_POST['subject1']  ;
$subject2 =    $_POST['subject2']  ;
$subject3 =    $_POST['subject3']  ;
$subject4 =    $_POST['subject4']  ;
$subject5 =    $_POST['subject5']  ;
$subject6 =    $_POST['subject6']  ;
$subject7 =    $_POST['subject7']  ;
$subject8 =    $_POST['subject8']  ;
$subject9 =    $_POST['subject9']  ;
$subject10 =    $_POST['subject10']  ;

$query = "UPDATE students SET
             firstname = '$firstname',
       middlename = '$middlename'
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
  WHERE id = $id";
mysqli_query($conn, $query);


header("Location: index.php");
exit();
?>
