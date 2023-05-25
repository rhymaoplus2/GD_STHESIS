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
    	header("Location: ../admin/read.php");
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
        $suffix = validate($_POST['suffix']);
        $birthplace = validate($_POST['birthplace']);
        $birthday = validate($_POST['birthday']);
        $age = validate($_POST['age']);
        $address = validate($_POST['address']);
        $parent = validate($_POST['parent']);
        $id = validate($_POST['id']);
        $adviser_id = validate($_POST['adviser_id']);


        

	if (empty($firstname)) {
		header("Location: ../admin_update.php?id=$id&error=First Name is required/Input new data");
	}
        
        else if (empty($middlename)) {
		header("Location: ../admin_update.php?id=$id&error=Middle Name is required/Input new data");
	}
        else if (empty($lastname)) {
		header("Location: ../admin_update.php?id=$id&error=LRN number is required/Input new data");
	}
 
        
        else if (empty($lrnnumber)) {
		header("Location: ../admin_update.php?id=$id&error=LRN number is required/Input new data");
	}

        else if (empty($birthplace)) {
		header("Location: ../admin_update.php?id=$id&error=Birth Place is required/Input new data");
	}

        else if (empty($birthday)) {
		header("Location: ../admin_update.php?id=$id&error=Birth Day is required/Input new data");
	}
        else if (empty($age)) {
		header("Location: ../admin_update.php?id=$id&error=Birth Day is required/Input new data");
	}


        else if (empty($address)) {
		header("Location: ../admin_update.php?id=$id&error=Address is required/Input new data");
	}
        
        else if (empty($parent)) {
		header("Location: ../admin_update.php?id=$id&error=Parent or Guardian is required/Input new data");
	}
        else if (empty($adviser_id)) {
		header("Location: ../admin_update.php?id=$id&error=Advise ID Required");
	}
        else {

       $sql = "UPDATE students
               SET lrnnumber='$lrnnumber',firstname='$firstname',
        middlename='$middlename',lastname='$lastname',suffix='$suffix',
               birthplace='$birthplace',birthday='$birthday',
               address='$address',parent='$parent',age='$age',adviser_id='$adviser_id'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully updated");
       }
       
       else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: read.php");
}