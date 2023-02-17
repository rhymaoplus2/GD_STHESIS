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
   
	$sec1 = validate($_POST['sec1']);
        $sec2 = validate($_POST['sec2']);
        $sec3 = validate($_POST['sec3']);
        $sec4 = validate($_POST['sec4']);
        $sec5 = validate($_POST['sec5']);
        $sec6 = validate($_POST['sec6']);
        $sec7 = validate($_POST['sec7']);
        $sec8 = validate($_POST['sec8']);
        $sec9 = validate($_POST['sec9']);
        $sec10 = validate($_POST['sec10']);
    $id = validate($_POST['id']);
  

        

	if (empty($sec1))
	 {
        header("Location: addsub.php?id=$id&Name Required &$user_data");
	}



	 
        else {

       $sql = "UPDATE users
               SET sec1='$sec1',sec2='$sec2',sec3='$sec3',sec4='$sec4',sec5='$sec5',
               sec6='$sec6', sec7='$sec7',sec8='$sec8',sec9='$sec9',sec10='$sec10'
               WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: users.php?id=$id&success=successfully updated");
          
       }
       
       else {
          header("Location: addsub.php?id=$id&error=unknown error occurred&$user_data");
       }
	}
}