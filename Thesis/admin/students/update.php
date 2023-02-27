


<?php include 'n-update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>


.container {
	min-height: 100vh;
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
	<div class="container">
		<form action="n-update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
        <audio controls autoplay  hidden>
<source src="../voice/please.mp3" type="audio/mpeg">
</audio>
		    </div>
		   <?php } ?>


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
<br>
<select name="suffix" id="suffix" >
  <option  value="Jr.">Jr.</option>
  <option value="Sr.">Sr.</option>
  <option value="">None</option>
</select>
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Gender</b></label>
<br>
<select name="gender" id="gender" >
  <option  value="">Select</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select>
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
    <label for="" class="form-label"><b>Parent</b></label>
    <input 
    value="<?=$row['parent']?>"
	  type="text"
    class="form-control"
    id="parent" 
    name="parent">
    </div>

    <div class="form-group mb-3">
    <label for="" class="form-label"><b>School Year</b></label>
    <br>
    <select name="syear" id="syear" >
  <option  value="2020-2021">2020-2021</option>
  <option value="2021-2022">2021-2022</option>
  <option value="2021-2022">2021-2022</option>
</select>
    </div>


    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Grade Level</b></label>
    <br>
    <select name="grade" id="grade" >
  <option  value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option  value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
    </div>




    <div class="form-group mb-3">
    <label for="" class="form-label"><b>Section</b></label>
    <br>
    <select name="section" id="section" >
  <option  value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option  value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
    </div>



		
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>


				   <a class="link-primary" href="teacher_read.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>


	
	    </form>
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