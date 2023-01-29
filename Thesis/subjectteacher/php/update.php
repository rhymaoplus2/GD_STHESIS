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

	$sql = "SELECT * FROM students WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: ../teacher/teacher_read.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
        $id = validate($_POST['id']);

        $lrnnumber = validate($_POST['lrnnumber']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
        $lastname = validate($_POST['lastname']);
        //$gender = validate($_POST['gender']);
        $birthplace = validate($_POST['birthplace']);
      

        if (empty($id)) {
		header("Location: ../update.php?id=$id&error=First Name is required/Input new data");
	}

	if (empty($firstname)) {
		header("Location: ../update.php?id=$id&error=First Name is required/Input new data");
	}
        
        else if (empty($middlename)) {
		header("Location: ../update.php?id=$id&error=Middle Name is required/Input new data");
	}
        else if (empty($lastname)) {
		header("Location: ../update.php?id=$id&error=LRN number is required/Input new data");
	}
        
        else if (empty($lrnnumber)) {
		header("Location: ../update.php?id=$id&error=LRN number is required/Input new data");
	}

       // else if (empty($gender)) {
	//	header("Location: ../update.php?id=$id&error=Gender is required/Input new data");
	//}
        
        else if (empty($birthplace)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        
        else {

       $sql = "UPDATE students
               SET lrnnumber='$lrnnumber',firstname='$firstname', middlename='$middlename',lastname='$lastname',birthplace='$birthplace'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../teacher_search.php?success=successfully updated");
       }
       
       else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: teacher_read.php");
}