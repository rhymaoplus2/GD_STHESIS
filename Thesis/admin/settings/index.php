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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
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
a{
  text-decoration: none;
  color: black;
}
a:{
  text-decoration: none;
  color: black!important;
}
    </style>
</head>
<body>
   <!-- Logout Modal -->
   <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
                <h5 class="modal-title text-white" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="../img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" onclick="openBackupWindow()">
                </a>
            </div>
        </div>
    </div>
</div>
  
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
					<thead class="text-white"style=" 
          
          background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
						<tr>
							<th colspan="5">Settings</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
              <a href="schoolyear.php" type="button" class="boton mb-3" style="background-color: YOUR_COLOR;" >
  School Year


<b>
:
<?php
   include "../php/db_conn.php";

// Retrieve data from settings table
$sql = "SELECT schoolyear FROM users LIMIT 1";
$result = mysqli_query($conn, $sql);

// Display data using echo statement
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["schoolyear"]. "";
    }
} else {
    echo "0 results";
}


?>
</b>
</a>                      </td>

						
						<tr>
							<td>

              <a href="principal.php" type="button" class="boton mb-3" style="background-color: YOUR_COLOR;" >
 Principal :

<b>

<?php
   include "../php/db_conn.php";

// Retrieve data from settings table
$sql = "SELECT * FROM settings";
$result = mysqli_query($conn, $sql);

// Display data using echo statement
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["pname"]. "";
    }
} else {
    echo "0 results";
}


?>
</b>

</a>
							</td>
</tr>
<tr>
              <td>
<a href="semester.php" type="button" class="boton mb-3" style="background-color: YOUR_COLOR;" >
 Semester :

<b>

<?php
include "../php/db_conn.php";

// Retrieve data from settings table
$sql = "SELECT * FROM settings";
$result = mysqli_query($conn, $sql);

// Display data using echo statement
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "" . $row["semester"]. "";
}
} else {
echo "0 results";
}


?>
</b>
</a>
</td>		
						</tr>
				
            <tr>
              <td>
              <a href="quarter.php" type="button" class="boton mb-3" style="background-color: YOUR_COLOR;" >
 
Quarter :

<b>

<?php
include "../php/db_conn.php";

// Retrieve data from settings table
$sql = "SELECT * FROM settings";
$result = mysqli_query($conn, $sql);

// Display data using echo statement
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "" . $row["quarter"]. "";
}
} else {
echo "0 results";
}


?>
</b>

</a>
</td>		
						</tr>


						<tr>
							<td>





							<div class="modal fade" id="admin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="
      
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
        <h5 class="modal-title" id="exampleModalLabel">Admin Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="settings.php" width="100%" height="280"></iframe>
      </div>
    </div>
  </div>
</div>
<button disabled type="button" class="boton mb-3 " style="backgrp"data-bs-toggle="modal" data-bs-target="#admin" data-bs-dismiss="modal">
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