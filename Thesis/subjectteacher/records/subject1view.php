<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/sub.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
  
	<title>HOME</title>

  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    

    a {
  text-decoration: none;
  font-size: 16px;
  transition: all 0.2s ease-in-out;
}

a:hover {
  font-weight: bold;
}

a img {
  transition: all 0.2s ease-in-out;
}

a:hover img {
  transform: scale(1.2); /* Increase the image size by 20% on hover */
}

html, body {
  height:100%;
}

body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-size: cover;
  background-repeat: no-repeat;
}


.b::-webkit-scrollbar {
  width: 10px; /* Width of the scrollbar */
}

.b::-webkit-scrollbar-track {
  background-color: #f1f1f1; /* Color of the scrollbar track */
}

.b::-webkit-scrollbar-thumb {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);/* Color of the scrollbar thumb */
  border-radius: 5px; /* Rounded corners of the scrollbar thumb */
}

.b::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Color of the scrollbar thumb on hover */
}

.fade-in {
  animation: fadeIn 1s ease-in-out;
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
  border-color: #f1f1f1;
}

.container form {
		padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  margin: 0 auto;
}
.box {
	width: 100%;
  
}
.container table {
	padding: 20px;
	border-radius: 10px;
   
  background-color:white;
  border: 10px;
}
.border {
	padding: 15px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:white;
 
  border: 10px;
}

.link-right {
	display: flex;
	justify-content: flex-end;
}


.link-center {
	display: flex;
	justify-content: flex-end;
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
  .red-text {
  color: red;
}

.cell-border {
  border: 1px solid black;
}


  td.disabled {
  pointer-events: none;
  color: black; /* Change color to something other than red */
}

.top-container {
    background-color: white;
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
  .text-center {
  text-align: center;
 /* default border color */
}

.failed {
  color: red;
}

.failed + .text-center {
  border-color: black; /* override border color for cells with red text */
}
  .sticky + .content {
    padding-top: 102px;
  }

  .addbutton
  {
    margin-left:80%;
  }
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }
  
  .btn-primary:hover {
    background-color: #0062cc;
    border-color: #005cbf;
  }
  #rotate-btn:hover img {
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
}
.btn-transparent:active {
  outline: none;
  border: none;
}
.btn-transparent:focus, 
.btn-transparent:hover {
  box-shadow: none;
  border: none;
}
#rotate-btn {
  transition: transform 0.5s;
}

#rotate-btn.clicked {
  transform: rotate(360deg);
}
/* CSS */
#rotate-btn {
  position: relative;
}

#rotate-btn:active img {
  animation: rotate .3s linear infinite;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

input::placeholder {
  color: gray;
  font-style: italic;
}
.ff {

  max-width: 100%;
}
.bold {
  font-weight: bold;
}

.tooltip .tooltip-inner,
.tooltip.tooltip-black .tooltip-inner {
  background-color: #000;
  color: #fff;
}

.tooltip .tooltip-arrow,
.tooltip.tooltip-black .tooltip-arrow {
  border-bottom-color: #000;
}

thead {
  position: sticky;
  top: 0;
}

    </style>
</head>
<body>

<div class="header" id="myHeader">
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

<div class="text text-center">
<?php if (isset($_GET['error'])) { ?>
  <div class="modal fade show" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: linear-gradient(to right, #ff0000 0%, #990000 100%);">
          <h5 class="modal-title text-white" id="errorModalLabel">Error!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-icon-color: white;"></button>
        </div>
        <div class="modal-body">
          <?php if ($_GET['error'] == 'wrong_password') { ?>
    
            <p>The password you entered is incorrect. Please try again.</p>
          <?php } else if ($_GET['error'] == 'username_not_found') { ?>
       
            <p>The password you entered is incorrect. Please try again..</p>
          <?php } else { ?>
            <p>The password you entered is incorrect. Please try again.</p>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
<script>
  var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {
    keyboard: false
  });
  errorModal.show();
</script>
</div>

<div class="text text-center">
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);">
          <h5 class="modal-title text-white" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-icon-color: white;"></button>
        </div>
        <div class="modal-body">
          <?php echo $_GET['success'];?>
        </div>
       
      </div>
    </div>
  </div>
<?php ?>


  </div>
  <script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
      keyboard: false
    });
    successModal.show();
  </script>
<?php } ?>

      <div class="container" >
		<div class="box">
    <div class="content">

    <div class="text-center mb-3">
      
    <!--

