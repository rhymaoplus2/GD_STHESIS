<?php 

if (isset($_GET['subjectid'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$subjectid = validate($_GET['subjectid']);

	$sql = "SELECT * FROM subjects WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location:../subjectlist.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
        $subjectid = validate($_POST['subjectid']);
	$subjectname = validate($_POST['subjectname']);
	$teacherid = validate($_POST['teacherid']);
        $subjectgrouphead = validate($_POST['subjectgrouphead']);
	$subjectid = validate($_POST['subjectid']);

        

	if (empty($subjectid))
	 {
		header ("Location:subjectlist/update.php?error=Subject ID is required&$user_data");
	}



	
	else if (empty($subjectname)) {
		header ("Location:subjectlist/update.php?error=Subject Name is required&$user_data");
	}

	else if (empty($teacherid)) {
		header ("Location: subjectlistupdate.php?error=Subject Teacher ID NOT FOUND&$user_data");
	}
        else if (empty($subjectgrouphead)) {
		header ("Location: subjectlist/update.php?error=Subject Teacher ID NOT FOUND&$user_data");
	}
  
        else {

       $sql = "UPDATE subjects
               SET subjectid='$subjectid',subjectname='$subjectname', teacherid='$teacherid',
               subjectgrouphead='$subjectgrouphead'
               WHERE id=$id";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../subjectlist.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: ../subjectlist.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}else {
	header("Location: subjectlist.php");
}