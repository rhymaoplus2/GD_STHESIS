<?php 
if (isset($_POST['create'])) {
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $name = validate($_POST['name']);
    $password = validate($_POST['password']);
	$role = validate($_POST['role']);
	$role2 = validate($_POST['role2']);

    $user_data ='username='.$username.'&password='.$password.'&name='.$name.'&role='.$role
	.'&role2='.$role2;

    if (empty($username)) {
        header ("Location: ../teacher_read.php?error=Username is required&$user_data");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND name='$name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../create.php?error=Username or name already exists&$user_data");
            exit();
        } else {
            $sql = "INSERT INTO users(username, password, name,role,role2)
			 VALUES('$username', '$password', '$name','$role','$role2')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ../users.php?success=Added Successfully");
                exit();
            } else {
                header("Location: ../users.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
}
