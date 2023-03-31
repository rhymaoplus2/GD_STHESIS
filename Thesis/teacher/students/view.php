


<?php include './php/admin_update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>View</title>
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
  background-color: white;
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
 <br>
 <br>


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
		<form action="php/view.php" 
		      method="post">
            
		   <h4 class="display-10 text-center"> <?=$row['fullname'] ?> Information</h4><hr>
       <br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
           


       
       <div class="form-group">

<p class="fw-bold">ID No.</p>

<?=$row['id'] ?>


       </div>
       <br>
           <div class="form-group">

    <p class="fw-bold">Lrn. No.</p>
 
	<?=$row['lrnnumber'] ?>
  

           </div>
           
<!--
  <div class="form-group">
 

    <label for="" class="form-label">Adviser ID</label>
    <input 
	value="<?=$row['adviser_id'] ?>" 
    type="text" 
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: 12913937"
    name="adviser_id">
  </div>
       -->








 
       <div class="mb-3">
    <input
    type="hidden"
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: Science"
    name="adviser_id"
    value="<?php echo $_SESSION['id']?>"
    >
    
  </div>

       















  <div class="form-group">
  <p class="fw-bold">First Name</p>
	<?=$row['firstname'] ?>
  </div>
  <br>


  <div class="mb-3">
  <p class="fw-bold">Middle Name</p>
   <?=$row['middlename'] ?>

  </div>

  
  <div class="mb-3">
  <p class="fw-bold">Last Name</p>
    <?=$row['lastname'] ?>

  </div>

  
  <div class="mb-3">
  <p class="fw-bold">Suffix</p>
    <?=$row['suffix'] ?>
  </div>







      
  <div class="mb-3">
  <p class="fw-bold">Gender</p>
    <?=$row['gender'] ?>

  </div>




  <div class="mb-3">
  <p class="fw-bold">Birth Place</p>
    <?=$row['birthplace'] ?>
  </div>
  
  <div class="mb-3">
  <p class="fw-bold">Birth Date</p>
    <?=$row['birthday'] ?>
  </div>

  <div class="mb-3">
  <p class="fw-bold">Age</p>
    <?=$row['age'] ?>
  </div>


  <div class="mb-3">
  <p class="fw-bold">Address</p>
    <?=$row['address'] ?>

  </div>


  
  <div class="mb-3">
  <p class="fw-bold">Parent/Guardian</p>
   <?=$row['parent'] ?>
  </div>

  <div class="mb-3">
  <p class="fw-bold">School Year</p>
    <?=$row['syear'] ?>

  </div>


  
 
  <div class="mb-3">
  <p class="fw-bold">Grade Level</p>
    <?=$row['grade'] ?>

  </div>


  <div class="mb-3">
  <p class="fw-bold">Section Name</p>
    <?=$row['section'] ?>

  </div>





		   
	


		   
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
				   <a class="link-primary" href="teacher_read.php" display-40>
          <button type="button" class="btn btn-dark">

     Back
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