<?php 



      
   session_start();
   include "../php/db_conn.php";
   include "php/subject1.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
  <script>
		function printPage() {
			window.location.href = "printsubject1.php";
		}
	</script>

  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
     /* Reset styles */
.no {
  border: 0;
  outline: 0;
}

/* Input styles */
input {
  border: none;
  width: 100%;
}

input:active {
  border: none;
}

/* Link styles */
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

/* Body styles */
html,
body {
  height: auto;
}

body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
}


/* Scrollbar styles */
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

/* Animation styles */
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

/* Container styles */
.container form {
  width: 90%;
  max-width: 600px;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  margin: 0 auto;
}

.box {
  width: 90%;
  max-width: 800px;
}

.container table {
  width: 90%;
  max-width: 1000px;
  padding: 20px;
  border-radius: 10px;
  background-color: white;
  border: 10px;
}

.border {
  width: 90%;
  max-width: 600px;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  border: 10px;
}

/* Link position styles */
.link-right {
  display: flex;
  justify-content: flex-end;
}

.link-center {
  display: flex;
  justify-content: flex-end;
}

/* Page content styles */
.nav-item {
  color: black;
}

.subjectlist {
  margin-left: 5%;
  margin-top: 5rem;
}

.studentlist {
  margin-left: 20%;
  margin-top: 5rem;
}

.button {
  margin-left: 5%;
  margin-top: 11rem;
}

.button1 {
  margin-left: 5%;
  margin-top: 9.5rem;
}

.title {
margin-left: 40%;
margin-top: 1rem;
font-size: 3.5rem;
}

.text1 {
margin-left: 23%;
margin-top: -20rem;
width: 45rem;
height: 10rem;
}

.text2 {
margin-left: 23%;
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

.addbutton {
margin-left: 80%;
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


<!-- TITLE HERE -->


<form action="./php/subject1create.php"
      method="post" >



    <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
  ?>
  
  <?php if (isset($_GET['error'])) { ?>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#errorModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="errorModalLabel">Already Submitted</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error'];} ?>
          </div>
        </div>
    
      </div>
    </div>
  </div>

  <!-- Trigger the modal popup onload -->
  <script>
    window.onload = function() {
      $('#errorModal').modal('show');
    };
  </script>
<?php } ?>



       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
           

            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;

              ?> 
           <div class="fade-in">
           <div class="content">



 
            

      <div class="border">
        <!--
      <?php
    require "php/db_conn.php";
    $name = $_SESSION["name"];
    $query = "SELECT students.fullname, students.adviser_id, users.sub10,
            students.section, students.firstname,students.middlename,
            students.lastname,students.gender
            FROM students
            JOIN users ON users.sgh1 = students.adviser_id OR users.sgh2 = students.adviser_id OR users.sgh3 = students.adviser_id OR users.sgh4 = students.adviser_id OR users.sgh5 = students.adviser_id
            WHERE (students.subject1 = users.sub10 OR students.subject2 = users.sub10 OR students.subject3 = users.sub10 OR students.subject4 = users.sub10 OR students.subject5 = users.sub10 OR students.subject6 = users.sub10 OR students.subject7 = users.sub10 OR students.subject8 = users.sub10 OR students.subject9 = users.sub10 OR students.subject10 = users.sub10)
            AND (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section OR users.sec10 = students.section)
            AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' OR students.subjectteacher7 = '".$_SESSION["name"]."' 
            OR students.subjectteacher8 = '".$_SESSION["name"]."' OR students.subjectteacher9 = '".$_SESSION["name"]."' 
            OR students.subjectteacher10 = '".$_SESSION["name"]."')
            LIMIT 1";
    
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Do something with the row
?>
-->
   
 

   <div class="banner text-center text-white rounded-pill mb-3" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
   <b> ADDING GRADES FOR SUBJECT :  <?=$_SESSION['sub10']?></b>
</div>

                   <?php }
                   ?>   
  <div class="row">
<div class="col-md-15 text-center">
<label for="section-filter mb-3"><small><b>Filter by Section</b></small></label>
  <select class="form-select form-select-sm" id="section-filter" onchange="filterTable()">
    <option value="">All Sections</option>
    <?php
    $query = "SELECT DISTINCT section FROM students ORDER BY section ASC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row['section'] . '">' . $row['section'] . '</option>';
    }
    ?>
  </select>

</div>

<br>

<script>
function filterTable() {
  var section = document.getElementById("section-filter").value.toUpperCase();
  var table = document.getElementById("grades-table");
  var rows = table.getElementsByTagName("tr");
  for (var i = 1; i < rows.length; i++) {
    var rowSection = rows[i].querySelector(".section").getElementsByTagName("input")[0].value.toUpperCase();
    var skipRow = false;
    if (section != "" && rowSection != section) {
      skipRow = true;
    }
    rows[i].setAttribute("data-skip-row", skipRow);
    rows[i].style.display = skipRow ? "none" : "";
  }
}


</script>

