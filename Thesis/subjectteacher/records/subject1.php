<?php 



      
   session_start();
   include "php/db_conn.php";
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
html, body {
  height:100%;
}

body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-size: cover;
  background-repeat: no-repeat;
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

  max-width: 1000px;
  padding: 20px;
  border-radius: 10px;
  background-color: white;
  border: 10px;
}

.border {

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
  padding: 10px;
  max-width: 800px;
  margin: 0 auto;
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
body.zoomed-in {
      zoom: 1.2; /* Change the value as needed for zoom level */
    }
    
    body.zoomed-out {
      zoom: 0.8; /* Change the value as needed for zoom level */
    }
    .b thead {
  position: sticky; /* Make the header sticky */
  top: 0; /* Position the header at the top */
  z-index: 1; 
  justify-content: sticky;
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



<form action="./php/subject1create.php"
      method="post" >




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
            <?php echo $_GET['error'];} }
            ?>
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
        
      <?php
    require "php/db_conn.php";
    $name = $_SESSION["name"];
    $query = "SELECT students.fullname, students.adviser_id, users.sub1,
            students.section, students.firstname,students.middlename,
            students.lastname,students.gender
            FROM students
            JOIN users ON users.sgh1 = students.adviser_id OR users.sgh2 = students.adviser_id OR users.sgh3 = students.adviser_id OR users.sgh4 = students.adviser_id OR users.sgh5 = students.adviser_id
            WHERE (students.subject1 = users.sub1 OR students.subject2 = users.sub1 OR students.subject3 = users.sub1 OR students.subject4 = users.sub1 OR students.subject5 = users.sub1 OR students.subject6 = users.sub1 OR students.subject7 = users.sub1 OR students.subject8 = users.sub1 OR students.subject9 = users.sub1 OR students.subject10 = users.sub1)
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
   
 

   <div class="banner  text-center text-white rounded-pill mb-3" style=" font-size: 30px;background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
   <b>Adding grades for the subject of   <?=$_SESSION['sub1']?></b>       

</div>

<!-- TITLE HERE -->


                   <?php }
                   ?>   
  <div class="row text">
  <div class="container text-center">
  <div class="col-md-6 text-center mx-auto">
  <div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style="padding: 10px; background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
  <b style="white-space: nowrap;">  <?php echo substr($_SESSION['sub1'], 0, 30); ?> </b>
</div>
<div class="row">
  <div class="col">
    <div class="mb-3">
      <label for="sectionSelect" class="form-label"><b>Section</b></label>
      <select id="sectionSelect" class="form-select">
        <option value="">All</option>
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
  </div>
  <div class="col">
    <div class="mb-3">
      <label for="genderSelect" class="form-label"><b>Gender</b></label>
      <select id="genderSelect" class="form-select">
        <option value="">All</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      </select>
    </div>
  </div>
</div>
  </div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const genderSelect = document.getElementById('genderSelect');
  const sectionSelect = document.getElementById('sectionSelect');
  
  // Check if the selected gender and section are stored in localStorage
  const selectedGender = localStorage.getItem('selectedGender');
  const selectedSection = localStorage.getItem('selectedSection');
  
  // Set the stored values as the selected options if they exist
  if (selectedGender) {
    genderSelect.value = selectedGender;
  }
  
  if (selectedSection) {
    sectionSelect.value = selectedSection;
  }
  
  genderSelect.addEventListener('change', function() {
    const selectedGender = genderSelect.value;
    // Store the selected gender in localStorage
    localStorage.setItem('selectedGender', selectedGender);
    // Redirect to the same page with the selected gender as a query parameter
    window.location.href = window.location.pathname + '?gender=' + selectedGender;
  });
  
  sectionSelect.addEventListener('change', function() {
    const selectedSection = sectionSelect.value;
    // Store the selected section in localStorage
    localStorage.setItem('selectedSection', selectedSection);
    // Redirect to the same page with the selected section as a query parameter
    window.location.href = window.location.pathname + '?section=' + selectedSection;
  });
});
</script>

    </div>
      <div class="row">
      <?php
// Assuming you have already established a database connection in db_conn.php
include "php/db_conn.php";

$id = 1; // ID value for the row you want to fetch
$query = "SELECT quarter FROM settings WHERE id = $id";
$result = mysqli_query($conn, $query); // Use $conn instead of $mysql

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $quarter = $row['quarter'];
} else {
  // Default value if no row is found or an error occurs
  $quarter = ' ';
}
?>
      <div class="row">
      <?php
