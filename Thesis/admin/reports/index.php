<?php 

   session_start();
   include "../php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {  } ?>
<!DOCTYPE html>
<html>
<head>
	<title>REPORTS</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    

    html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-repeat: no-repeat;

}

.fade-in {
  animation: fadeIn 2s ease-in-out;
}

@keyframes fadeIn {
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
  min-height: 190px;
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
  .btn:focus,
.btn:active {
  outline: none;
  box-shadow: none;
}
.btn:hover {
  transform: scale(1.1);
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
 
      
      <div class="border fade-in">
     
      <!-- <div class=" logo text-center">
  <img src="img/msu.png" class="d-block rotating-image" style="width:70px;">
</div>
-->
<div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style=" 


background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
  <b class="fs-2" style="white-space: nowrap;">Student Printable Data</b>
  
</div>
<hr>
        <div class="b " >
        <div style="display: flex;">



  <div style="flex:2;">
    
  <img src="img/pik.gif" alt="Description of the image" style="max-width: 40%;">
  
    <table class="table table-bordered table-sm rounded-4" style="border-radius: 10px;">
      <thead class="text-center text-white" style="
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);      
      ">
        <tr>
          <th scope="col">Select Data</th>
        </tr>
      </thead>
      <tbody>
    
              <tr>
              
              <td class="text-center">
  <a class="text-dark" style="background-color: white; border: none;" href="permanent.php">
    <b>Permanent Records</b>
  </a>
</td> 
</tr>
<tr>
<td class="text-center">
  <a class="text-dark" style="background-color: white; border: none;" href="consolidated.php">
    <b>Consolidated Grades</b>
  </a>
</td> 
</tr>
<tr>

<td class="text-center">
<a class="text-dark" style="background-color: white; border: none;" href="#" data-bs-toggle="modal" data-bs-target="#modalGradeSheets">
  <b>Quarterly Grade Sheets</b>
</a>

  <!-- Modal -->
<div class="modal fade" id="modalGradeSheets" tabindex="-1" aria-labelledby="modalGradeSheetsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalGradeSheetsLabel">Grade Sheets</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="list-group">
      
          <a href="quarter1.php" class="list-group-item list-group-item-action">Quarter 1</a>
          <a href="quarter2.php" class="list-group-item list-group-item-action">Quarter 2</a>
          <a href="quarter3.php" class="list-group-item list-group-item-action">Quarter 3</a>
          <a href="quarter4.php" class="list-group-item list-group-item-action">Quarter 4</a>
          <a href="semester1.php" class="list-group-item list-group-item-action">Semester 1</a>
          <a href="semester2.php" class="list-group-item list-group-item-action">Semester 2</a>
        </div>
      </div>
    </div>
  </div>
</div>

</td> 
</tr>
</tbody>

          </table>
          
        </div>
 

      </div>

 

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

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
