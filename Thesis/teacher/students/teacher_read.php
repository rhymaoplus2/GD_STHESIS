<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
  


  .container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.container form {
	width: 1020px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
}
.box {
	width: 1050px;
}
.container table {
	padding: 30px;
	border-radius: 10px;
  
  background-color: white;
  border:10px;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  border:10px;
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
  form {
    display: flex;
    flex-direction: column;
    align-items: center;
    font-family: Arial, sans-serif;
    margin: 20px;
  }

  label {
    margin-bottom: 10px;
  }

  select {
    padding: 8px;
    border-radius: 4px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    width: 200px;
    font-size: 16px;
  }

  button[type="submit"] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  button[type="submit"]:hover {
    background-color: #3e8e41;
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
<div class="container" >
		<div class="box">
    <div class="content">
   <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
        <audio controls autoplay  hidden>
<source src="../voice/success.mp3" type="audio/mpeg">
</audio>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border">
            <table class="table table-bordered ">
            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           
        
    <form method="get" id="my-form">

  <select name="gender" id="gender">
    <option value="">FILTER BY GENDER</option>
    <option value="Male">Male</option>
    <option value="Female">Female</option>
  </select>
</form>

<script>
  document.getElementById('gender').addEventListener('change', function() {
    document.getElementById('my-form').submit();
  });
</script>

  <thead>
    <tr>
      <th scope="col"><h3 class="text-primary">Last Name</h3></th>
      <th scope="col"><h3 class="text-primary">First Name</h3></th>
      <th scope="col"><h3 class="text-primary">Middle Name</h3></th>
      <th scope="col"><h3 class="text-primary">LRN No.</h3></th>
      <th scope="col"><h3 class="text-primary">ID No.</h3></th>
      <th scope="col"><h3 class="text-primary">Gender</h3></th>
      <th scope="col" colspan="3"><h3 class="text-success text-center">Actions</h3></th>
    </tr>
  </thead>
  <tbody>
    <?php
      require "./php/db_conn.php";
      $name = $_SESSION["name"];
      $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
      $query = "SELECT * FROM students WHERE adviser_id = '$name'";
      if ($gender) {
        $query .= " AND gender = '$gender'";
      }
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($Row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td><b><?php echo $Row["lastname"]; ?></b></td>
            <td><b><?php echo $Row["firstname"]; ?></b></td>
            <td><b><?php echo $Row["middlename"]; ?></b></td>
            <td><b><?php echo $Row["lrnnumber"]; ?></b></td>
            <td><b><?php echo $Row["idnumber"]; ?></b></td>
            <td><b><?php echo $Row["gender"]; ?></b></td>
            <td>
              <a href="view.php?id=<?=$Row['id']?>" class="btn btn-dark text-center"><b>FULL DETAILS</b></a>
            </td>
          </tr>
          <?php
        }
      }
    }
  }
}

    ?>
  </tbody>
</table>








</div>
   </div>
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
<?php 

  

