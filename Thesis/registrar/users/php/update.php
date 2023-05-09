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

	$sql = "SELECT * FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location:users.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
   
	$username = validate($_POST['username']);
        $name = validate($_POST['name']);
        $role = validate($_POST['role']);
	$id = validate($_POST['id']);

        

	if (empty($subjectname))
	 {
		
	}



	 
        else {

       $sql = "UPDATE users
               SET username='$username',password='$password',name='$name',role='$role'
               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: index.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: index.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}