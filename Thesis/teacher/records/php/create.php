<?php
session_start();
include "db_conn.php";
if(isset($_POST['submit']))
{
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $studentname = $_POST['studentname'];
	$subjectname = $_POST['subjectname'];
    $grade = $_POST['grade'];
	$teacher = $_POST['teacher'];
	$duplicate=mysqli_query($conn,
		"select * from grade where studentname='$studentname' ");
   
  
	 foreach($studentname as $index => $studentnames)
    {
        $s_studentname = $studentnames;
		$s_subjectname = $subjectname[$index];
        $s_grade = $grade[$index];
		$s_teacher = $teacher[$index];

        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO grade(studentname,subjectname,grade,teacher) 
		VALUES ('$s_studentname','$s_subjectname','$s_grade','$s_teacher')";
        $query_run = mysqli_query($conn, $query);
		
	}


   

   
   if($query_run)
   {
	   header("Location: ../records.php?success=GRADES ADDED Successfully");
   }
     
	if (empty($s_grade))
	{
	   header ("Location:../rec.php?error=All Grades for each Students is required&$user_data");
   }
  
   if (mysqli_num_rows($duplicate)>0)
   {
	   header ("Location:../rec.php?error=All Students or Some of Them Already Got thier Grades <br> 
	   Click The Update Button To Update Students Grades &$user_data");
   }
}
?>