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


	<div class="container my-5">
		<div class="row">
			<div class="col-md-6 mx-auto">
			<div class="card">

			
<div class="card-body">
  <form method="POST" action="">
    <div class="form-group mb-3">
      <label for="quarter" class="mb-3 text-center"><b> Quarter : </b> </label>
      <select class="form-select" name="quarter" id="quarter" required>
  <option value="" selected disabled>Select</option>
  <option value="FIRST"<?php if(isset($_SESSION['quarter']) && $_SESSION['quarter'] == 'FIRST') echo ' selected'; ?>>FIRST</option>
  <option value="SECOND"<?php if(isset($_SESSION['quarter']) && $_SESSION['quarter'] == 'SECOND') echo ' selected'; ?>>SECOND</option>
  <option value="THIRD"<?php if(isset($_SESSION['quarter']) && $_SESSION['quarter'] == 'THIRD') echo ' selected'; ?>>THIRD</option>
  <option value="FOURTH"<?php if(isset($_SESSION['quarter']) && $_SESSION['quarter'] == 'FOURTH') echo ' selected'; ?>>FOURTH</option>
</select>


      <script>
        document.addEventListener("DOMContentLoaded", function() {
          var quarterInput = document.getElementById('quarter');
          if(localStorage.getItem('quarter')){
            quarterInput.value = localStorage.getItem('quarter');
          }
          quarterInput.addEventListener('input', function(){
            localStorage.setItem('quarter', quarterInput.value);
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
		$quarter = mysqli_real_escape_string($conn, $_POST["quarter"]);
		
		
            $sql = "UPDATE settings SET quarter='$quarter'";

			if (mysqli_query($conn, $sql)) {
				echo "<p class='mt-3 alert alert-success'> <b>Updating</b> 
<span class='wave-text'>.</span>
<span class='wave-text'>.</span>
<span class='wave-text'>.</span> <br> Updating Senior High settings Name Would Take Some Time 


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