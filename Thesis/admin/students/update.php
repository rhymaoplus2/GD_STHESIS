


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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
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
   width: 1000px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
}
.box {
	width: 100%;
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
  height: 250px;
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
      
    <div class="text-center text-white p-2 mb-4" style="font-size:24px; 
    
    background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); border-radius: 10px;">
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
      <div class="modal-content" style="
    background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
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
 
<div class="skrol"style="height: 250px; overflow-y: auto;">
       <div class="form-group mb-3">
    <label for="" class="form-label"><b>ID Number</b></label>
    <input 
    
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


          <button type="submit" class="btn btn-primary" 
name="update" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='index.php'">
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