// Assuming you have already established a database connection in db_conn.php
include "php/db_conn.php";

$id = 1; // ID value for the row you want to fetch
$query = "SELECT semester FROM settings WHERE id = $id";
$result = mysqli_query($conn, $query); // Use $conn instead of $mysql

if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $semester = $row['semester'];
} else {
  // Default value if no row is found or an error occurs
  $semester = ' ';
}
?>

<input hidden id="randomInput" class="form-control" type="text" name="session">

<script>
  window.addEventListener('load', function() {
    generateRandomValue();
  });

  function generateRandomValue() {
    var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var randomValue = '';
    var inputField = document.getElementById('randomInput');

    for (var i = 0; i < 8; i++) {
      var randomIndex = Math.floor(Math.random() * characters.length);
      randomValue += characters.charAt(randomIndex);
    }

    inputField.value = randomValue;
  }
</script>
<input hidden type="date" class="form-control" id="dateInput" value="" name="date">
<input hidden type="time" class="form-control" id="timeInput" value="" name="time">
<input hidden type="status" class="form-control" id="status" value="0" name="status">

<script>
  // Get the current date
  var currentDate = new Date();
  
  // Format the date to the required format (YYYY-MM-DD)
  var formattedDate = currentDate.toISOString().split('T')[0];
  
  // Set the value of the date input field
  document.getElementById("dateInput").value = formattedDate;
  
  // Get the current time
  var currentHour = currentDate.getHours();
  var currentMinute = currentDate.getMinutes();
  
  // Format the time to the required format (HH:MM)
  var formattedTime = (currentHour < 10 ? "0" + currentHour : currentHour) + ":" + (currentMinute < 10 ? "0" + currentMinute : currentMinute);
  
  // Set the value of the time input field
  document.getElementById("timeInput").value = formattedTime;
</script>

<div hidden class="text-center">
  <label for="quarter" class="form-label text-center text-danger"><b>Which quarter should this grade be set for? Please select from the option below.</b></label>
  <input type="text" class="form-control" id="quarter" name="quarter" value="<?php echo $quarter; ?>" readonly>
</div>
<div hidden class="text-center">
  <label for="semester" class="form-label text-center text-danger"><b>Which quarter should this grade be set for? Please select from the option below.</b></label>
  <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $semester; ?>" readonly>
</div>
<hr>

<div class="b" style="height: 290px; overflow-y: scroll; padding-right: 10px;" id="scroll">

<table class="table table-bordered" id="grades-table" style="border:20px;">
  <thead class="text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);" >
                  <tr>
                  
                  
                  
              
          
                  <th scope="col" style="width:45%;"><i>MALE</i></th>
                  <th hidden  scope="col">Subject Name </th>
                  <th hidden scope="col" class="text-center">Gender </th>
                  <th scope="col" class="text-center">Grade </th>
      
                </tr>
            
              </thead>
    

        <tbody>    
<!-- Modal button -->
<?php
 // Add this line to start the session
 require "php/db_conn.php";

 $name = $_SESSION["name"]; // Get the selected gender from the form
 $selectedGender = isset($_GET['gender']) ? $_GET['gender'] : '';
 
 // Update the WHERE clause in the query based on the selected gender
 $whereClause = "";
 if (!empty($selectedGender)) {
   $whereClause .= " AND students.gender = '" . $selectedGender . "'";
 }
 
 // Get the selected section from the form
 $selectedSection = isset($_GET['section']) ? $_GET['section'] : '';
 
 // Update the WHERE clause in the query based on the selected section
 if (!empty($selectedSection)) {
   $whereClause .= " AND students.section = '" . $selectedSection . "'";
 }
 
 // Rest of the code...
 
 $query = "SELECT students.fullname, students.adviser_id, users.sub1,
     students.section, students.firstname, students.middlename,
     students.trackstrand, students.lastname, students.gender,
     students.syear, students.grade, students.id
     FROM students
     JOIN users ON 
         (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section 
         OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section 
         OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section 
         OR users.sec10 = students.section)
     WHERE gender = 'MALE' AND (students.subject1 = '".$_SESSION["sub1"]."' OR students.subject2 = '".$_SESSION["sub1"]."' 
         OR students.subject3 = '".$_SESSION["sub1"]."' OR students.subject4 = '".$_SESSION["sub1"]."' 
         OR students.subject5 = '".$_SESSION["sub1"]."' OR students.subject6 = '".$_SESSION["sub1"]."' 
         OR students.subject7 = '".$_SESSION["sub1"]."' OR students.subject8 = '".$_SESSION["sub1"]."' 
         OR students.subject9 = '".$_SESSION["sub1"]."' OR students.subject10 = '".$_SESSION["sub1"]."')
         AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' 
         OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' 
         OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' 
         OR students.subjectteacher7 = '".$_SESSION["name"]."' OR students.subjectteacher8 = '".$_SESSION["name"]."' 
         OR students.subjectteacher9 = '".$_SESSION["name"]."' OR students.subjectteacher10 = '".$_SESSION["name"]."')
         $whereClause
     GROUP BY students.fullname, students.gender
     ORDER BY students.gender DESC, students.fullname ASC";
 

