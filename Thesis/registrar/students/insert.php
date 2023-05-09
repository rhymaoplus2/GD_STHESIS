<?php
include "./php/db_conn.php";

if(isset($_POST['submit'])) {
  $subject = $_POST['subject'];
  $section = $_POST['section'];
  $teacher = $_POST['teacher'];

  // Update students table
  $sql = "UPDATE students SET ";
  $subject_column = "";
  for ($i=1; $i<=10; $i++) {
    $subject_column = "subject$i";
    $sql .= "$subject_column='$subject' ";
    $sql .= "WHERE ($subject_column='' OR $subject_column IS NULL) ";
    $sql .= "AND section='$section'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
      break;
    }
    $sql = "UPDATE students SET ";
  }

  // Update users table
  $sql = "UPDATE users SET ";
  $subject_column = "";
  for ($i=1; $i<=10; $i++) {
    $subject_column = "sub$i";
    $sql .= "$subject_column='$subject' ";
    $sql .= "WHERE ($subject_column='' OR $subject_column IS NULL) ";
    $sql .= "AND name='$teacher'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_affected_rows($conn) > 0) {
      break;
    }
    $sql = "UPDATE users SET ";
  }

  header("Location: index.php");
}
?>
