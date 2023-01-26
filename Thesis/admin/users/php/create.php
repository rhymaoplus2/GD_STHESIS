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
	$password = validate($_POST['password']);
	$name = validate($_POST['name']);
	$advisory = validate($_POST['advisory]']);
	$st1 = validate($_POST['st1']);

	$user_data ='username='.$username.'password='.$password.'name='.$name.
	 'password='.$password.'&advisory='.$advisory.'&st1='.$st1;

	if (empty($username))
	 {
		header ("Location: ../teacher_read.php?username is required&$user_data");
	}
	
	
	
	else {

       $sql = "INSERT INTO users(username,password, name,advisory,st1) 
               VALUES('$username','$password', '$name','$advisory','$st1')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../users.php?success=Added Successfully");
       }else {
          header("Location:../users.php?error=unkown error occured&$user_data");
       }
	}

}