$result = mysqli_query($conn, $query);
$maleHeaderDisplayed = false;
$femaleHeaderDisplayed = false;
if (mysqli_num_rows($result) > 0) {
  $maleHeaderDisplayed = false;
  $femaleHeaderDisplayed = false;

  while ($Row = mysqli_fetch_assoc($result)) {
  
      
      // Display the student data here
echo "<tr>";
      echo "<td hidden colspan=''>";
      echo "<input hidden class='no' id='studentid' name='studentid[]' value='" . $Row['id'] . "'>";
      echo $Row['id'];
      echo "</td>";


      echo "<td hidden colspan=''>";
      echo "<input class='no' id='section' name='section[]' value='" . $Row['section'] . "'>";
      echo "</td>";
      
      echo "<td colspan=''>";
      echo "<input hidden class='no' id='studentname' name='studentname[]' value='" . $Row['fullname'] . "'>";
      echo $Row['fullname'];
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='firstname' name='firstname[]' value='" . $Row['firstname'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no text-center' id='sy' name='sy[]' value='" . $Row['syear'] . "'>";
      echo "</td>";


      echo "<td hidden colspan=''>";
      echo "<input class='no' id='year' name='year[]' value='" . $Row['grade'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='sy' name='sy[]' value='" . $Row['syear'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='middlename' name='middlename[]' value='" . $Row['middlename'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='lastname' name='lastname[]' value='" . $Row['lastname'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no text-center' id='gender' name='gender[]' value='" . $Row['gender'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='ts' name='ts[]' value='" . $Row['trackstrand'] . "'>";
      echo "</td>";

      echo "<td hidden>";
      echo "<input hidden class='no' id='subjectname' name='subjectname[]' value='" . $_SESSION['sub1'] . "'>";
      echo "</td>";

      echo "<td style='width:30%;'>";
      echo "<select id='grade-" . $i . "' name='grade[]' class='form-control fw-bold text-center grade-select'>";
      echo "<option value='0' class=''>0</option>";

      for ($j = 50; $j <= 100; $j++) {
          echo "<option
          value='" . $j . "'>" . $j . "</option>";
          }
      
              echo "</select>";
              echo "</td>";
          
              echo "<td hidden><input value='" . $_SESSION['name'] . "' id='teacher' name='teacher[]'></td>";
              echo "<td class='section' hidden><input hidden class='no' id='section' value='" . $Row['section'] . "'></td>";
              echo "<td hidden><input hidden class='no' id='adviser' name='adviser[]' value='" . $Row['adviser_id'] . "'></td>";
              echo "</tr>";
          }
}


    
// Add the closing PHP tag
?>




         </tbody>

  </table>


<table class="table table-bordered" id="grades-table" style="border:20px;">
<thead class="text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);" >
                  <tr>
                  
                  
              
          
                  <th scope="col" style="width:45%;"><i>FEMALE</i></th>
                  <th hidden  scope="col">Subject Name </th>
                  <th hidden scope="col" class="text-center">Gender </th>
                  <th scope="col" class="text-center">Grade </th>
      
                </tr>
            
              </thead>
    

        <tbody>    
<!-- Modal button -->
<?php
 // Add this line to start the session
 require "php/db_conn.php";

 $name = $_SESSION["name"]; // Get the selected gender from the form
 $selectedGender = isset($_GET['gender']) ? $_GET['gender'] : '';
 
 // Update the WHERE clause in the query based on the selected gender
 $whereClause = "";
 if (!empty($selectedGender)) {
   $whereClause .= " AND students.gender = '" . $selectedGender . "'";
 }
 
 // Get the selected section from the form
 $selectedSection = isset($_GET['section']) ? $_GET['section'] : '';
 
 // Update the WHERE clause in the query based on the selected section
 if (!empty($selectedSection)) {
   $whereClause .= " AND students.section = '" . $selectedSection . "'";
 }
 
 // Rest of the code...
 
 $query = "SELECT students.fullname, students.adviser_id, users.sub1,
     students.section, students.firstname, students.middlename,
     students.trackstrand, students.lastname, students.gender,
     students.syear, students.grade, students.id
     FROM students
     JOIN users ON 
         (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section 
         OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section 
         OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section 
         OR users.sec10 = students.section)
     WHERE  gender = 'FEMALE' AND  (students.subject1 = '".$_SESSION["sub1"]."' OR students.subject2 = '".$_SESSION["sub1"]."' 
         OR students.subject3 = '".$_SESSION["sub1"]."' OR students.subject4 = '".$_SESSION["sub1"]."' 
         OR students.subject5 = '".$_SESSION["sub1"]."' OR students.subject6 = '".$_SESSION["sub1"]."' 
         OR students.subject7 = '".$_SESSION["sub1"]."' OR students.subject8 = '".$_SESSION["sub1"]."' 
         OR students.subject9 = '".$_SESSION["sub1"]."' OR students.subject10 = '".$_SESSION["sub1"]."')
         AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' 
         OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' 
         OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' 
         OR students.subjectteacher7 = '".$_SESSION["name"]."' OR students.subjectteacher8 = '".$_SESSION["name"]."' 
         OR students.subjectteacher9 = '".$_SESSION["name"]."' OR students.subjectteacher10 = '".$_SESSION["name"]."')
         $whereClause
     GROUP BY students.fullname, students.gender
     ORDER BY students.gender DESC, students.fullname ASC";
 

$result = mysqli_query($conn, $query);
$maleHeaderDisplayed = false;
$femaleHeaderDisplayed = false;
if (mysqli_num_rows($result) > 0) {
  $maleHeaderDisplayed = false;
  $femaleHeaderDisplayed = false;

  while ($Row = mysqli_fetch_assoc($result)) {
  
      
      // Display the student data here
echo "<tr>";
      echo "<td hidden colspan=''>";
      echo "<input hidden class='no' id='studentid' name='studentid[]' value='" . $Row['id'] . "'>";
      echo $Row['id'];
      echo "</td>";

      echo "<td colspan=''>";
      echo "<input hidden class='no' id='studentname' name='studentname[]' value='" . $Row['fullname'] . "'>";
      echo $Row['fullname'];
      echo "</td>";
      echo "<td hidden colspan=''>";
      echo "<input class='no' id='section' name='section[]' value='" . $Row['section'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='firstname' name='firstname[]' value='" . $Row['firstname'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no text-center' id='sy' name='sy[]' value='" . $Row['syear'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no text-center' id='gender' name='gender[]' value='" . $Row['gender'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='year' name='year[]' value='" . $Row['grade'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='sy' name='sy[]' value='" . $Row['syear'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='middlename' name='middlename[]' value='" . $Row['middlename'] . "'>";
      echo "</td>";

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='lastname' name='lastname[]' value='" . $Row['lastname'] . "'>";
      echo "</td>";

   

      echo "<td hidden colspan=''>";
      echo "<input class='no' id='ts' name='ts[]' value='" . $Row['trackstrand'] . "'>";
      echo "</td>";

      echo "<td hidden>";
      echo "<input hidden class='no' id='subjectname' name='subjectname[]' value='" . $_SESSION['sub1'] . "'>";
      echo "</td>";

      echo "<td style='width:30%;'>";
      echo "<select id='grade-" . $i . "' name='grade[]' class='form-control fw-bold text-center grade-select'>";
      echo "<option value='0' class=''>0</option>";

      for ($j = 50; $j <= 100; $j++) {
          echo "<option
          value='" . $j . "'>" . $j . "</option>";
          }
      
              echo "</select>";
              echo "</td>";
          
              echo "<td hidden><input value='" . $_SESSION['name'] . "' id='teacher' name='teacher[]'></td>";
              echo "<td class='section' hidden><input hidden class='no' id='section' value='" . $Row['section'] . "'></td>";
              echo "<td hidden><input hidden class='no' id='adviser' name='adviser[]' value='" . $Row['adviser_id'] . "'></td>";
              echo "</tr>";
          }
}
}
    }
  
    
// Add the closing PHP tag
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
          onclick="location.href='subject1view.php'">
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
