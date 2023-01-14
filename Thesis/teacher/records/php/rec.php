<?php
include "db_conn.php";

$sql = "SELECT * FROM students ORDER BY fullname DESC";    
$result = mysqli_query($conn,$sql);
