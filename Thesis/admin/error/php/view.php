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
    	header("Location: ../teacher/teacher_view.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
        $lrnnumber = validate($_POST['lrnnumber']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
        $lastname = validate($_POST['lastname']);
        $gender = validate($_POST['gender']);
        $birthplace = validate($_POST['birthplace']);
        $birthday = validate($_POST['birthday']);
        $suffix = validate($_POST['suffix']);
        $age = validate($_POST['age']);
        $address = validate($_POST['address']);
        $parent = validate($_POST['parent']);
    
  
        $schoolyear = validate($_POST['schoolyear']);
        $grade = validate($_POST['grade']);
        $section = validate($_POST['section']);

        $id = validate($_POST['id']);

        

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

        else if (empty($gender)) {
		header("Location: ../update.php?id=$id&error=Gender is required/Input new data");
	}
        
        else if (empty($birthplace)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($address)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($parent)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        else if (empty($age)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        else if (empty($schoolyear)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        else if (empty($section)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}

        
        
        else {

       $sql = "UPDATE students
               SET lrnnumber='$lrnnumber',firstname='$firstname', middlename='$middlename',
               lastname='$lastname',birthplace='$birthplace',
               suffix='$suffix',gender='$gender',
               birthday='$birthday',age='$age',
               address='$address',parent='$parent',schoolyear='$schoolyear',grade='$grade',section='$section'

               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../index.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: ../index.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: index.php");
}