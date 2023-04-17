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

    </style>
</head>
<body>
<!--
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


-->




	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
			<div class="card">

					<!--
					<div class="card-header text-white" style=" background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
						<h4>Settings</h4>
					</div>
--><div class="card-body">
  <form method="POST" action="">
    <div class="form-group mb-3">
      <label for="pname" class="mb-3 text-center"><b> Senior High Principal : </b> </label>
      <input type="text" class="form-control" name="pname" value="<?php echo isset($_SESSION['pname']) ? $_SESSION['pname'] : ''; ?>" id="pname" required>

      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var pnameInput = document.getElementById('pname');
          if(localStorage.getItem('pname')){
            pnameInput.value = localStorage.getItem('pname');
          }
          pnameInput.addEventListener('input', function(){
            localStorage.setItem('pname', pnameInput.value);
          });
        });
      </script>
    </div>

    <button type="submit" class="btn btn-primary" 
    name="update" style="background-color: transparent; 
    border: none; border-radius:100%; width:50px; height: 50px;">
      <img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
    </button>
  </form>





<?php
	include "../php/db_conn.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$pname = mysqli_real_escape_string($conn, $_POST["pname"]);
		
		
            $sql = "UPDATE principal SET pname='$pname'";

			if (mysqli_query($conn, $sql)) {
				echo "<p class='mt-3 alert alert-success'> <b>Updating</b> 
<span class='wave-text'>.</span>
<span class='wave-text'>.</span>
<span class='wave-text'>.</span> <br> Updating Senior High Principal Name Would Take Some Time 


				<br> Just logout and login back , thanks : )</p>";
			} else {
				echo "<p class='mt-3 alert alert-danger'>Error updating: " . mysqli_error($conn) . "</p>";
			}
		}
	}
?>





					</div>
				</div>
			</div>
		</div>
	</div>
    <?php
    ?>
  </body>
</html>