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

	$sql = "SELECT * FROM subjects WHERE id='$id'";
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
        $subjectname = validate($_POST['subjectname']);
	$teacher1 = validate($_POST['teacher1']);
        $teacher2 = validate($_POST['teacher2']);
        $teacher3 = validate($_POST['teacher3']);
        $teacher4 = validate($_POST['teacher4']);
        $teacher5 = validate($_POST['teacher5']);
        $teacher6 = validate($_POST['teacher6']);
        $teacher7 = validate($_POST['teacher7']);
        $teacher8 = validate($_POST['teacher8']);
        $teacher9 = validate($_POST['teacher9']);
        $teacher10 = validate($_POST['teacher10']);



        $section = validate($_POST['section']);
        $section2 = validate($_POST['section2']);
        $section3 = validate($_POST['section3']);
        $section4 = validate($_POST['section4']);
        $section5 = validate($_POST['section5']);

	
	


      if (empty($subjectname)) {
                header("Location: update.php?id=$id&error=Subject Name is Required!&$user_data");
        }
      


















	 
        else {

       $sql = "UPDATE subjects
               SET subjectname='$subjectname',
               teacher1='$teacher1',
               teacher2='$teacher2',
               teacher3='$teacher3',
               teacher4='$teacher4',
               teacher5='$teacher5',
               teacher6='$teacher6',
               teacher7='$teacher7',
               teacher8='$teacher8',
               teacher9='$teacher9',
               teacher10='$teacher10',



               section='$section',
               section2='$section2',
               section3='$section3',
               section4='$section4',
               section5='$section5'
               




               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: subjectlist.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: update.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}