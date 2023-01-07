<?php
include "db_conn.php";

$sql = "SELECT * FROM studentlist ORDER BY id DESC";
$result = mysqli_query($conn,$sql);