-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Print Grades From</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3> Semester 1 - Quarter : </h3>
      
        <button type="button" class="btn btn-primary" onclick="window.open('sub1p1.php', '_blank')">1</button>
        <button type="button" class="btn btn-secondary" onclick="window.open('sub1p2.php', '_blank')">2</button>
        <br>
        <h3> Semester 2 - Quarter : </h3>
       
        <button type="button" class="btn btn-success" onclick="window.open('sub1p3.php', '_blank')">3</button>
        <button type="button" class="btn btn-danger" onclick="window.open('sub1p4.php', '_blank')">4</button>
      </div>
    </div>
  </div>
</div>


</div>











<form method="POST" class="mb-3 d-flex flex-wrap align-items-center justify-content-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="col-md-1 mb-3">
      <a class="link-primary me-2" href="subject1.php" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-class="tooltip" title="Add Grades">
        <img src="img/add.gif" alt="Description of image" style="width: 35px;" class="img-fluid">
      </a>
    </div>
<div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style="padding: 10px; background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
  <b style="white-space: nowrap;"><?php echo substr($_SESSION['sub1'], 0, 30); ?> </b>
</div>

  
  <p class="ff mx-auto text-center text-wrap mb-3 bg-warning text-white rounded-pill shadow" id="input-text" style="font-size: 30px; width: 100px;"></p>
  <hr>
  
  <p id="selected-value" class="ff mx-auto text-center text-wrap mb-3 bg-warning text-white rounded-pill shadow" style="font-size: 30px; width: 100px;"></p>

  <div class="row">
    
   
    <div class="col-md-10 mb-3">
    <input type="text" class="form-control" id="search-input" placeholder="Search" oninput="filterTable()">

    </div>
  </div><div class="row text-center">
  <div class="row text-center">
  <div class="col">
    <select class="form-select fw-bold" id="year" name="year">
      <option value="">All Year Level</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
  </div>
  <div class="col">
    <select class="form-select fw-bold" id="gender" name="gender">
      <option value="">All Gender</option>
      <option value="MALE">Male</option>
      <option value="FEMALE">Female</option>
    </select>
  </div>
  <div class="col">
    <select class="form-select fw-bold" id="quarter" name="quarter">
      <option value="">All Quarter</option>
      <option value="FIRST">First</option>
      <option value="SECOND">Second</option>
      <option value="THIRD">Third</option>
      <option value="FOURTH">Fourth</option>
    </select>
  </div>
  <div class="col">
    <select class="form-select fw-bold" id="semester" name="semester">
      <option value="">All Semester</option>
      <option value="FIRST">First</option>
      <option value="SECOND">Second</option>
    </select>
  </div>

  <div class="col">
 
   
      <select class="form-select fw-bold" id="section" name="section">
        <option value="">All Sections</option>
        <?php
        include "php/db_conn.php";
        $sectionQuery = "SELECT name FROM section";
        $sectionResult = mysqli_query($conn, $sectionQuery);
        while ($sectionRow = mysqli_fetch_assoc($sectionResult)) {
            $sectionName = $sectionRow['name'];
            echo "<option value='" . $sectionName . "'>" . $sectionName . "</option>";
        }
        mysqli_close($conn); // Close the database connection
        ?>
      </select>
    </div>

  
  <div class="col">
    <select class="form-select fw-bold" id="sy" name="sy">
      <option value="">Life Time</option>
      <option value="2019-2020">2019-2020</option>
      <option value="2020-2021">2020-2021</option>
      <option value="2021-2022">2021-2022</option>
      <option value="2022-2023">2022-2023</option>
      <option value="2023-2024">2023-2024</option>
      <option value="2024-2025">2024-2025</option>
      <option value="2025-2026">2025-2026</option>
      <option value="2026-2027">2026-2027</option>
      <option value="2027-2028">2027-2028</option>
      <option value="2028-2029">2028-2029</option>
      <option value="2029-2030">2029-2030</option>
    </select>
  </div>


</div>


  <div class="text-center">
    <button id="rotate-btn" type="submit" class="btn btn-transparent mt-3 mb-3">
      <img src="img/eye.png" alt="Image" title="Show" width="30" height="auto">
      <b></b>
    </button>
  </div>
  <script>
    const rotateBtn = document.getElementById("rotate-btn");
    const rotateImg = document.getElementById("rotate-img");

    rotateBtn.addEventListener("click", () => {
      rotateImg.classList.add("rotate");
      setTimeout(() => rotateImg.classList.remove("rotate"), 1000);
    });
  </script>
