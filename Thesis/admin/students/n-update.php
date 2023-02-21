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
        $lastname = validate($_POST['lastname']);
        $fullname = validate($_POST['fullname']);
        $suffix = validate($_POST['suffix']);
        $gender = validate($_POST['gender']);
        $birthplace = validate($_POST['birthplace']);
        $birthday = validate($_POST['birthday']);
        $age = validate($_POST['age']);
        $address = validate($_POST['address']);
        $parent = validate($_POST['parent']);
        $schoolyear = validate($_POST['schoolyear']);
        $section = validate($_POST['section']);


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
        else if (empty($lastname)) {
            header("Location: update.php?id=$id&error=Last Name is Required&$user_data");
    }
    else if (empty($fullname)) {
        header("Location: update.php?id=$id&error=Full Name is Required&$user_data");
}
else if (empty($suffix)) {
        header("Location: update.php?id=$id&error=Suffix is Required&$user_data");
}
else if (empty($gender)) {
        header("Location: update.php?id=$id&error=Gender is Required&$user_data");
}
else if (empty($birthplace)) {
        header("Location: update.php?id=$id&error=Birth Place is Required&$user_data");
}
else if (empty($birthday)) {
        header("Location: update.php?id=$id&error=Birth Date is Required&$user_data");
}
else if (empty($age)) {
        header("Location: update.php?id=$id&error=Age is Required&$user_data");
}
else if (empty($address)) {
        header("Location: update.php?id=$id&error=Address is Required&$user_data");
}
else if (empty($parent)) {
        header("Location: update.php?id=$id&error=Parent is Required&$user_data");
}
else if (empty($schoolyear)) {
        header("Location: update.php?id=$id&error=School Year is Required&$user_data");
}
else if (empty($section)) {
        header("Location: update.php?id=$id&error=Section is Required&$user_data");
}

























	 
        else {

       $sql = "UPDATE students
               SET firstname='$firstname',middlename='$middlename',lastname='$lastname',
               lrnnumber='$lrnnumber', fullname='$fullname',suffix='$suffix',gender='$gender',
               idnumber ='$idnumber',birthplace ='$birthplace',birthday ='$birthday',
               age='$age',address='$address',parent='$parent',schoolyear='$schoolyear'
               ,section='$section'
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