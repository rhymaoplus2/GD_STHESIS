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
		header ("Location:subjectlist/update.php?error=Subject ID is required&$user_data");
	}




	
	else {

       $sql = "INSERT INTO subjects(subjectname)
               VALUES('$subjectname')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		header("Location: ../subjectlist.php?success=Added Successfully");
		
       }
	   
       else {
          header("Location:../create.php?error=unkown error occured&$user_data");
       }
	   
	
	}



}


