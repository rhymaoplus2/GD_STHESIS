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

	$sql = "SELECT * FROM users WHERE id='$id'  ";
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
   
	$id = validate($_POST['id']);
	$name = validate($_POST['name']);
 

    $role = validate($_POST['role']);
    $role2 = validate($_POST['role2']);
 
        

	if (empty($name))
	 {
        header("Location: update.php?id=$id&Name Required &$user_data");
	}



	 
        else {

       $sql = "UPDATE users
               SET name='$name',
              role='$role',role2='$role2'
               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: users.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: users.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}