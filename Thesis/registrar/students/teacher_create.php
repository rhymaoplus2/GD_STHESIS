<?php 
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>ADD NEW STUDENT</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <style>



html, body {
  height: auto;
}

body {
  background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);
  background-repeat: no-repeat;
  background-size: cover;
}



.container {
  
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  width: 1000px;
}
.form-control{

  width: 200px;
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:white;
}

.link-right {
	display: flex;
	justify-content: flex-end;
}


.link-center {
	display: flex;
	justify-content: flex-end;
}






.thead
{
font-size: 10px;;

}







  .nav-item
  {
  
      color:black;
  
  }
  .subjectlist{
  
      margin-left: 5rem;
      margin-top: 5rem;
  }
  
  .studentlist{
  
  margin-left: 20rem;
  margin-top: 5rem;
  }
  
  
  .button{
  
      margin-left: 5rem;
      margin-top: 11rem;
  }
  
  
  .button1{
  
  margin-left: 5rem;
  margin-top: 9.5rem;
  }
  
  .title{
      margin-left: 40rem;
      margin-top: 1rem;
      font-size: 3.5rem;
  }
  .text1
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }
  
  .text2
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }




.top-container {
    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
  }
  
  .header {
   
    background-color: white;
    color: #f1f1f1;
  }
  
  .content {
    padding: 16px;
  }
  
  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 102px;
  }
  #myVideo {

width: 100vw;
height: 100vh;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
  }
  .skrol {
  height: 300px;
  overflow-y: auto;
  padding-right: 20px; /* Add padding to the right side of the element */
}

/* For webkit-based browsers */
.skrol::-webkit-scrollbar {
  width: 10px;
}

.skrol::-webkit-scrollbar-track {
  background-color: #f1f1f1;
}

.skrol::-webkit-scrollbar-thumb {
  background-color: #888;
  border-radius: 5px;
}

/* For other browsers */
.skrol {
  scrollbar-width: thin;
}

.skrol::-webkit-scrollbar-track {
  background-color: #f1f1f1;
}

.skrol::-webkit-scrollbar-thumb {
  background-color: #888;
  border-radius: 5px;
}

.btn-primary:hover img,
.btn-danger:hover img {
    transform: scale(1.2);
    transition: transform 0.5s ease;
}


.fade-in {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
label{

  text-align: left!important;
}
      </style>
</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





<!--  CRUD AREA -->
<br>
<div class="fade-in text-left">

<div class="container text-left">

<form action="./php/create.php"
      method="post">

<div class=" text-white   text-center p-2 mb-4" style="font-size:24px;

background-image: linear-gradient(to right, #f83600 0%, #f83600 100%);">
    <label class="mb-0">
  <?php echo isset($_GET['error']) ? 'RETRY' : '<b>ADD NEW STUDENT </b>' ?>
</label>


</div>


<?php if (isset($_GET['error'])) { ?>
  <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#errorModal">
    Open Error Modal
  </button>

  <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="errorModalLabel">Oops!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <div class="text-white alert alert-danger bg-transparent" role="alert">
    <?php echo $_GET['error']; ?>!
  </div>
</div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
      errorModal.show();
    });
  </script>
<?php } ?>

<div class="     text-center">
  <label for="subjectteacher1" class="form-label text-dark mb-3"><i><b>Personal Details</b></i></label>
</div>
<hr>
<div class="skrol "style="height: 500px; overflow-y: auto;" >
<div class="form-group ">

<label for="adviser_id" class="form-label warning text-left"><b>ID Number</b></label>
<input style="width:100%;" type="text" class="form-control mb-3" id="idnumber" placeholder="ex: 12913937" name="idnumber" value="12913937">


<br>

<div class="form-group ">
    <label for="" class="form-label warning text-left" ><b>LRN no.</b></label>
    <input style="width:100%;"
    type="text" 
    class="form-control" 
    id="lrnnumber" 
    placeholder="ex: 12913937"
    name="lrnnumber">
  </div>



  <br>
  <div class="mb-3   1">
  <label for="adviser_id" class="form-label warning text-left"><b>ADVISER</b></label>
  <select class="form-select" id="adviser_id" name="adviser_id">
    <?php
      // Replace "your_database_name" and "your_table_name" with your actual database and table names
      require "./php/db_conn.php";

      $result = mysqli_query($conn, "SELECT name FROM users WHERE (role='adviser' OR role2='adviser') AND status = 1");
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
      }
      mysqli_close($conn);
    ?>
  </select>
