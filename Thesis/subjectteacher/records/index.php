<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/records.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    

    html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
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
  <div class="row">

    <div class="col-md-7">
      
      <div class="border fade-in">
     
      <!-- <div class=" logo text-center">
  <img src="img/msu.png" class="d-block rotating-image" style="width:70px;">
</div>
-->
<div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
  <b class="fs-2" style="white-space: nowrap;">Students Records Management Page </b>
  
</div>
<hr>
        <div class="b " >
        <div style="display: flex;">
  <div style="flex: 1;">

  
    <img src="img/pik.gif" alt="Description of the image" style="max-width: 260%;">
  </div>
  <div style="flex: 3;">
    <table class="table table-bordered table-sm rounded-4" style="border-radius: 10px;">
      <thead class="text-center text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <tr>
          <th scope="col">My Handled Subjects</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub1
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub1"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center">
                    <a href="subject1view.php" class=" text-dark" style="background-color: white; border: none;">
                      <b><?php echo $Row["sub1"]; ?></b>
                    </a>
                  </td>
                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>



            <?php
              require "./php/db_conn.php";
              $name = $_SESSION['name'];

              $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub2
                        FROM users u
                        WHERE u.name = '$name';";
              $result = mysqli_query($conn, $query);
              if (mysqli_num_rows($result) > 0) {
            ?>
              <tbody>
                <?php
                  while ($Row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                      <?php if (empty($Row["sub2"])) { ?>
                        <td class="text-center"><b>-</b></td>
                        <td hidden  class="text-center"></td>
                      <?php } else { ?>
                        <td class="text-center">
                          <a href="subject2view.php" style="background-color: white; border: none;" class="text-dark">
                            <b><?php echo $Row["sub2"]; ?></b>
                          </a>
                        </td>
                      <?php } ?>
                    </tr>
                <?php
                  }
                ?>
              </tbody>
              <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub3
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub3"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject3view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub3"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub4
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub4"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject4view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub4"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub5
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub5"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject5view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub5"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub6
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub6"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject6view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub6"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub7
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub7"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject7view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub7"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub8
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub8"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject8view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub8"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub9
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub9"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject9view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub9"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>
  <?php
require "./php/db_conn.php";
$name = $_SESSION['name'];

$query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub10
          FROM users u
          WHERE u.name = '$name';";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
?>
  <tbody>
    <?php
      while ($Row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <?php if (empty($Row["sub10"])) { ?>
            <td class="text-center"><b>-</b></td>
            <td hidden  class="text-center"></td>
          <?php } else { ?>
            <td class="text-center">
              <a href="subject10view.php" style="background-color: white; border: none;" class="text-dark">
                <b><?php echo $Row["sub10"]; ?></b>
              </a>
            </td>
          <?php } ?>
        </tr>
    <?php
      }
    }
    ?>
  </tbody>

              
            <?php
              }
            }
            ?>
          </table>
          
        </div>
 

      </div>
      <!--
      <button id="rotate-btn" type="submit" class="btn btn-transparent mt-3 mb-3">
  <img src="img/eye.png" alt="Image" title="Add New Student" width="30" height="auto">
  <b></b>
</button>
          -->
          <span class="sm text-white">
    <b>Please be advised : </b> All displays on this table have been assigned by the administrator. If you have any concerns about missing or inappropriate subjects being displayed, we kindly request that you <b>contact</b> the <b> Administrator </b> without delay.
</span>
    </div>
    </div>
    </div>
    
    <div class="col-md-5 rounded" style="overflow: hidden;">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner rounded mb-3">
      <div class="carousel-item active">
        <img src="img/pic1.gif" class="d-block w-100" alt="First slide">
      </div>
      <div class="carousel-item">
        <img src="img/pic2.gif" class="d-block w-100" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img src="img/pic3.gif" class="d-block w-100" alt="Third slide">
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
  
  <div class="slide-up">
  <div>
  <span class="text-white" style=" text-align: justify;">
    <h6>
      Grades are an important aspect of the educational process that allow teachers to evaluate and communicate their students' academic performance. They provide a means for teachers to track students' progress throughout the school year and identify areas in which they may need additional support. By setting clear expectations and providing feedback on performance, grades help students understand where they stand academically and what they need to do to improve. In addition, grades enable teachers to communicate with parents and guardians about their child's progress and identify areas for collaboration. Overall, grades play a critical role in helping students achieve academic success and helping teachers support their students effectively.    
    </h6>
  </span>
 

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
