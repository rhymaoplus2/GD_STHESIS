<?php
 
  if(isset($_GET['id'])){
    include "db_conn.php";
     function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
   }
 
   $id = validate($_GET['id']);
// check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // get the password entered by the user
  $password = $_POST['password'];

  // check if password is correct
 
  if ($password == '123') {
     $sql = "DELETE FROM students
             WHERE id=$id";
              
      $result = mysqli_query($conn, $sql);
      if ($result) {
          header("Location: teacher_read.php?success=successfully deleted");
      }
  } else {
    // password is incorrect, show an error message
    echo 'Incorrect password. Data not deleted.';
  }
}
 }
?>
