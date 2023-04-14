


<?php include 'n-update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>

html, body {
  height: 100%;
}

body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
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
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
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
  </style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<video autoplay muted loop id="myVideo">
  <source src="../bg/students.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
<br>
<br>
<div class="fade-in mb-3">

	<div class="container">
		<form action="n-update.php" 
		      method="post">
      
    <div class="text-center text-white p-2 mb-4" style="font-size:24px; background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%); border-radius: 10px;">
    <label class="mb-0">
  <?php echo isset($_GET['error']) ? 'RETRY' : 'UPDATE: ' . $row['fullname']; ?>
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

<hr>
 
       <div class="skrol"style="height: 100px; overflow-y: auto;">
       <div class="form-group mb-3">
    <label for="" hidden class="form-label"><b>ID Number</b></label>
    <input 
    hidden
    value="<?=$row['id']?>"
	  type="text"
    class="form-control"
    id="id" 
    name="id">
    </div>

    <div class="form-group mb-3">
    <label for="" class="form-label"><b>LRN No.</b></label>
    <input 
    value="<?=$row['lrnnumber']?>"
	  type="text"
    class="form-control"
    id="lrnnumber" 
    name="lrnnumber">
    </div>


    
    <div class="form-group mb-3">
    <label for=""class="form-label"><b>ID Number</b></label>
    <input 

    value="<?=$row['idnumber']?>"
	  type="text"
    class="form-control"
    id="idnumber" 
    name="idnumber">
    </div>



<div class="form-group mb-3">
    <label for="" class="form-label"><b>First Name</b></label>
    <input 
    value="<?=$row['firstname']?>"
	  type="text"
    class="form-control"
    id="firstname" 
    name="firstname">
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Middle Name</b></label>
    <input 
    value="<?=$row['middlename']?>"
	  type="text"
    class="form-control"
    id="middlename" 
    name="middlename">
    </div>

 

    
    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Last Name</b></label>
    <input 
    value="<?=$row['lastname']?>"
	  type="text"
    class="form-control"
    id="lastname" 
    name="lastname">
    </div>

 

        
    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Full Name</b></label>
    <input 
    value="<?=$row['fullname']?>"
	  type="text"
    class="form-control"
    id="fullname" 
    name="fullname">
    </div>

  
    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Suffix</b></label>
    <input 
    value="<?=$row['suffix']?>"
	  type="text"
    class="form-control"
    id="suffix" 
    placeholder="Jr. / Sr. / Leave Blank"
    name="suffix">
    </div>


      
    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Gender</b></label>
    <input 
    value="<?=$row['gender']?>"
	  type="text"
    class="form-control"
    id="gender" 
    placeholder="Male"
    name="gender">
    </div>

	        


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Birth Place</b></label>
    <input 
    value="<?=$row['birthplace']?>"
	  type="text"
    class="form-control"
    id="birthplace" 
    name="birthplace">
    </div>

 

    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Birth Date</b></label>
    <input 
    value="<?=$row['birthday']?>"
	  type="date"
    class="form-control"
    id="birthday" 
    name="birthday">
    </div>

    
    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Age</b></label>
    <input 
    value="<?=$row['age']?>"
	  type="text"
    class="form-control"
    id="age" 
    name="age">
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Address</b></label>
    <input 
    value="<?=$row['address']?>"
	  type="text"
    class="form-control"
    id="address" 
    name="address">
    </div>

    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Gurdian</b></label>
    <input 
    value="<?=$row['parent']?>"
	  type="text"
    class="form-control"
    id="parent" 
    name="parent">
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>School Year</b></label>
    <input 
    value="<?=$row['syear']?>"
	  type="text"
    class="form-control"
    id="syear" 
    name="syear">
    </div>

    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Year Level</b></label>
    <input 
    value="<?=$row['grade']?>"
	  type="text"
    class="form-control"
    placeholder="12"
    id="grade" 
    name="grade">
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Section</b></label>
    <input 
    value="<?=$row['section']?>"
	  type="text"
    class="form-control"
    placeholder="Lilac"
    id="section" 
    name="section">
    </div>

  
    </div>
    <br>
    <hr>
    <div class="form-group mb-3">
    <div class="d-flex justify-content-center">
  <label for="" class="form-label text-center"><i><b>Subjects</b></i></label>
</div>



    <div class="skrol"style="height: 100px; overflow-y: auto;">
    <select name="subject1" id="subject1" class="form-control text-center mb-3">
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
<select name="subject2" id="subject2" class="form-control text-center mb-3">
<?php
// Add blank option if subject2 has no value
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
<select name="subject3" id="subject3" class="form-control text-center mb-3">
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
<select name="subject4" id="subject4" class="form-control text-center mb-3">
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
<select name="subject5" id="subject5" class="form-control text-center mb-3">
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
<select name="subject6" id="subject6" class="form-control text-center mb-3">
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
<select name="subject7" id="subject7" class="form-control text-center mb-3">
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
<select name="subject8" id="subject8" class="form-control text-center mb-3">
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
<select name="subject9" id="subject9" class="form-control text-center mb-3">
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
<select name="subject10" id="subject10" class="form-control text-center mb-3">
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



</div>
       <br>


          <button type="submit" class="btn btn-primary" 
name="update" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='teacher_read.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

	
	    </form>
	</div>
  </div>
<br>
<br>
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