</div>





<div class="form-group   1">
  <label for="exampleInputEmail1" class="form-label text-left"><b>First Name</b></label>
  <input style="width:100%;"
    type="text" 
    class="form-control" 
    id="firstname" 
    placeholder="ex: Reyris"
    name="firstname"
    oninput="checkFullName()"
  >
</div>
<br>

<div class="mb-3   1">
  <label for="exampleInputEmail1" class="form-label text-left"><b>Middle Name</b></label>
  <input style="width:100%;"
    type="middlename" 
    class="form-control" 
    id="middlename" 
    placeholder="ex: Perolino"
    name="middlename"
    oninput="checkFullName()"
  >
</div>

<div class="mb-3   1">
  <label for="exampleInputEmail1" class="form-label text-left"><b>Last Name</b></label>
  <input style="width:100%;"
    type="lastname" 
    class="form-control" 
    id="lastname" 
    placeholder="ex: Milmao"
    name="lastname"
    oninput="checkFullName()"
  >
</div>

<div class="mb-3   1">
  <label for="exampleInputEmail1" class="form-label text-left"><b>Full Name</b></label>
  <input style="width:100%;"
    type="fullname" 
    class="form-control" 
    id="fullname" 
    placeholder="ex: Milmao Reyris Perolino"
    name="fullname"
    oninput="checkFullName()"
  >
  <small id="name-comment" class="text-danger d-none">Please input the same value</small>
</div>

<script>
  function checkFullName() {
    const firstName = document.getElementById("firstname").value.trim();
    const middleName = document.getElementById("middlename").value.trim();
    const lastName = document.getElementById("lastname").value.trim();
    const fullName = document.getElementById("fullname").value.trim();
    const fullNameWithoutSpaces = `${firstName} ${middleName} ${lastName}`.trim();

    const comment = document.getElementById("name-comment");
    const isFullNameEqual = fullNameWithoutSpaces === fullName;

    if (fullName && fullNameWithoutSpaces && !isFullNameEqual) {
      comment.classList.remove("d-none");
    } else {
      comment.classList.add("d-none");
    }
  }
</script>




  <div class="from-group mb-3   1">
                                <label for="" class="text-left"><b>Suffix</b></label>
                                <select style="width:100%"  name="suffix" id="suffix" class="form-control">
                                    <option value=" "><b>None</b></option>
                                    <option value="Jr."><b>Jr.</b></option>
                                    <option value="Sr."><b>Sr.</b></option>
                                </select>
                            </div>



                       <div class="from-group mb-3">
                                <label for="" class="text-left"><b>Gender</b></label>
                                <select style="width:100%"  name="gender" id="gender" class="form-control">
                                    <option value="Male"><b>Male</b></option>
                                    <option value="Female"><b>Female</b></option>
                                </select>
                            </div>



  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Birth Place</b></label>
    <input style="width:100%;"
    type="text" 
    class="form-control" 
    id="birthplace"
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="birthplace">

  </div>
  
  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Birth Date</b></label>
    <input style="width:100%;"
    type="date" 
    class="form-control" 
    id="birthday" 
    placeholder="ex: August 17 2000"
    name="birthday">

  </div>

  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Age</b></label>
    <input style="width:100%;"
    type="age" 
    class="form-control" 
    id="age" 
    placeholder="ex: 22"
    name="age">

  </div>


  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Address</b></label>
    <input style="width:100%;"
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Parent/Guardian</b></label>
    <input style="width:100%;"
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Vergel Villagomez"
    name="parent">

  </div>
 

  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>School Year</b></label>
    <input style="width:100%;"
    type="" 
    class="form-control" 
    id="syear" 
    placeholder="ex: 2022-2023"
    name="syear">
  </div>



  <div class="from-group mb-3   1">
                                <label class="mb-2 text-left" for=""><b>Year Level</b></label>
                                
                                <select style="width:100%" name="grade" id="grade" class="form-control">
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>



  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Section Name</b></label>
    <input style="width:100%;"
    type="" 
    class="form-control" 
    id="section" 
    placeholder="ex: Lilac"
    name="section">
  </div>
