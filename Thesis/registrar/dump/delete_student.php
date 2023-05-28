<?php
   include "./php/db_conn.php";
   session_start();
   
   if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      $password = $_POST['password'];
      
      // Verify password
      $username = $_SESSION['username'];
      $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
      $result = mysqli_query($conn, $query);
      
      if (mysqli_num_rows($result) == 1) {
         // Delete student
         $query = "DELETE FROM students WHERE id='$id'";
         mysqli_query($conn, $query);
         
         header("Location: teacher_read.php?success=Student deleted successfully");
         exit();
      } else {
         header("Location: teacher_read.php?error=Incorrect password");
         exit();
      }
   }
?>
