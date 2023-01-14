<?php
include "db_conn.php";

$sql = "SELECT * FROM students ORDER BY fullname DESC";    
$result = mysqli_query($conn,$sql);

if (isset($_POST['submit'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$subjectname = validate($_POST['subjectname']);
	$studentname = validate($_POST['studentname']);
	$grade = validate($_POST['grade']);
	$teacher = $_POST['teacher'];
	$duplicate=mysqli_query($conn,"select * from grade where studentname='$studentname'");
	$user_data =

	'subjectname='.$subjectname.
	'studentname='.$studentname.
	'grade='.$grade;
	'teacher='.$teacher;


	if (empty($grade))
	 {
		header ("Location:../rec.php?error=grade is required&$user_data");
	}


	
	if (mysqli_num_rows($duplicate)>0)
	{
		header ("Location:../rec.php?error=Student Already Got a Grade&$user_data");
	}
	
	else {

       $sql = "INSERT INTO grade(subjectname,studentname,grade,teacher)
               VALUES('$subjectname','$studentname','$grade','$teacher')";

       $result = mysqli_query($conn, $sql);

       if ($result) {
		header("Location: ../rec.php?success=Added Successfully");
		 
       }
	 
	}



}
