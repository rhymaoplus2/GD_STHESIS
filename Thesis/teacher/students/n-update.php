<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM students WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location:subjectlist.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
   
	$firstname = validate($_POST['firstname']);
	$id = validate($_POST['id']);

        

	if (empty($firstname))
	 {
		
	}



	 
        else {

       $sql = "UPDATE students
               SET firstname='$firstname'
               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: teacher_read.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: teacher_read.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}