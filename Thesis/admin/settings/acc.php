<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link  href="js/bootstrap.min.css" rel="stylesheet">

  <style>


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

    </style>
</head>
<body>
<div class="header sticky-top" id="myHeader">
<?php include_once('header.php');?>
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






	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
			<div class="card">

					<!--
					<div class="card-header text-white" style=" background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
						<h4>Settings</h4>
					</div>
--><div class="card-body">
<form action="update-settings.php" method="POST">
      <div class="mb-3">
      <header class="text-center text-white" style="font-size:30px;
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); height:60px; line-height:60px; border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Principal Account';
        } ?>
    </b>
</header>
   <br> <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary" 
    name="update" style="background-color: transparent; 
    border: none; border-radius:100%; width:50px; height: 50px;">
      <img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
    </button>
    </form>
</div>


  </body>
</html>