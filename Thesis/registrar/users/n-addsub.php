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
    } else {
    	header("Location:index.php");
    }
} else if(isset($_POST['update'])){
    include "db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

    $sub1 = validate($_POST['sub1']);
    $sub2 = validate($_POST['sub2']);
    $sub3 = validate($_POST['sub3']);
    $sub4 = validate($_POST['sub4']);
    $sub5 = validate($_POST['sub5']);
    $sub6 = validate($_POST['sub6']);
    $sub7 = validate($_POST['sub7']);
    $sub8 = validate($_POST['sub8']);
    $sub9 = validate($_POST['sub9']);
    $sub10 = validate($_POST['sub10']);

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

    $sql = "UPDATE users SET 
    sub1='$sub1',
    sub2='$sub2',
    sub3='$sub3',
    sub4='$sub4',
    sub5='$sub5',
    sub6='$sub6',
    sub7='$sub7',
    sub8='$sub8',
    sub9='$sub9',
    sub10='$sub10',
    sec1='$sec1',
    sec2='$sec2',
    sec3='$sec3',
    sec4='$sec4',
    sec5='$sec5',
    sec6='$sec6',
    sec7='$sec7',
    sec8='$sec8',
    sec9='$sec9',
    sec10='$sec10'
    WHERE id='$id'";

    $result = mysqli_query($conn, $sql);
    $sub_values = array($sub1, $sub2, $sub3, $sub4, $sub5, $sub6, $sub7, $sub8, $sub9, $sub10);

    // remove any empty values from the array
    $sub_values = array_filter($sub_values, function($value) {
        return $value !== '';
    });
    
    // check for duplicate values in sub columns
    if (count(array_unique($sub_values)) !== count($sub_values)) {
        header("Location: addsub.php?id=$id&error=Remove Duplicates&$user_data");
        exit();
    }
    
    $sec_values = array($sec1, $sec2, $sec3, $sec4, $sec5, $sec6, $sec7, $sec8, $sec9, $sec10);

    // remove any empty values from the array
    $sec_values = array_filter($sec_values, function($value) {
        return $value !== '';
    });
    
    // check for duplicate values in sec columns
    if (count(array_unique($sec_values)) !== count($sec_values)) {
        header("Location: addsub.php?id=$id&error=Remove Duplicates&$user_data");
         exit();
    }
    



    if ($result) {
        $sql = "SELECT name FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        header("Location: index.php?id=$id&success=Succesfully Updated to <b>$name</b>");

    }else {
        header("Location: addsub.php?id=$id&error=unknown error occurred&$user_data");
    }
}
?>