<hr>

</div>
  <div hidden  class="mb-3   1">
  <div class="mb-3   text-center ">
  <label for="subjectteacher1" class="form-label text-danger mb-3"><b><b>Subject Teachers</b></b></label>
</div>

  <select class="form-control" id="subjectteacher1" name="subjectteacher1">
  <option value=""><b>Select Subject Teacher</b></option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  
  
  <select class="form-control" id="subjectteacher2" name="subjectteacher2">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher3" name="subjectteacher3">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>


  <select class="form-control" id="subjectteacher4" name="subjectteacher4">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher5" name="subjectteacher5">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher6" name="subjectteacher6">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher7" name="subjectteacher7">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher8" name="subjectteacher8">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher9" name="subjectteacher9">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>


  <select class="form-control" id="subjectteacher10" name="subjectteacher10">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>
    </div>
<hr>

<div class="text-center">
<label for="subjectteacher1" class="form-label text-cneter text-dark mb-3"><i><b>Subjects</b></i></label>

</div>


 

   <select style="width:100%"  name="subject1" id="subject1" class="form-control   1 mb-3">
    <?php
    // Add blank option if sub5 has no value
    if(empty($row['subject1'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject1'].'" selected>'.$row['subject1'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject1']) && $row['subject1']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select style="width:100%"  name="subject2" id="subject2" class="form-control   1 mb-3">
    <?php
    // Add blank option if sub5 has no value
    if(empty($row['subject2'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject2'].'" selected>'.$row['subject2'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject2']) && $row['subject2']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject3" id="subject3" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject3 has no value
    if(empty($row['subject3'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject3'].'" selected>'.$row['subject3'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject3']) && $row['subject3']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject4" id="subject4" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject4 has no value
    if(empty($row['subject4'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject4'].'" selected>'.$row['subject4'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject4']) && $row['subject4']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject5" id="subject5" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject5 has no value
    if(empty($row['subject5'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject5'].'" selected>'.$row['subject5'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject5']) && $row['subject5']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject6" id="subject6" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject6 has no value
    if(empty($row['subject6'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject6'].'" selected>'.$row['subject6'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject6']) && $row['subject6']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject7" id="subject7" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject7 has no value
    if(empty($row['subject7'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject7'].'" selected>'.$row['subject7'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject7']) && $row['subject7']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject8" id="subject8" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject8 has no value
    if(empty($row['subject8'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject8'].'" selected>'.$row['subject8'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject8']) && $row['subject8']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject9" id="subject9" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject9 has no value
    if(empty($row['subject9'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject9'].'" selected>'.$row['subject9'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject9']) && $row['subject9']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>
<select style="width:100%"  name="subject10" id="subject10" class="form-control   1 mb-3">
    <?php
    // Add blank option if subject10 has no value
    if(empty($row['subject10'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['subject10'].'" selected>'.$row['subject10'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['subject10']) && $row['subject10']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>


<script>
  // Get all select elements with class "form-control"
const selectElements = document.querySelectorAll('.form-control');

// Loop through each select element and add an event listener for when the value changes
selectElements.forEach(select => {
  select.addEventListener('change', () => {
    // Store the selected value in local storage using the select element's id as the key
    localStorage.setItem(select.id, select.value);
  });

  // Retrieve the previously selected value from local storage and set it as the selected value
  const selectedValue = localStorage.getItem(select.id);
  if (selectedValue) {
    select.value = selectedValue;
  }
});

</script>











</div>
<span style="font-size:10.5px;"> "To ensure successful submission, take a moment to verify the accuracy of the details you've provided." </span>

<br>

<button type="submit" class="btn btn-primary" 
name="create" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='index.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>


</div>











 

</form>
</div>



</div>



<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>






</body>
</html>
<?php }else{
	header("Location: admin_create.php");
} ?>