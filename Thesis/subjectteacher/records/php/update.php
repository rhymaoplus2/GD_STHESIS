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

	$sql = "SELECT * FROM grade WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location:records.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
   
	$grade = validate($_POST['grade']);
	$id = validate($_POST['id']);

        

	if (empty($grade))
	 {
		
	}



	 
        else {

       $sql = "UPDATE grade
               SET grade='$grade'
               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../records.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: ../records.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}