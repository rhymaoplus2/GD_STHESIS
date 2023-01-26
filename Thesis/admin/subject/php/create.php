<?php 

if (isset($_POST['create'])) {
	include "db_conn.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
	$subjectid = validate($_POST['subjectid']);
	$subjectname = validate($_POST['subjectname']);
	$teacherid = validate($_POST['teacherid']);
	$subjectgrouphead = validate($_POST['subjectgrouphead']);
	$section = validate($_POST['section']);

	$user_data =
	
	'subjectname='.$subjectname.
	'teacherid='.$teacherid.
	'subjectgrouphead='.$subjectgrouphead;
	'section='.$section;




	
	 if (empty($subjectname)) {
		header ("Location:../create.php?error=Subject Name is required&$user_data");
	}




	
	else {

       $sql = "INSERT INTO subjects(subjectname,teacherid,subjectgrouphead,section)
               VALUES('$subjectname','$teacherid','$subjectgrouphead','$section')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../subjectlist.php?success=Added Successfully");
		
       }
	   
       else {
          header("Location:../create.php?error=unkown error occured&$user_data");
       }
	   
	
	}



}


