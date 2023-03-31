<?php
require "./php/db_conn.php";

$section_name = $_GET['section_name'];
$user_name = $_GET['user_name'];

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

mysqli_close($conn);


?>