</form>

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           

           <hr>
           <div class="fade-in">
           <div class="b tex" style="height: 255px; overflow-y: scroll; padding-right: 10px;" id="scrollable">
           <table class="table table-bordered" id="grade-table" style="">  

           <thead class="text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%); border-color:black;  ">
                  <tr>
                  <th scope="col" class="w-50 text-start">MALE</th>
<th hidden scope="col">Subject Name</th>
<th scope="col">Grade</th>


<th colspan="2" scope="col" class="w-50">
 
</th>

      </th>
                  
                </tr>
              </thead>
          
        <tbody class="text-dark" style="  background-color:#e6e6e6; border-color:black;  ">
        <?php 
require "./php/db_conn.php";
$name = $_SESSION['name'];
// Add the section column to the SELECT statement
$query = "SELECT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser, b.gender, b.status,
    a.name AS user_name, a.sub1 AS user_sub1, a.sec1, a.sgh1, b.remarks, b.quarter, b.semester, b.sy,b.success
    FROM grade b, users a
    WHERE REPLACE(LOWER(b.subjectname), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')  
    AND REPLACE(LOWER(b.teacher), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND REPLACE(LOWER(a.sub1), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')
    AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND b.gender = 'MALE' AND b.success='1'";

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $semester = $_POST["semester"];
  $quarter = $_POST["quarter"];
  $section = $_POST["section"];
  $sy = $_POST["sy"];
  $year = $_POST["year"];

  if (!empty($semester)) {
    $query .= " AND semester = '$semester'";
  }
  if (!empty($quarter)) {
    $query .= " AND quarter = '$quarter'";
  }
  if (!empty($section)) {
    $query .= " AND section = '$section'";
  }
  if (!empty($sy)) {
    $query .= " AND sy = '$sy'";
  }
  if (!empty($year)) {
    $query .= " AND year = '$year'";
  }
  if (isset($_POST["gender"])) {
    $gender = $_POST["gender"];
    
    if (!empty($gender)) {
      $query .= " AND gender = '$gender'";
    }
  }

  if (isset($_POST["status"])) {
    $status = $_POST["status"];

    if ($status !== "") {
      $query .= " AND b.status = '$status'";
    }
  }
}

$result = mysqli_query($conn, $query);
?>




    <?php 
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>


<td class="text-start"><?php echo $rows["studentname"]; ?></td>
<td class="text-center" style="width:30%;"> <?php echo $rows["grade"]; ?></td>


   
      <td hidden><?php echo $rows["subjectname"]; ?></td>
   
      <td class="text-center">

      <?php if ($rows['status'] != 1): ?>
  <a href="update1.php?id=<?php echo $rows['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">
    <b>
      <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
    </b>
  </a>
  <a type="button" class="btn" data-bs-toggle="modal" 
    data-bs-target="#deleteModal<?php echo $rows['id']; ?>"
    style="border: none; background-color:transparent; outline: none;" title="Delete">

    <img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image">
  </a>
<?php else: ?>
  <b> VALIDATED </b>
 <?php endif; ?>


<div class="modal fade" id="deleteModal<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
        <h5 class="modal-title" id="deleteModalLabel<?php echo $rows['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> <b></b>
          <br> Are you sure you want to delete <br> <b> <?php echo $rows['studentname']; ?></b>
       Grade in    <b> <?php echo $rows['subjectname']; ?> </b> ?
        </p>
        <form class="delete" action="delete_grade1.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
          <div class="mb-3">
            <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
            <input type="password" class="form-control" placeholder="Input your Password <?php echo $rows['teacher']; ?> " id="password" name="password" required>
          </div>
          <button type="submit" class="btn" name="delete">
            <img style="width:40px;" src="img/discard.png" class="img-fluid" alt="Description of image">
          </button>
        </form>
      </div>
    </div>
  </div>
</div>


			      </td>

			    </tr>
     












       
            <?php }


 ?>



        </tbody>
        <thead class="text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%); border-color:black;  ">
                  <tr>
                  <th scope="col" class="w-50 text-start">FEMALE</th>
<th hidden scope="col">Subject Name</th>
<th scope="col">Grade</th>


<th colspan="2" scope="col" class="w-50">
 
</th>

      </th>
                  
                </tr>
              </thead>
          
         <tbody class="text-dark" style="  background-color:#e6e6e6; border-color:black;  ">
         <?php 
require "./php/db_conn.php";
$name = $_SESSION['name'];
// Add the section column to the SELECT statement
$query = "SELECT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser, b.gender, b.status,
    a.name AS user_name, a.sub1 AS user_sub1, a.sec1, a.sgh1, b.remarks, b.quarter, b.semester, b.sy,b.success
    FROM grade b, users a
    WHERE REPLACE(LOWER(b.subjectname), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')  
    AND REPLACE(LOWER(b.teacher), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND REPLACE(LOWER(a.sub1), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')
    AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND b.gender = 'FEMALE' AND b.success='1'";

  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $semester = $_POST["semester"];
  $quarter = $_POST["quarter"];
  $section = $_POST["section"];
  $sy = $_POST["sy"];
  $year = $_POST["year"];

  if (!empty($semester)) {
    $query .= " AND semester = '$semester'";
  }
  if (!empty($quarter)) {
    $query .= " AND quarter = '$quarter'";
  }
  if (!empty($section)) {
    $query .= " AND section = '$section'";
  }
  if (!empty($sy)) {
    $query .= " AND sy = '$sy'";
  }
  if (!empty($year)) {
    $query .= " AND year = '$year'";
  }
  if (isset($_POST["gender"])) {
    $gender = $_POST["gender"];
    
    if (!empty($gender)) {
      $query .= " AND gender = '$gender'";
    }
  }

  if (isset($_POST["status"])) {
    $status = $_POST["status"];

    if ($status !== "") {
      $query .= " AND b.status = '$status'";
    }
  }
}

$result = mysqli_query($conn, $query);
?>




    <?php 
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>
    <tr>

<td class="text-start"><?php echo $rows["studentname"]; ?></td>
<td class="text-center" style="width:30%;"> <?php echo $rows["grade"]; ?></td>


   
      <td hidden><?php echo $rows["subjectname"]; ?></td>
   
      <td class="text-center">

      <?php if ($rows['status'] != 1): ?>
  <a href="update1.php?id=<?php echo $rows['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">
    <b>
      <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
    </b>
  </a>
  <a type="button" class="btn" data-bs-toggle="modal" 
    data-bs-target="#deleteModal<?php echo $rows['id']; ?>"
    style="border: none; background-color:transparent; outline: none;" title="Delete">

    <img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image">
  </a>
<?php else: ?>
  <b> VALIDATED </b>
 <?php endif; ?>


<div class="modal fade" id="deleteModal<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
        <h5 class="modal-title" id="deleteModalLabel<?php echo $rows['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> <b></b>
          <br> Are you sure you want to delete <br> <b> <?php echo $rows['studentname']; ?></b>
       Grade in    <b> <?php echo $rows['subjectname']; ?> </b> ?
        </p>
        <form class="delete" action="delete_grade1.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
          <div class="mb-3">
            <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
            <input type="password" class="form-control" placeholder="Input your Password <?php echo $rows['teacher']; ?> " id="password" name="password" required>
          </div>
          <button type="submit" class="btn" name="delete">
            <img style="width:40px;" src="img/discard.png" class="img-fluid" alt="Description of image">
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

			      </td>

			    </tr>
     












       
            <?php }
 }



     }


 ?>



         </tbody>
      </table>
