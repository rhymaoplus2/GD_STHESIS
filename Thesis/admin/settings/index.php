<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link  href="js/bootstrap.min.css" rel="stylesheet">
    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <style>
      .boton:hover {
    font-weight: bold;
  }
    html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;

}
.wave-text {
    display: inline-block;
    font-weight: bold;
    font-size: 20px;
    animation: wave 1s infinite;
  }
  
  @keyframes wave {
    0%, 100% {
      transform: translateY(0);
    }
    50% {
      transform: translateY(-5px);
    }
  }
  
  .wave-text:nth-child(even) {
    animation-delay: 0.1s;
  }
  .btn-primary:hover img,
.btn-danger:hover img {
    transform: scale(1.2);
    transition: transform 0.5s ease;
}
.container{

	border: none;
}
form{
	border: none;
}
.boton {
    background-color: transparent;
    border-color: transparent;
}
.tabled{
    background-color: white;
	border-radius: 10px;
}
    </style>
</head>
<body>
    
<div class="header sticky-top" id="myHeader">
<?PHP include_once('header.php');?>
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



<br>
<br>

<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				  <div class="carousel-inner">
				  <div class="carousel-item active">
				      <img src="img/pic2.gif" class="d-block w-100" alt="...">
				    </div>
				    <div class="carousel-item ">
				    <img src="img/photo1.gif" class="d-block w-100" alt="...">
				    </div>
				 
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</div>
			<div class="tabled col-md-8">
				<table class="table table-bordered">
					<br>
					<thead class="text-white"style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
						<tr>
							<th colspan="5">Settings</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>

                         <!-- 1st Quarter -->
<div class="modal fade" id="schoolyear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Set Academic Year</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="schoolyear.php" width="100%" height="450"></iframe>
      </div>
    </div>
  </div>
</div>
<button type="button" class="boton mb-3 " style="backgrp"data-bs-toggle="modal" data-bs-target="#schoolyear" data-bs-dismiss="modal">
School Year
</button>

                            </td>

						
						<tr>
							<td>

							<div class="modal fade" id="juniorprincipal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Set Junior High Principal Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="juniorprincipal.php" width="100%" height="280"></iframe>
      </div>
    </div>
  </div>
</div>
<button type="button" class="boton mb-3" style="backgrp" data-bs-toggle="modal" data-bs-target="#juniorprincipal" data-bs-dismiss="modal">
Junior High Principal
</button>



							</td>
					
						</tr>
						<tr>
							<td>





							<div class="modal fade" id="shsp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Set Senior High Principal Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="principal.php" width="100%" height="280"></iframe>
      </div>
    </div>
  </div>
</div>
<button type="button" class="boton mb-3 " style="backgrp"data-bs-toggle="modal" data-bs-target="#shsp" data-bs-dismiss="modal">
Senior High Principal
</button>





							</td>
			
						</tr>


						<tr>
							<td>





							<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="principal.php" width="100%" height="280"></iframe>
      </div>
    </div>
  </div>
</div>
<button type="button" class="boton mb-3 " style="backgrp"data-bs-toggle="modal" data-bs-target="#admin" data-bs-dismiss="modal">
Admin Profile
</button>





							</td>
			
						</tr>

            
					</tbody>
				</table>
			</div>
		</div>
	</div>

    <?php
    }

    ?>


  </body>
</html>