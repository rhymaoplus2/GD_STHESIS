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
    	header("Location:update.php");
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
        $idnumber = validate($_POST['idnumber']);
	$firstname = validate($_POST['firstname']);
	$middlename = validate($_POST['middlename']);
        $lrnnumber = validate($_POST['lrnnumber']);


      if (empty($firstname)) {
                header("Location: update.php?id=$id&error=First Name is Required&$user_data");
        }
        else if (empty($middlename)) {
                header("Location: update.php?id=$id&error=Middle Name is Required&$user_data");
        }
        else if (empty($idnumber)) {
                header("Location: update.php?id=$id&error=ID Number is Required&$user_data");
        }
        else if (empty($lrnnumber)) {
                header("Location: update.php?id=$id&error=LRN Number is Required&$user_data");
        }





	 
        else {

       $sql = "UPDATE students
               SET firstname='$firstname',middlename='$middlename',lrnnumber='$lrnnumber',
               idnumber ='$idnumber'
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