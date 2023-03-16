<?php
require "./php/db_conn.php";

$section_name = $_GET['section_name'];
$user_name = $_GET['user_name'];

// Check if the section is already assigned to the user in any of the tables
$query = "SELECT * FROM section WHERE name='$section_name' AND (t1='$user_name' OR t2='$user_name' OR t3='$user_name' OR t4='$user_name' OR t5='$user_name' OR t6='$user_name' OR t7='$user_name' OR t8='$user_name' OR t9='$user_name' OR t10='$user_name')";
$result = mysqli_query($conn, $query);
$Row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM users WHERE name='$user_name' AND (sec1='$section_name' OR sec2='$section_name' OR sec3='$section_name' OR sec4='$section_name' OR sec5='$section_name' OR sec6='$section_name' OR sec7='$section_name' OR sec8='$section_name' OR sec9='$section_name' OR sec10='$section_name')";
$result = mysqli_query($conn, $query);
$Row2 = mysqli_fetch_assoc($result);

$query = "SELECT * FROM students WHERE section='$section_name' AND (subjectteacher1='$user_name' OR subjectteacher2='$user_name' OR subjectteacher3='$user_name' OR subjectteacher4='$user_name' OR subjectteacher5='$user_name' OR subjectteacher6='$user_name' OR subjectteacher7='$user_name' OR subjectteacher8='$user_name' OR subjectteacher9='$user_name' OR subjectteacher10='$user_name')";
$result = mysqli_query($conn, $query);
$Row3 = mysqli_fetch_assoc($result);

if ($Row || $Row2 || $Row3) {
  // User is already assigned to the section in one of the tables
  header("Location:sections.php?id=$id&error=User is already assigned to the section in one of the tables. Update it Manually");

} else {
  // Assign the section to the user
  $assigned = false;
  for ($i = 1; $i <= 10; $i++) {
    $query = "SELECT t$i FROM section WHERE name='$section_name'";
    $result = mysqli_query($conn, $query);
    $Row = mysqli_fetch_assoc($result);

    if ($Row["t$i"] == "") {
      $query = "SELECT * FROM users WHERE name='$user_name' AND (sec$i='')";
      $result = mysqli_query($conn, $query);
      $Row2 = mysqli_fetch_assoc($result);

      if($Row2) {
        $query = "UPDATE section SET t$i='$user_name' WHERE name='$section_name'";
        $result = mysqli_query($conn, $query);

        // Store the section name to the user's column
        $sec_column_name = "sec$i";
        $query = "UPDATE users SET $sec_column_name='$section_name' WHERE name='$user_name'";
        $result = mysqli_query($conn, $query);

        // Update the students table
        $query = "UPDATE students SET subjectteacher$i='$user_name' WHERE section='$section_name'";
        $result = mysqli_query($conn, $query);

        $assigned = true;
        break;
      }
    }
  }
  if ($assigned) {
    header("Location:sections.php?id=$id&success=Section assigned to $user_name");

  } else {
    header("Location:sections.php?id=$id&error=All slots are occupied or user has already assigned to a section in all tables.");
  }
  
}

mysqli_close($conn);

?>
