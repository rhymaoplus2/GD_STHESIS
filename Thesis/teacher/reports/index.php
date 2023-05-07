<?php 

   session_start();
   include "../php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <style>
html, body {
  height: 100%;
}


body {
  background-image: linear-gradient(-225deg, #D4FFEC 0%, #57F2CC 48%, #4596FB 100%);
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
  
	display:  flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
    background-color: white;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  padding: 30px;
  border: 10px;
  border-color: black;
  background-color: white;
 width: 1130px;
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
label{

    font-size: 25px;
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
<label class="text-center mb-3"> Consolidated Grades</label>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <table class="table">
        <thead style="  background-image: linear-gradient(-225deg, #D4FFEC 0%, #57F2CC 48%, #4596FB 100%);">
          <tr>
            <th class="text-dark text-center" colspan="4">Junior High Format</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('jhsq1.php', '_blank', 'width=auto,height=600')">Quarter 1</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('jhsq2.php', '_blank', 'width=auto,height=600')">Quarter 2</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('jhsq3.php', '_blank', 'width=auto,height=600')">Quarter 3</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('jhsq4.php', '_blank', 'width=auto,height=600')">Quarter 4</button>
          </td>
          </tr>
            <td></td>
            <td></td>
            <td><br><br></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center mt-3">
        <button class="btn btn-secondary mx-1 btn-sm" type="button" data-bs-target="#myCarousel" data-bs-slide-to="1">SHS Format</button>
      </div>
    </div>

    <div class="carousel-item">
      <table class="table fw-bold">
      <thead style="  background-image: linear-gradient(-225deg, #D4FFEC 0%, #57F2CC 48%, #4596FB 100%);">
          <tr>
            <th class="text-dark text-center" colspan="4">Senior High Format</th>
          </tr>
        </thead>
        <tbody>
          <tr>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shsq1.php', '_blank', 'width=auto,height=600')">Quarter 1</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shsq2.php', '_blank', 'width=auto,height=600')">Quarter 2</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shsq3.php', '_blank', 'width=auto,height=600')">Quarter 3</button>
          </td>
          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shsq4.php', '_blank', 'width=auto,height=600')">Quarter 4</button>
          </td>
          </tr>
            <tr>
            <td></td>
            <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shss1.php', '_blank', 'width=auto,height=600')">Semester 1</button>
          </td>

          <td>
          <button type="button" class="btn btn-primary" onclick="window.open('shss2.php', '_blank', 'width=auto,height=600')">Semester 2</button>
          </td>      <td></td>
          </tr>
        </tbody>
      </table>
      <div class="text-center mt-3">
        <button class="btn btn-secondary mx-1 btn-sm" type="button" data-bs-target="#myCarousel" data-bs-slide-to="0">JHS Format</button>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<script>
$(document).ready(function(){
  // Handle click events for the buttons
  $('.btn').on('click', function(){
    // Get the index of the current item
    var index = $('.carousel-inner .carousel-item.active').index();

    // Move to the next item
    $('#myCarousel').carousel((index + 1) % 2);
  });
});
</script>


</div>

<?php
            }
      
        ?>

  </body>
</html>
