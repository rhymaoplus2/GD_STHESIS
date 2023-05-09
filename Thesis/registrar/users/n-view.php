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
    	header("Location:index.php");
    }


}else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}
   
	$name = validate($_POST['name']);
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $role2 = validate($_POST['role2']);
    $role3 = validate($_POST['role3']);
    $advisory = validate($_POST['advisory']);
    $st1 = validate($_POST['st1']);
    $id = validate($_POST['id']);

        

	if (empty($name))
	 {
        header("Location: update.php?id=$id&Name Required &$user_data");
	}



	 
        else {

       $sql = "UPDATE users
               SET name='$name',username='$username',
               password='$password',role='$role',role2='$role2',role3='$role3'
               ,advisory='$advisory',st1='$st1'
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