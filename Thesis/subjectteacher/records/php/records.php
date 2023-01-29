<?php
include "db_conn.php";

$sql = "SELECT * FROM users  ";    
$result = mysqli_query($conn,$sql);