<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$subjectname = validate($_POST['subjectname']);
	$studentid = validate($_POST['studentid']);
	$grade = validate($_POST['grade']);

	$user_data =

	'subjectname='.$subjectname.
	'studentid='.$studentid.
	'grade='.$grade;

	if (empty($grade))
	 {
		header ("Location:../records.php?error=grade is required&$user_data");
	}



	
	else {

       $sql = "INSERT INTO grade(subjectname,studentid,grade)
               VALUES('$subjectname','$studentid','$grade')";
		
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ./records.php?success=Added Successfully");
		 
       }

	   
	  
	   
	 
	}



}


