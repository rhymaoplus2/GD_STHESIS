<?php
include "db_conn.php";

$sql = "SELECT * FROM users ORDER BY username DESC";
$result = mysqli_query($conn,$sql);