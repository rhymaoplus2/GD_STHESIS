<?php
// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // get the password entered by the user
  $password = $_POST['password'];

  // check if the password is correct
  if ($password === 'password123') {
    // delete the item
    // ...
    
    echo 'Item deleted successfully';
  } else {
    // display an error message
    echo 'Incorrect password. Item not deleted';
  }
}
?>

