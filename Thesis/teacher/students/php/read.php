<?php
include "db_conn.php";

$sql = "SELECT * FROM students ORDER BY lastname DESC";    
$result = mysqli_query($conn,$sql);