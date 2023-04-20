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
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-group mb-3">
                            <label for="schoolyear" class="mb-3 text-center"><b> Academic Year : </b> </label>
                            <input type="text" class="form-control" name="schoolyear" value="<?php echo isset($_SESSION['schoolyear']) ? $_SESSION['schoolyear'] : ''; ?>" id="schoolyear" required>
                            <script>
                                document.addEventListener("DOMContentLoaded", function() {
                                    var schoolyearInput = document.getElementById('schoolyear');
                                    if(localStorage.getItem('schoolyear')){
                                        schoolyearInput.value = localStorage.getItem('schoolyear');
                                    }
                                    schoolyearInput.addEventListener('input', function(){
                                        localStorage.setItem('schoolyear', schoolyearInput.value);
                                    });
                                });
                            </script>
                        </div>
                        <button type="submit" class="btn btn-primary" name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;">
                            <img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
                        </button>
                    </form>
                    <style>
                    </style>

<?php
                        include "../php/db_conn.php";
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $schoolyear = mysqli_real_escape_string($conn, $_POST["schoolyear"]);
                            // check if input value is in the format of "YYYY-YYYY"
                            if (!preg_match('/^\d{4}-\d{4}$/', $schoolyear)) {
                                echo "<p class='
mt-3 alert alert-danger'>Invalid school year format. Please enter the school year in the format of 'YYYY-YYYY'.</p>";
} else {
$sql = "UPDATE users SET schoolyear='$schoolyear'";
if (mysqli_query($conn, $sql)) {
echo "<div class='modal fade' id='successModal' tabindex='-1' aria-labelledby='successModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered'>
<div class='modal-content'>
<div class='modal-header text-white' style='  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);'>
<h5 class='modal-title' id='successModalLabel'>Success!</h5>
<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
</div>
<div class='modal-body'>
<p class='mt-3'>Academic year updating <span class='wave-text'>.</span><span class='wave-text'>.</span><span class='wave-text'>.</span><br> Updating Academic Year Would Take Some Time <br> Just logout and login back, thanks : )</p>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('#successModal').modal('show');
});
</script>";
} else {
echo "<div class='modal fade' id='errorModal' tabindex='-1' aria-labelledby='errorModalLabel' aria-hidden='true'>
<div class='modal-dialog modal-dialog-centered'>
<div class='modal-content'>
<div class='modal-header'>
<h5 class='modal-title' id='errorModalLabel'>Error</h5>
<button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
</div>
<div class='modal-body'>
<p class='mt-3'>Error updating school year: " . mysqli_error($conn) . "</p>
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
$('#errorModal').modal('show');
});
</script>";
}
}
}
   }
?>


  </body>
</html>