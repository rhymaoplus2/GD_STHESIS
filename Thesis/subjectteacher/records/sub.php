<?php
include "db_conn.php";

$sql = "SELECT * FROM grade ORDER BY studentname ASC  ";    
$result = mysqli_query($conn,$sql);