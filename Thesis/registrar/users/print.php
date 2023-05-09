<?php
include "db_conn.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  echo "<h1>Login Pass for $name</h1>";
  echo "<p><strong>Username:</strong> $username</p>";
  echo "<p><strong>Password:</strong> $password</p>";

}

?>
