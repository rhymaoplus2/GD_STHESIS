<?php
require "./php/db_conn.php";

$section_id = $_GET['section_id'];
$user_id = $_GET['user_id'];

// Assign the section to the user
$query = "SELECT * FROM section WHERE id='$section_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {
  $assigned = false;
  $first_slot_occupied = false; // Flag to track if the first slot is occupied

  for ($i = 1; $i <= 10; $i++) {
    if ($row["t$i"] == "") {
      // Store the section ID to the user's column
      $sec_column_name = "sec$i";
      $query = "UPDATE users SET $sec_column_name='$section_id' WHERE id='$user_id'";
      $result = mysqli_query($conn, $query);

      // Update the students table
      $query = "UPDATE students SET subjectteacher$i='$user_id' WHERE section='$section_id'";
      $result = mysqli_query($conn, $query);

      $assigned = true;
      break;
    } elseif ($i == 1) {
      $first_slot_occupied = true;
    }
  }

  if (!$assigned && $first_slot_occupied) {
    // Update the first slot with the new section
    $sec_column_name = "sec1";
    $query = "UPDATE users SET $sec_column_name='$section_id' WHERE id='$user_id'";
    $result = mysqli_query($conn, $query);

    // Update the students table
    $query = "UPDATE students SET subjectteacher1='$user_id' WHERE section='$section_id'";
    $result = mysqli_query($conn, $query);

    $assigned = true;
  }

  if ($assigned) {
    header("Location:index.php?id=$id&success=Success!");
  } else {
    header("Location:index.php?id=$id&error=All slots are occupied or user has already been assigned to a section in all tables.");
  }
} else {
  header("Location:index.php?id=$id&error=Invalid section ID.");
}

mysqli_close($conn);
?>
