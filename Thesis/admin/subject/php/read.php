<?php
include "db_conn.php";

$sql = "SELECT * FROM subjects ORDER BY subjectid DESC";    
$result = mysqli_query($conn,$sql);