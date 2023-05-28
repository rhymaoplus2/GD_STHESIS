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
;

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
        section='$section'
  
  WHERE id = $id";
mysqli_query($conn, $query);


header("Location: index.php");
exit();
?>
