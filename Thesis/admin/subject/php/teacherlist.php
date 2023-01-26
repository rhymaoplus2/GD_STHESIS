

<?php
include "db_conn.php";

$sql = "SELECT * FROM teacher ORDER BY username DESC";    
$result = mysqli_query($conn,$sql);