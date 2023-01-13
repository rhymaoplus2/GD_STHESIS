<?php
include "db_conn.php";

$sql = "SELECT * FROM grade ORDER BY subjectname DESC";    
$result = mysqli_query($conn,$sql);