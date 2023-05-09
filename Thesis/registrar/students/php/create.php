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
	$idnumber = validate($_POST['idnumber']);
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
	$syear = validate($_POST['syear']);
	$grade = validate($_POST['grade']);
	$section = validate($_POST['section']);
	$subjectteacher1 = validate($_POST['subjectteacher1']);
	$subjectteacher2 = validate($_POST['subjectteacher2']);
	$subjectteacher3 = validate($_POST['subjectteacher3']);
	$subjectteacher4 = validate($_POST['subjectteacher4']);
	$subjectteacher5 = validate($_POST['subjectteacher5']);
	$subjectteacher6 = validate($_POST['subjectteacher6']);
	$subjectteacher7 = validate($_POST['subjectteacher7']);
	$subjectteacher8 = validate($_POST['subjectteacher8']);
	$subjectteacher9 = validate($_POST['subjectteacher9']);
	$subjectteacher10 = validate($_POST['subjectteacher10']);

	$subject1 = validate($_POST['subject1']);
	$subject2 = validate($_POST['subject2']);
	$subject3 = validate($_POST['subject3']);
	$subject4 = validate($_POST['subject4']);
	$subject5 = validate($_POST['subject5']);
	$subject6 = validate($_POST['subject6']);
	$subject7 = validate($_POST['subject7']);
	$subject8 = validate($_POST['subject8']);
	$subject9 = validate($_POST['subject9']);
	$subject10 = validate($_POST['subject10']);

	$user_data =
	'id='.$id.
	'idnumber='.$idnumber.
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
	'&syear='.$syear.
	'&grade='.$grade.
	'&section='.$section.
	'&subjectteacher1='.$subjectteacher1.
	'&subjectteacher2='.$subjectteacher2.
	'&subjectteacher3='.$subjectteacher3.
	'&subjectteacher4='.$subjectteacher4.
	'&subjectteacher5='.$subjectteacher5.
	'&subjectteacher6='.$subjectteacher6.
	'&subjectteacher7='.$subjectteacher7.
	'&subjectteacher8='.$subjectteacher8.
	'&subjectteacher9='.$subjectteacher9.
	'&subjectteacher10='.$subjectteacher10.

	'&subject1='.$subject1.
	'&subject2='.$subject2.
	'&subject3='.$subject3.
	'&subject4='.$subject4.
	'&subject5='.$subject5.
	'&subject6='.$subject6.
	'&subject7='.$subject7.
	'&subject8='.$subject8.
	'&subject9='.$subject9.
	'&subject10='.$subject10
	
    ;

	if (empty($lrnnumber))
	 {
		header ("Location: ../teacher_create.php?error=LRN number is required&$user_data");
	}



	
	else if (empty($middlename)) {
		header ("Location: ../teacher_create.php?error=Middle Name is required&$user_data");
	}
	else if (empty($idnumber)) {
		header ("Location: ../teacher_create.php?error=ID is required&$user_data");
	}

	else if (empty($firstname)) {
		header ("Location: ../teacher_create.php?error=First Name is required&$user_data");
	}

	else if (empty($lastname)) {
		header ("Location: ../teacher_create.php?error=Last Name is required&$user_data");
	}




	else if (empty($gender)) {
		header ("Location: ../teacher_create.php?error=Gender is required&$user_data");
	}
	else if (empty($syear)) {
		header ("Location: ../teacher_create.php?error=School Year is required&$user_data");
	}


	else if (empty($section)) {
		header ("Location: ../teacher_create.php?error=Section Name is required&$user_data");
	}

	else if (empty($fullname)) {
		header ("Location: ../teacher_create.php?error=Section Name is required&$user_data");
	}


	
	
	else {

       $sql = "INSERT INTO students(id,idnumber,lrnnumber,adviser_id,firstname, middlename,lastname,fullname,gender,suffix,
	   birthplace,birthday,age,parent,address,syear,grade,section,
	   subjectteacher1,
	   subjectteacher2,
	   subjectteacher3,
	   subjectteacher4,
	   subjectteacher5,
	   subjectteacher6,
	   subjectteacher7,
	   subjectteacher8,
	   subjectteacher9,
	   subjectteacher10,
	   
	   subject1,
	   subject2,
	   subject3,
	   subject4,
	   subject5,
	   subject6,
	   subject7,
	   subject8,
	   subject9,
	   subject10

	   
	   
	   )
               VALUES('$id','$idnumber','$lrnnumber','$adviser_id','$firstname', '$middlename','$lastname','$fullname',	'$gender','$suffix',
			   '$birthplace','$birthday','$age',
			   '$address','$parent','$syear','$grade','$section'
			   ,'$subjectteacher1',
			   '$subjectteacher2',
			   '$subjectteacher3',
			   '$subjectteacher4',
			   '$subjectteacher5',
			   '$subjectteacher6',
			   '$subjectteacher7',
			   '$subjectteacher8',
			   '$subjectteacher9',
			   '$subjectteacher10',
			

			   
			   
			   
			   '$subject1',
			   '$subject2',
			   '$subject3',
			   '$subject4',
			   '$subject5',
			   '$subject6',
			   '$subject7',
			   '$subject8',
			   '$subject9',
			   '$subject10'
			   )";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../index.php?success=Added Successfully");
		
       }else {
          header("Location:../index.php?error=unkown error occured&$user_data");
       }
	}

}