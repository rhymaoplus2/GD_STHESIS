<?php  

if(isset($_GET['id'])){
   include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM users
	        WHERE id='$id'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../users.php?success=successfully deleted");
   }else {
      header("Location: ../users.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../users .php");
}