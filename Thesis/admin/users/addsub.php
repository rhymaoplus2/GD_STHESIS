


<?php include 'n-addsub.php'; 

session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>



<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>


.container {
 height: 10px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.container form {
	width: 400px;
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
  html, body {
  height: 100%;

}

body {
  background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);
  background-size: cover;
  background-repeat: no-repeat;
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
.border{
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:30px;
  background-color: white;
  max-width:600px;

  margin: 0 auto;

}
.b::-webkit-scrollbar {
  width: 10px; /* Width of the scrollbar */
}

.b::-webkit-scrollbar-track {
  background-color: #f1f1f1; /* Color of the scrollbar track */
}

.b::-webkit-scrollbar-thumb {
  background-color: #888; /* Color of the scrollbar thumb */
  border-radius: 5px; /* Rounded corners of the scrollbar thumb */
}

.b::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Color of the scrollbar thumb on hover */
}


  </style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>



<br>
<div class="fade-in">
<div class="border">
<form class="mb-3 " action="n-addsub.php" 
		      method="post">
            
<header class="text-center text-white" style="font-size:30px; background: linear-gradient(to right, #0099ff 0%, #9933ff 100%); width:auto; height:60px; line-height:60px; border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Assign Subject/Section';
        } ?>
    </b>
</header>
<br>
<label for="" class="form-label text-center"><strong>Subjects</strong></label>
<br>  
<br>  

<div class="b" style="height: 100px; overflow-y: scroll; padding-right: 10px;">


<select name="sub1" id="sub1" class="form-control text-center mb-3">
 <option value="<?=$row['sub1']?>"><?=$row['sub1']?><br></br></option>
 <option value=""?></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['subjectname'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
  
    ?>
</select>

<select name="sub2" id="sub2" class="form-control text-center">
<option value="<?=$row['sub2']?>"><?=$row['sub2']?></option>
<option value=""?></option>
   <?php 
   $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
   $result = $conn->query($query);
   if($result->num_rows> 0){
       while($optionData=$result->fetch_assoc()){
       $option =$optionData['subjectname'];
   ?>
   <?php
   //selected option
   if(!empty($section) && $section== $option){
   // selected option
   ?>
   <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
   <?php 
continue;
  }?>
   <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
  <?php
   }}
 
   ?>
</select>


  </div>
  <label for="" class="form-label text-center"><strong>Sections</strong></label>
<br>
  <div class="b" style="height: 100px; overflow-y: scroll; padding-right: 10px;">


<div class="mb-3">


<select name="sec1" id="sec1" class="form-control text-center mb-3">
 <option value="<?=$row['sec1']?>"><?=$row['sec1']?></option>
 <option value=""?></option>
    <?php 
    $query ="SELECT name FROM section ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
  }
    ?>
</select>



<select name="sec2" id="sec2" class="form-control text-center">
<option value="<?=$row['sec2']?>"><?=$row['sec2']?></option>
<option value=""?></option>
   <?php 
   $query ="SELECT name FROM section ORDER BY id ASC";
   $result = $conn->query($query);
   if($result->num_rows> 0){
       while($optionData=$result->fetch_assoc()){
       $option =$optionData['name'];
   ?>
   <?php
   //selected option
   if(!empty($section) && $section== $option){
   // selected option
   ?>
   <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
   <?php 
continue;
  }?>
   <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
  <?php
   }}
 
   ?>
</select>

<br>





</div>












	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		 
          </div>



	
          <button type="submit" class="btn btn-primary " name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

<button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='users.php'">
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
