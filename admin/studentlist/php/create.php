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
	$adviser_id = validate($_POST['adviser_id']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
	$lastname = validate($_POST['lastname']);
	$gender = validate($_POST['gender']);
	$suffix = validate($_POST['suffix']);
	$birthplace = validate($_POST['birthplace']);
	$birthday = validate($_POST['birthday']);
	$age = validate($_POST['age']);
	$address = validate($_POST['address']);
	$parent = validate($_POST['parent']);

	$user_data =
	'lrnnumber='.$lrnnumber.
	'&adviser_id='.$adviser_id.
	'firstname='.$firstname.
	'middlename='.$middlename. 
    'lastname='.$lastname.
	'&gender='.$gender.
    '&birthplace='.$birthplace.
	'&birthday='.$birthday.
	'&age='.$age.
    '&address='.$address.
	'&parent='.$parent.


    '&suffix='.$suffix;

	if (empty($lrnnumber))
	 {
		header ("Location: ../admin_create.php?error=LRN number is required&$user_data");
	}



	
	else if (empty($middlename)) {
		header ("Location: ../admin_create.php?error=Middle Name is required&$user_data");
	}

	else if (empty($firstname)) {
		header ("Location: ../admin_create.php?error=First Name is required&$user_data");
	}

	else if (empty($lastname)) {
		header ("Location: ../admin_create.php?error=Last Name is required&$user_data");
	}

	else if (empty($birthplace)) {
		header ("Location: ../admin_create.php?error=Birth Place is required&$user_data");
	}

	else if (empty($birthday)) {
		header ("Location: ../admin_create.php?error=Birth Day is required&$user_data");
	}

	else if (empty($address)) {
		header ("Location: ../admin_create.php?error=Address is required&$user_data");
	}

	else if (empty($gender)) {
		header ("Location: ../admin_create.php?error=Gender is required&$user_data");
	}

	
	else {

       $sql = "INSERT INTO students(lrnnumber,adviser_id,firstname, middlename,lastname,gender,suffix,
	   birthplace,birthday,age,parent,address)
               VALUES('$lrnnumber','$adviser_id','$firstname', '$middlename','$lastname',	'$gender','$suffix',
			   '$birthplace','$birthday','$age',
			   '$address','$parent')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../admin_read.php?success=Added Successfully");
		
       }else {
          header("Location:../admin_create.php?error=unkown error occured&$user_data");
       }
	}

}