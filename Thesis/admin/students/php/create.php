s<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	$id = validate($_POST['id']);
	$lrnnumber = validate($_POST['lrnnumber']);
	$adviser_id = validate($_POST['adviser_id']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
	$lastname = validate($_POST['lastname']);
	$fullname = validate($_POST['fullname']);
	$gender = validate($_POST['gender']);
	$suffix = validate($_POST['suffix']);
	$birthplace = validate($_POST['birthplace']);
	$birthday = validate($_POST['birthday']);
	$age = validate($_POST['age']);
	$address = validate($_POST['address']);
	$parent = validate($_POST['parent']);
	$schoolyear = validate($_POST['schoolyear']);
	$grade = validate($_POST['grade']);
	$section = validate($_POST['section']);
	$user_data =
	'id='.$id.
	'lrnnumber='.$lrnnumber.
	'&adviser_id='.$adviser_id.
	'firstname='.$firstname.
	'middlename='.$middlename. 
    'lastname='.$lastname.
	'fullname='.$fullname.
	'&suffix='.$suffix.
	'&gender='.$gender.
    '&birthplace='.$birthplace.
	'&birthday='.$birthday.
	'&age='.$age.
    '&address='.$address.
	'&parent='.$parent.
	'&schoolyear='.$schoolyear.
	'&grade='.$grade.
	'&section='.$section
    ;

	if (empty($lrnnumber))
	 {
		header ("Location: ../teacher_create.php?error=LRN number is required&$user_data");
	}



	
	else if (empty($middlename)) {
		header ("Location: ../teacher_create.php?error=Middle Name is required&$user_data");
	}
	else if (empty($id)) {
		header ("Location: ../teacher_create.php?error=ID is required&$user_data");
	}

	else if (empty($firstname)) {
		header ("Location: ../teacher_create.php?error=First Name is required&$user_data");
	}

	else if (empty($lastname)) {
		header ("Location: ../teacher_create.php?error=Last Name is required&$user_data");
	}


	else if (empty($birthplace)) {
		header ("Location:../teacher_create.php?error=Birth Place is required&$user_data");
	}

	else if (empty($birthday)) {
		header ("Location: ../teacher_create.php?error=Birth Day is required&$user_data");
	}

	else if (empty($address)) {
		header ("Location: ../teacher_create.php?error=Address is required&$user_data");
	}

	else if (empty($gender)) {
		header ("Location: ../teacher_create.php?error=Gender is required&$user_data");
	}
	else if (empty($schoolyear)) {
		header ("Location: ../teacher_create.php?error=School Year is required&$user_data");
	}


	else if (empty($section)) {
		header ("Location: ../teacher_create.php?error=Section Name is required&$user_data");
	}

	else if (empty($fullname)) {
		header ("Location: ../teacher_create.php?error=Section Name is required&$user_data");
	}


	
	
	else {

       $sql = "INSERT INTO students(id,lrnnumber,adviser_id,firstname, middlename,lastname,fullname,gender,suffix,
	   birthplace,birthday,age,parent,address,schoolyear,grade,section)
               VALUES('$id','$lrnnumber','$adviser_id','$firstname', '$middlename','$lastname','$fullname',	'$gender','$suffix',
			   '$birthplace','$birthday','$age',
			   '$address','$parent','$schoolyear','$grade','$section')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../teacher_read.php?success=Added Successfully");
		
       }else {
          header("Location:../admin_create.php?error=unkown error occured&$user_data");
       }
	}

}