<script>
  function submit() {
  var form = document.getElementById("grades-form");
  var table = document.getElementById("grades-table");
  var rows = table.getElementsByTagName("tr");
  for (var i = 1; i < rows.length; i++) {
    var skipRow = rows[i].getAttribute("data-skip-row");
    if (skipRow === "true") {
      continue;
    }
    var inputs = rows[i].getElementsByTagName("input");
    // insert the data into the database
  }
  form.submit();
}

</script>
      <div class="row">
  <div class="col-md-6">
    <label for="semester" class="form-label text-center"><b>Semester</b></label>
    <select class="form-select" id="semester" name="semester">

      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="quarter" class="form-label text-center"><b>Quarter</b></label>
    <select class="form-select" id="quarter" name="quarter">

      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
</div>
</div>

<hr>
<div class="b" style="height: 250px; overflow-y: scroll; padding-right: 10px;" id="scroll">
<table class="table table-bordered" id="grades-table">
              <thead >
                  <tr>
                  
              
          
                  <th scope="col">Student Name</th>
                  <th hidden  scope="col">Subject Name </th>
                  <th scope="col" class="text-center">Grade </th>
      
                </tr>
              </thead>
          
        <tbody>    
          
        <tr>
           






          
       



 <?php
    require "php/db_conn.php";
    $name = $_SESSION["name"];
    $query = "SELECT students.fullname, students.adviser_id, users.sub10,
    students.section, students.firstname, students.middlename,
    students.trackstrand, students.lastname, students.gender,
    students.syear, students.grade,students.id
    FROM students
    JOIN users ON 
        (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section 
        OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section 
        OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section 
        OR users.sec10 = students.section)
    WHERE 
        (students.subject1 = '".$_SESSION["sub10"]."' OR students.subject2 = '".$_SESSION["sub10"]."' 
        OR students.subject3 = '".$_SESSION["sub10"]."' OR students.subject4 = '".$_SESSION["sub10"]."' 
        OR students.subject5 = '".$_SESSION["sub10"]."' OR students.subject6 = '".$_SESSION["sub10"]."' 
        OR students.subject7 = '".$_SESSION["sub10"]."' OR students.subject8 = '".$_SESSION["sub10"]."' 
        OR students.subject9 = '".$_SESSION["sub10"]."' OR students.subject10 = '".$_SESSION["sub10"]."')
        AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' 
        OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' 
        OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' 
        OR students.subjectteacher7 = '".$_SESSION["name"]."' OR students.subjectteacher8 = '".$_SESSION["name"]."' 
        OR students.subjectteacher9 = '".$_SESSION["name"]."' OR students.subjectteacher10 = '".$_SESSION["name"]."')
    GROUP BY students.fullname";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($Row = mysqli_fetch_assoc($result)) {
            
?>



               
<td  hidden colspan="">
<input hidden class="no" id="studentid" name="studentid[]" value="<?= $Row['id'] ?>">
</input>
<?= $Row['id'] ?>
</td>
   
               
<td   colspan="">
<input hidden class="no" id="studentname" name="studentname[]" value="<?= $Row['fullname'] ?>">
</input>
<?= $Row['fullname'] ?>
</td>
               
<td  hidden colspan="">
<input class="no" id="firstname" name="firstname[]" value="<?= $Row['firstname'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="year" name="year[]" value="<?= $Row['grade'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="sy" name="sy[]" value="<?= $Row['syear'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="middlename" name="middlename[]" value="<?= $Row['middlename'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="lastname" name="lastname[]" value="<?= $Row['lastname'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="gender" name="gender[]" value="<?= $Row['gender'] ?>">
</input>
</td>


 
<td  hidden colspan="">
<input class="no" id="ts" name="ts[]" value="<?= $Row['trackstrand'] ?>">
</input>
</td>
            <td hidden >
            <input hidden class="no" id="subjectname" name="subjectname[]" 
            value=" <?=$_SESSION['sub10']?>">
             </input>
        
        </td>
        <td>
      <select id="grade-<?php echo $i; ?>" name="grade[]" class="form-control text-center grade-select">
        <option value="0" class="">0</option>
     
        <?php for ($j = 50; $j <= 100; $j++) { ?>
          <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php } ?>
      </select>
    </td>







    
          <td hidden><input value="<?= $_SESSION['name']?>" id="teacher"name="teacher[]">

        </td>
        <td class="section" hidden><input hidden class="no" id="section" name="section[]" value="<?= $Row['section'] ?>"></td>

        <td hidden>          

        </input> 
          <input hidden class="no" id="adviser" name="adviser[]" 
            value="<?= $Row['adviser_id'] ?>">
          </input> 
                      </td> 
			    </tr>


       
            <?php }
                    }

            }
      }
            }
          
        

  
      ?>



         </tbody>
         
      </table>
      </div>
      <button type="submit" class="btn btn-primary" 
name="submit" id="submit" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='subject10view.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>



          
          </div>
          <br>
    




    
</form>

      <br>



      
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
