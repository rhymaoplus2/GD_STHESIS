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
    $section = $_POST['section'];
    $adviser = $_POST['adviser'];
	$duplicate=mysqli_query($conn,
		"select * from grade where studentname='$studentname' ");
   
  
	 foreach($studentname as $index => $studentnames)
    {
        $s_studentname = $studentnames;
		$s_subjectname = $subjectname[$index];
        $s_grade = $grade[$index];
		$s_teacher = $teacher[$index];
        $s_section = $section[$index];
        $s_adviser = $adviser[$index];

        // $s_otherfiled = $empid[$index];

        $query = "INSERT INTO grade(studentname,subjectname,grade,teacher,section,adviser) 
		VALUES ('$s_studentname','$s_subjectname','$s_grade','$s_teacher','$s_section','$s_adviser')";
        $query_run = mysqli_query($conn, $query);
		
	}


   

   
   if($query_run)
   {
	   header("Location: ../subject1view.php?success=GRADES ADDED Successfully");
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