<?php
// Database connection code
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
if (!$conn) {
    echo "Connection Failed";
    exit();
}

if (isset($_POST['export'])) {
    // Backup filename
    $backup_filename = 'my_db_backup_' . date('Y-m-d_H-i-s') . '.sql';

    // Execute mysqldump command
    exec("mysqldump --user={$uname} --password={$password} --host={$sname} {$db_name} > {$backup_filename}", $output, $return_var);

    // Download the backup file
    if ($return_var == 0 && file_exists($backup_filename)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($backup_filename) . '"');
        readfile($backup_filename);
        unlink($backup_filename);
        exit();
    } else {
        echo "Backup failed";
        echo implode("<br>", $output);

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Export Database</title>
</head>
<body>
    <form method="post">
        <input type="submit" name="export" value="Export Database">
    </form>
</body>
</html>
