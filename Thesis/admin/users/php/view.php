<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: view.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
        $username = validate($_POST['username']);
	    $password = validate($_POST['password']);
	    $role = validate($_POST['role']);

  


        $id = validate($_POST['id']);

        

	if (empty($firstname)) {
		header("Location: ../update.php?id=$id&error=First Name is required/Input new data");
	}
        
        else if (empty($middlename)) {
		header("Location: ../update.php?id=$id&error=Middle Name is required/Input new data");
	}
        else if (empty($lastname)) {
		header("Location: ../update.php?id=$id&error=LRN number is required/Input new data");
	}
        
        else if (empty($lrnnumber)) {
		header("Location: ../update.php?id=$id&error=LRN number is required/Input new data");
	}

        else if (empty($gender)) {
		header("Location: ../update.php?id=$id&error=Gender is required/Input new data");
	}
        
        else if (empty($birthplace)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($address)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($parent)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        else if (empty($age)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($schoolyear)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        else if (empty($section)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}

        
        
        else {

       $sql = "UPDATE users
               SET username='$username',password='$password', role='$role'
             
            
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../teacher_read.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: teacher_read.php");
}