<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "my_db";

// Set the name of the backup file
$filename = 'my_db_backup.sql';

// Connect to the database
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check if the connection is successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Execute the mysqldump command
// Execute the mysqldump command
$command = "mysqldump --user=$uname --password=$password --host=$sname --no-tablespaces $db_name > $filename";
system($command);


// Download the backup file to the user's computer
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Content-Type: application/octet-stream');
readfile($filename);

// Delete the backup file from the server
unlink($filename);
?>