<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	$lrnnumber = validate($_POST['lrnnumber']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
	$lastname = validate($_POST['lastname']);
	//$gender = validate($_POST['gender']);
	$birthplace = validate($_POST['birthplace']);

	$user_data ='lrnnumber='.$lrnnumber.'firstname='.$firstname.'middlename='.$middlename. 'lastname='.$lastname.'&birthplace='.$birthplace;

	if (empty($lrnnumber))
	 {
		header ("Location: ../teacher_read.php?error=LRN number is required&$user_data");
	}
	
	else if (empty($middlename)) {
		header ("Location: ../teacher_read.php?error=Middle Name is required&$user_data");
	}

	else if (empty($firstname)) {
		header ("Location: ../teacher_read.php?error=First Name is required&$user_data");
	}

	else if (empty($lastname)) {
		header ("Location: ../teacher_read.php?error=Last Name is required&$user_data");
	}

	//else if (empty($gender)) {
	//	header ("Location: ../studentlist.php?error=Gender is required&$user_data");
	//}

	else if (empty($birthplace)) {
		header ("Location: ../teacher_read.php?error=Birth Place is required&$user_data");
	}
	
	
	else {

       $sql = "INSERT INTO students(lrnnumber,firstname, middlename,lastname,birthplace) 
               VALUES('$lrnnumber','$firstname', '$middlename','$lastname','$birthplace')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../teacher_read.php?success=Added Successfully");
       }else {
          header("Location:../teacher_read.php?error=unkown error occured&$user_data");
       }
	}

}