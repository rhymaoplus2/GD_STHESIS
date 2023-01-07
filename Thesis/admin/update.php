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

	$sql = "SELECT * FROM studentlist WHERE id=$id";
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
        //$gender = validate($_POST['gender']);
        $birthplace = validate($_POST['birthplace']);
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

       // else if (empty($gender)) {
	//	header("Location: ../update.php?id=$id&error=Gender is required/Input new data");
	//}
        
        else if (empty($birthplace)) {
		header("Location: ../update.php?id=$id&error=Birth Place is required/Input new data");
	}
        
        
        else {

       $sql = "UPDATE studentlist
               SET lrnnumber='$lrnnumber',firstname='$firstname', middlename='$middlename',lastname='$lastname',birthplace='$birthplace'
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