</div>
    </div>
  
<div>
          <script>
		function printPage() {
			window.open("printsubject1.php", "_blank");
		}
	</script>
<bR>





      </tbody>
                
              </table>
              </div>
     </div>
   </div>
  </div>


          
            </div>
      
      </div>
    </div>
      </div>
 
      </form>
      <script>
  // Restore the selected values from local storage
  window.addEventListener("DOMContentLoaded", () => {
    const selects = document.querySelectorAll("select");
    selects.forEach((select) => {
      const name = select.getAttribute("name");
      const value = localStorage.getItem(name);
      if (value) {
        select.value = value;
      }
    });
  });

  // Store the selected values in local storage
  const selects = document.querySelectorAll("select");
  selects.forEach((select) => {
    select.addEventListener("change", (event) => {
      const name = event.target.getAttribute("name");
      const value = event.target.value;
      localStorage.setItem(name, value);
    });
  });
</script>


<script>
function filterTable() {
  var input = document.getElementById("search-input").value.toUpperCase();
  var table = document.getElementById("grade-table");
  var tbody = table.getElementsByTagName("tbody")[0];
  var rows = tbody.getElementsByTagName("tr");
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var match = false;
    for (var j = 0; j < cells.length; j++) {
      var cellText = cells[j].textContent.toUpperCase();
      if (cellText.indexOf(input) > -1) {
        match = true;
        break;
      }
    }
    rows[i].style.display = match ? "" : "none";
  }
}


</script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
