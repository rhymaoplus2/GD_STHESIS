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
	

	$user_data =
	
	'subjectname='.$subjectname;





	if (empty($subjectname))
	 {
		header ("Location:../create.php?error=Subject Name is required&$user_data");
	}




	
	else {

       $sql = "INSERT INTO subjects(subjectname)
               VALUES('$subjectname')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../index.php?success=Added Successfully");
		
       }
	   
       else {
          header("Location:../create.php?error=Special Characters are not Applicable!&$user_data");
       }
	   
	
	}



}


