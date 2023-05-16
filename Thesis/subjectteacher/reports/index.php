<?php 

   session_start();
   include "../php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>REPORTS</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <style>
  
    html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;

}


.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fade-in1 {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn1 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.fade-in2 {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn2 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fade-in3 {
  animation: fadeIn 1.5s ease-in-out;
}

@keyframes fadeIn3 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.fade-in4 {
  animation: fadeIn 2s ease-in-out;
}

@keyframes fadeIn4 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fade-in5 {
  animation: fadeIn 2.5s ease-in-out;
}

@keyframes fadeIn5 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fade-in6 {
  animation: fadeIn 3s ease-in-out;
}

@keyframes fadeIn6 {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
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
 
}
.box {
	width: 700px;
  
}
.container table {
  padding: 20px;
  border: 10px;
  border-color: black;
  border-radius: 100px;
  background-color: white;
  width: 50%;
  float: right;
}


.border {
	padding: 15px;
  min-height: 450px;
  background-color: white;
border-radius: 20px;
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

  a {
  text-decoration: none;
  font-size: 16px; /* Change this value to adjust the initial font size of your link */
  transition: all 0.2s ease-in-out; /* This adds a smooth transition effect */
}

a:hover {
font-weight: bold; /* Change this value to adjust the font size when hovering over the link */
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
  .b{

    border: black;
    border:10px;
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

.carousel-item {
  transition-duration: 0.5s;  
}

#carouselExampleIndicators {
  opacity: 0;
  transform: translateY(-100%);
  transition: all 0.90s ease;
}

#carouselExampleIndicators.show {
  opacity: 1;
  transform: translateY(0);
}

.logo {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.logo img.zoom-image {
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  transform-origin: center center;
}

.logo img.zoom-image:hover {
  -webkit-transform: scale(1.2) translate(-5%, -5%);
  transform: scale(1.2) translate(-5%, -5%);
  z-index: 999;
}
.logo img.rotating-image {
  -webkit-transition: -webkit-transform 0.8s ease-in-out;
  transition: transform 0.8s ease-in-out;
}

.logo img.rotating-image:hover {
  -webkit-transform: rotate(360deg);
  transform: rotate(360deg);
}
.sm{
  font-size: 10px;
  text-align: justify;
}
.slide-up {
    opacity: 0;
    transform: translateY(50px);
    transition: opacity 0.5s ease-out, transform 0.5s ease-out;
  }
  
  .slide-up.show {
    opacity: 1;
    transform: translateY(0);
  }
  .btn {
  background-color: transparent !important;
  color: black;
  border:1px;
}
.btn:hover {
  background-color: transparent !important;
  color: black;
  border: 1px solid black;
}

    </style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php'); ?>
</div>


<div class="header" id="myHeader">
<?PHP include_once('header.php'); ?>
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


<!-- TITLE HERE    -->


<br>
<div class="container">
  <div class="row">

    <div class="col-md-7">
      
      <div class="border fade-in">
     
      <!-- <div class=" logo text-center">
  <img src="img/msu.png" class="d-block rotating-image" style="width:70px;">
</div>
-->
<div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
  <b class="fs-2" style="white-space: nowrap;">Printable Data</b>
  
</div>
<hr>
        <div class="b " >
        <div style="display: flex;">
  <div style="flex: 1;">

  
    <img src="img/typing.gif" alt="Description of the image" style="max-width: 260%;">
  </div>
  <div style="flex: 3;">
    <table class="table table-bordered table-sm rounded-4" style="border-radius: 10px;">
      <thead class="text-center text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <tr>
          <th scope="col">Select One Subject</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub1
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub1"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center" onclick="select()">
  <a class="text-dark" style="background-color: white; border: none;">
    <b><?php echo $Row["sub1"]; ?></b>
  </a>
</td>
<!--- SELECT -->


<!-- Modal -->
<div class="modal fade" id="select" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">SELECT FORMAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showModaljhs()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="showModal()" data-bs-dismiss="modal">
    Senior High School
  </button>
</li>
</div>

</ul>
      </div>
    </div>
  </div>
</div>


<script>
  function select() {
    $('#select').modal('show');
  }
</script>

<!--Pages Modals-->

<div class="modal fade" id="subject1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Masterlist: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="sub1m.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- JHS MODAL FRAME Quarter-->


<div class="modal fade" id="sub1q1jhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 1: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter1jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>




<div class="modal fade" id="sub1q2jhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 2: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter2jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub1q3jhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 3: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter3jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<div class="modal fade" id="sub1q4jhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 4: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter4jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="subject1quarter1Modaljhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Semester 1: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- SHS MODAL FRAME -->
<div class="modal fade" id="subject1quarter1Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Semester 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="subject1semester2Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Semester 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_semester2.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!--Quarter Modals -->
<div class="modal fade" id="sub1q1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter1.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub1q2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter2.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="sub1q3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 3: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter3.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub1q4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Quarter 4: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject1_quarter4.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<!-- Conso -->
<div class="modal fade" id="consoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Consolidated Grades: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="conso.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- Modal SHS-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">SHS - Printable Data Formats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for selecting different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject1Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject1quarter1Modal" data-bs-dismiss="modal">
    1st Semester Grades
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject1semester2Modal" data-bs-dismiss="modal">
    2nd Semester Grades
  </button>
</li>
</div>

<div class="fade-in3">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q1" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>

<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q2" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q3" data-bs-dismiss="modal">
      3rd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q4" data-bs-dismiss="modal">
      4th Quarter Grades
  </button>
</li>
</div>
</ul>
      </div>
    </div>
  </div>
</div>
<!-- JHS -->
<div class="modal fade" id="exampleModaljhs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Jhs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for selecting different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject1Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q1jhs" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q2jhs" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in4">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q3jhs" data-bs-dismiss="modal">
    3rd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in5">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub1q4jhs" data-bs-dismiss="modal">
    4th Quarter Grades
  </button>
</li>
</div>
<!-- 
<div class="fade-in6">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#consoModal" data-bs-dismiss="modal">
   Consolidated Grades
  </button>
</li>
</div>
-->
</ul>
      </div>
    </div>
  </div>
</div>
<script>
  function showModal() {
    $('#exampleModal').modal('show');
  }
</script>
<script>
  function showModaljhs() {
    $('#exampleModaljhs').modal('show');
  }


</script>


                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>



      
      <tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub2
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub2"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center" onclick="select3()">
  <a class="text-dark" style="background-color: white; border: none;">
    <b><?php echo $Row["sub2"]; ?></b>
  </a>
</td>
<!--- SELECT -->


<!-- Modal -->
<div class="modal fade" id="select3" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">SELECT FORMAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showmodalsub22jhs()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="showmodalsub22()" data-bs-dismiss="modal">
    Senior High School
  </button>
</li>
</div>

</ul>
      </div>
    </div>
  </div>
</div>


<script>
  function select3() {
    $('#select3').modal('show');
  }
</script>

<!--Pages Modals-->

<div class="modal fade" id="subject2Modal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Masterlist: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="sub2m.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- JHS MODAL FRAME Quarter-->


<div class="modal fade" id="sub2q1jhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 1: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter1jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>




<div class="modal fade" id="sub2q2jhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 2: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter2jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub2q3jhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 3: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter3jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<div class="modal fade" id="sub2q4jhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 4: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter4jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="subject2quarter1Modaljhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Semester 1: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- SHS MODAL FRAME -->
<div class="modal fade" id="subject2quarter1Modal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Semester 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="subject2semester2Modal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Semester 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_semester2.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!--Quarter Modals -->
<div class="modal fade" id="sub2q1" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter1.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub2q2" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter2.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="sub2q3" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 3: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter3.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub2q4" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Quarter 4: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject2_quarter4.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<!-- Conso -->
<div class="modal fade" id="consoModal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Consolidated Grades: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="conso.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- Modal SHS-->
<div class="modal fade" id="example2Modal" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">SHS - Printable Data Formats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject2Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject2quarter1Modal" data-bs-dismiss="modal">
    1st Semester Grades
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject2semester2Modal" data-bs-dismiss="modal">
    2nd Semester Grades
  </button>
</li>
</div>

<div class="fade-in3">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q1" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>

<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q2" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q3" data-bs-dismiss="modal">
      3rd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q4" data-bs-dismiss="modal">
      4th Quarter Grades
  </button>
</li>
</div>
</ul>
      </div>
    </div>
  </div>
</div>
<!-- JHS -->
<div class="modal fade" id="example2Modaljhs" tabindex="-1" aria-labelledby="example2ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example2ModalLabel">Jhs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject2Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q1jhs" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q2jhs" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in4">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q3jhs" data-bs-dismiss="modal">
    3rd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in5">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub2q4jhs" data-bs-dismiss="modal">
    4th Quarter Grades
  </button>
</li>
</div>
<!-- 
<div class="fade-in6">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#consoModal" data-bs-dismiss="modal">
   Consolidated Grades
  </button>
</li>
</div>
-->
</ul>
      </div>
    </div>
  </div>
</div>
<script>
  function showmodalsub22() {
    $('#example2Modal').modal('show');
  }
</script>
<script>
  function showmodalsub22jhs() {
    $('#example2Modaljhs').modal('show');
  }


</script>


                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>
      <tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub3
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub3"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center" onclick="select3()">
  <a class="text-dark" style="background-color: white; border: none;">
    <b><?php echo $Row["sub3"]; ?></b>
  </a>
</td>
<!--- SELECT -->


<!-- Modal -->
<div class="modal fade" id="select3" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">SELECT FORMAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showModal2jhs()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="showModal2()" data-bs-dismiss="modal">
    Senior High School
  </button>
</li>
</div>

</ul>
      </div>
    </div>
  </div>
</div>


<script>
  function select3() {
    $('#select3').modal('show');
  }
</script>

<!--Pages Modals-->

<div class="modal fade" id="subject3Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Masterlist: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="sub3m.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- JHS MODAL FRAME Quarter-->


<div class="modal fade" id="sub3q1jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 1: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter1jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>




<div class="modal fade" id="sub3q2jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 2: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter2jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub3q3jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 3: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter3jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<div class="modal fade" id="sub3q4jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 4: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter4jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="subject3quarter1Modaljhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 1: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- SHS MODAL FRAME -->
<div class="modal fade" id="subject3quarter1Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="subject3semester2Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester2.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!--Quarter Modals -->
<div class="modal fade" id="sub3q1" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter1.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub3q2" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter2.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="sub3q3" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 3: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter3.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub3q4" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 4: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter4.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<!-- Conso -->
<div class="modal fade" id="consoModal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Consolidated Grades: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="conso.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- Modal SHS-->
<div class="modal fade" id="example3Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">SHS - Printable Data Formats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3quarter1Modal" data-bs-dismiss="modal">
    1st Semester Grades
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3semester2Modal" data-bs-dismiss="modal">
    2nd Semester Grades
  </button>
</li>
</div>

<div class="fade-in3">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q1" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>

<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q2" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q3" data-bs-dismiss="modal">
      3rd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q4" data-bs-dismiss="modal">
      4th Quarter Grades
  </button>
</li>
</div>
</ul>
      </div>
    </div>
  </div>
</div>
<!-- JHS -->
<div class="modal fade" id="example3Modaljhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Jhs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q1jhs" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q2jhs" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in4">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q3jhs" data-bs-dismiss="modal">
    3rd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in5">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q4jhs" data-bs-dismiss="modal">
    4th Quarter Grades
  </button>
</li>
</div>
<!-- 
<div class="fade-in6">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#consoModal" data-bs-dismiss="modal">
   Consolidated Grades
  </button>
</li>
</div>
-->
</ul>
      </div>
    </div>
  </div>
</div>
<script>
  function showModal2() {
    $('#example3Modal').modal('show');
  }
</script>
<script>
  function showModal2jhs() {
    $('#example3Modaljhs').modal('show');
  }


</script>


                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>
      
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub4
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub4"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject4view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub4"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub5
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub5"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject5view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub5"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub6
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub6"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject6view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub6"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub7
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub7"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject7view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub7"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub8
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub8"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject8view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub8"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub9
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub9"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject9view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub9"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub10
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub10"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="javascript:void(0);" href="subject10view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub10"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>

              
            <?php
              }
            
            ?>
          </table>
          
        </div>
 

      </div>
      <!--
      <button id="rotate-btn" type="submit" class="btn btn-transparent mt-3 mb-3">
  <img src="img/eye.png" alt="Image" title="Add New Student" width="30" height="auto">
  <b></b>
</button>
          -->
          <span class="sm text-white">
    <b>Please be advised : </b> All displays on this table have been assigned by the administrator. If you have any concerns about missing or inappropriate subjects being displayed, we kindly request that you <b>contact</b> the <b> Administrator </b> without delay.
</span>
    </div>
    </div>
    </div>
    
    <div class="col-md-5 rounded" style="overflow: hidden;">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner rounded mb-3">
      <div class="carousel-item active">
        <img src="img/pic1.gif" class="d-block w-100" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="img/pic2.gif" class="d-block w-100" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="img/pic3.gif" class="d-block w-100" alt="Third slide">
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    
  </div>
  
  <div class="slide-up">
  <div>
  <span class="text-white" style=" text-align: justify;">
    <h6>
    "This page allows you to print data such as your students' grades and the master list of students in the subjects you handle.
Whether you need to print a list of students enrolled in a particular subject or print out individual grade reports, this page provides a convenient and efficient way to manage your classroom data. By utilizing this tool, you can streamline your administrative tasks and focus more on providing quality education to your students.Moreover, this page ensures the security and privacy of your data by implementing strict measures to protect it from unauthorized access. You can trust that your students' information will be kept confidential and will only be accessed by authorized personnel. Additionally, this page is user-friendly and easy to navigate, making it accessible to all users, even those who are not tech-savvy. With just a few clicks, you can have the data you need printed out and ready to use, saving you time and effort in managing your classroom."  </h6>
Milmao Reyris P. - Developer  </span>

</div>

          </div>
          <script>
    window.onload = function() {
      document.querySelector('.slide-up').classList.add('show');
    }
  </script>

<script>
window.addEventListener("load", function () {
  document.getElementById("carouselExampleIndicators").classList.add("show");
});
</script>

</div>

  </body>
</html>
