<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>


  html, body {

  height:auto;
}

body {

  background-size: cover;
  background-repeat: no-repeat;
}


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


.carousel-item img {
  border-radius: 10px;
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
.carousel-inner img {
  margin: auto;
}
.poster img
{
  margin: auto;
}

html, body {
  height:100%;
}

body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-size: cover;
  background-repeat: no-repeat;
}
  </style>
</head>

<body>

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

 

                    <div class="container">
                      
                    <br>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner.gif" class="d-block" style="width:70%;" alt="...">
    </div>
    <div class="carousel-item ">
      <img src="img/banner.gif" class="d-block" style="width:70%;" alt="...">
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


  <br>
  <div class="row text-center justify-content-center">
  <div class="col-2 text-center">
    
    <button type="button" class="btn btn-primary bg-white text-dark">
      <img src="button1.jpg" alt="Button 1 Image">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo nam modi nostrum, quod eligendi pariatur ullam veniam non neque adipisci earum! Quaerat temporibus neque nam illum in fugiat molestiae.
    
   
    </button>
  </div>
  <div class="col-2 text-center">
    <button type="button" class="btn btn-danger bg-white text-dark">
      <img src="button2.jpg" alt="Button 2 Image">
      
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo nam modi nostrum, quod eligendi pariatur ullam veniam non neque adipisci earum! Quaerat temporibus neque nam illum in fugiat molestiae.
    
    
    </button>
  </div>
  <div class="col-2 text-center">
    <button type="button" class="btn btn-warning bg-white text-dark">
      <img src="button3.jpg" alt="Button 3 Image">
      
       
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo nam modi nostrum, quod eligendi pariatur ullam veniam non neque adipisci earum! Quaerat temporibus neque nam illum in fugiat molestiae.
    
  </button>
  </div>
  <div class="col-2 text-center">
    <button type="button" class="btn btn-dark bg-white text-dark">
      <img src="button4.jpg" alt="Button 4 Image">
    
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo nam modi nostrum, quod eligendi pariatur ullam veniam non neque adipisci earum! Quaerat temporibus neque nam illum in fugiat molestiae.
    </button>
  </div>
</div>




</div>
</div>
</body>
</html>
<?php

}


