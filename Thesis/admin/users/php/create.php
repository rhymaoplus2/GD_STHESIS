<?php 
if (isset($_POST['create'])) {
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = validate($_POST['name']);


    $user_data ='&name='.$name;

    if (empty($name)) {
        header ("Location: ../create.php?error=Name is required&$user_data");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE  name='$name'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: ../create.php?error=Name already exists&$user_data");
            exit();
        } else {
            $sql = "INSERT INTO users(name)
			 VALUES('$name')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                header("Location: ../users.php?success=Added Successfully");
                exit();
            } else {
                header("Location: ../create.php?error=Unknown error occurred&$user_data");
                exit();
            }
        }
    }
}
