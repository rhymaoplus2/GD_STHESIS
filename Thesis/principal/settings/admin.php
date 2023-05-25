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

  <style>

html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-repeat: no-repeat;

}

.head
{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 20px;
text-align: center;
  color:white;
  padding:5px;
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
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
 background-color: white;
  width:700px;
  padding:20px;
  border-radius: 20px;
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
<?php
include "../php/db_conn.php";

// Retrieve the user data from the database
$userQuery = "SELECT * FROM users WHERE id = 1";
$userResult = mysqli_query($conn, $userQuery);
$userData = mysqli_fetch_assoc($userResult);
?>
 <div class="container mt-5">
 <div class="row">
 <div class="head mb-3">
        <h2>Update Admin Account</h2>
</div>
        <form method="POST" action="update_process.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $userData['username']; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $userData['name']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </div>

					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
}
    ?>
  </body>
</html>