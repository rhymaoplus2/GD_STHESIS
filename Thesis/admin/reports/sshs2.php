<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { }?>





<!DOCTYPE html>
<html>
<head>
	<title>Semester 2 SHS CONSOLIDATED GRADES</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <header>

</header>

<style>
  


  .container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;

}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;

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



  table {
  width: 100%;
  border-collapse: collapse;
}

td, th {
  padding: 8px;
  text-align: left;
  font-size: 14px;
}

@media screen and (min-width: 600px) {
  td, th {
    font-size: 16px;
    padding: 12px;

  }
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
.carousel-inner img {
  margin: auto;
}
.poster img
{
  margin: auto;
}
table {
    border-collapse: collapse;
  }
  td, th {
    border: 1px solid black;
    padding: 5px;
  }


  #no-border {
  border: none;
  visibility: hidden;
  border-bottom: none !important;
}
/* Define the styles for the page */

@media print {
  /* Set the page size to A4 */
  @page {
    margin-top: 0;
    margin-bottom: 0;
    size: auto;  /* Use the default page size */
       /* Reset the page margin to zero */
  }
  .img-fluid{

    display: none;
  }

  .my-element
  {
    display: none;
  }
  /* Define the styles for the printable elements */
  .printable {
    visibility: visible;
  }
  /* Define the styles for page 1 */
  .page1 {
    page-break-after: always;
  }
  /* Define the styles for page 2 */
  .page2 {
    page-break-before: always;
  }
  .form-control 
{
border:none;
text-align: center;
}
.table-borderless {
text-align: center;
  
}
label {
  text-align: center;
  }
}

.footer input {
    font-size: 12px;
  }
  .d-flex {
  display: flex;
  align-items: flex-end;
}

.d-flex input::placeholder {
  font-weight: bold;
}

.footer
{
    font-size: 12px;
    border-left: none;
 
  }
  .table-borderless input {
width:200px;

}
.table-borderless {
  border-collapse: collapse;
  
}

.table-borderless td, .table-borderless th {
  border: none;
  font-size: 12px;
  padding: 0px; /* adjust the padding value as desired */
  margin: 0; /* set margin to 0 to remove any extra space between cells */
  white-space: nowrap;
}
label {
    display: block;
    font-size: 12px;
    margin-top: 0;
  }
  .form-control {
font-size: 12px;

  padding: 0;
  margin: 0;
}

#my-element {
  transform-origin: center;
  transition: transform 5s, opacity 2s;
}

#my-element.zoom-rotate-fade {
  transform: scale(6) rotate(180deg);
  opacity: 3;
}

#my-element button {
  background: none;
  border: none;
}

#my-element button:hover img {
  opacity: 0.8;
}
@keyframes blink {
    0% {
      opacity: 1;
    }
    50% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  #my-element {
    animation: blink 3s infinite;
  }
</style>

  </style>
</head>

<body>
<div id="my-element" class="position-fixed" style="z-index: 9999; top: 0; right: 0; text-align: center;">
  <button class="fixed-button" id="print-button">
    <img src="img/iprint.png" alt="Print" class="img-fluid" style="width: 50px;">
  </button>
</div>


<script>
  const printButton = document.getElementById('print-button');
  printButton.addEventListener('click', () => {
    window.print();
  });
</script>



  <br><br>
<div class="page1">
<?php
include "php/db_conn.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$section = validate($_GET['section']);
$sy = validate($_GET['sy']);

// Execute the SQL query to retrieve the student data for the 3rd quarter
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter 
FROM grade 
WHERE quarter IN ('THIRD', 'FOURTH')
AND LOWER(gender) = 'male'
AND section = '$section'
AND sy = '$sy'
ORDER BY studentname, subjectname";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);

// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade 
WHERE 
   section = '$section'
  AND sy = '$sy' 
LIMIT 1";

$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);


// Display the grade information in a paragraph
echo '
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/headerconso.png" class=" p top-0 w-10 h-auto" style="max-height: 150px;" alt="Example Image">
</div>
<div>
  <div style="display: flex; justify-content: space-between;">
    <p style="text-align: left;">
      School Year: <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
      . $info_row['sy'] . '</b><br>
   Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' .' SECOND</b>
    </p>
    <div class="text-left">
      <p style="text-align: left;">
        Grade:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $info_row['year'] . '</b><br>
        section:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $info_row['section'] . '</b>
      </p>
    </div>
  </div>
</div>';

// Create an associative array to store the grades for each student and subject
$grades = array();
$num=0;
$full=0;
// Create an array to store the unique subject names
$unique_subjects = array();

// Create an associative array to store the total grades for each subject for each student
$total_grades = array();

// Create an array to store the quarter 1 grades for each student
$quarter1_grades = array();
$num_subjects = count($unique_subjects);
$total_grades_3rd = 0;
foreach ($quarter1_grades as $student_grades) {
    foreach ($student_grades as $grade) {
        $total_grades_3rd += $grade;
    }
}
if ($num_subjects > 0) {
  $average_grade_3rd = $total_grades_3rd / $num_subjects;
} else {
  $average_grade_3rd = 0;
}

// Loop through the results and populate the grades and unique_subjects arrays
while ($row = mysqli_fetch_assoc($result)) {
    $studentname = $row['studentname'];
    $subjectname = $row['subjectname'];
    $grade = $row['grade'];
    $quarter = $row['quarter'];

    if (!isset($grades[$studentname])) {
        $grades[$studentname] = array();
    }

    if (!isset($grades[$studentname][$subjectname])) {
        $grades[$studentname][$subjectname] = array(
            "3rd" => "",
            "4th" => "",
        );
    }

    if ($quarter =="THIRD") {
        $grades[$studentname][$subjectname]["3rd"] = ($grade === null) ? 0 : $grade;
        // Add the grade to the quarter 1 grades for the student
        if (!isset($quarter1_grades[$studentname])) {
            $quarter1_grades[$studentname] = array();
        }
        $quarter1_grades[$studentname][$subjectname] = ($grade === null) ? 0 : $grade;
    } else if ($quarter == "FOURTH") {
        $grades[$studentname][$subjectname]["4th"] = ($grade === null) ? 0 : $grade;
    }

    // Add the grade to the total for the subject for the student
    if (!isset($total_grades[$subjectname])) {
        $total_grades[$subjectname] = array();
    }

    if (!isset($total_grades[$subjectname][$studentname])) {
        $total_grades[$subjectname][$studentname] = 0;
    }

    $total_grades[$subjectname][$studentname] += ($grade === null) ? 0 : $grade;

    if (!in_array($subjectname, $unique_subjects)) {
        array_push($unique_subjects, $subjectname);
    }
}
$honor = '';

// Create a table to display the grades for each student and subject
echo "
    ";
echo "<table >
<thead>

  <th class='text-center' rowspan='2'>LEARNERS' NAME</th>
  <th class='text-center' colspan='90' style='border: none!important;''></th>

   <thead>
        <tr >
        <th class='text-center' rowspan='2' >MALE</th>

";

// Add the unique subject names and the "average" column to the header row
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center' colspan='3'>".$subject."</th>";
    $num ++;
}
echo "<th class='text-center'> ". 
"THIRD Sem<br>Final<br>Average</th><th></th><th></th>";
echo "</tr>
        <tr class='text-center'>";
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center'>3rd<br>Quarter</th><th class='text-center'>4th<br>Quarter</th><th class='text-center'>"."Final</th>";
}

echo "<th></th><th></th><th></th></tr></thead><tbody>";

// Loop through the grades array and display the grades for each student and subject
foreach ($grades as $studentname => $subjects) {
  echo "<tr><td>".$studentname."</td>";
  foreach ($unique_subjects as $subject) {
      if (isset($subjects[$subject])) {
          echo "<td class='text-center'>".$subjects[$subject]["3rd"]."</td><td class='text-center'>".$subjects[$subject]["4th"]."</td>";
          $THIRD = intval($subjects[$subject]["3rd"]);
          $FOURTH = intval($subjects[$subject]["4th"]);
          $average = ($THIRD + $FOURTH) / 2;
          $full +=$average;
          
          echo "
                <td class='text-center'>".$average."</td>";
          
        }
        
         
      else {
        
          echo "<td></td><td></td><td></td>";
      }

      
      
  }
  
  // Calculate and display the average for the student
  $total_grade = 0;
  $num_subjects = 0;
// Calculate and display the average for the student
$total_grade = 0;
$num_subjects = 0;
foreach ($total_grades as $subjectname => $student_grades) {
    if (isset($student_grades[$studentname])) {
        $total_grade += $student_grades[$studentname];
        $num_subjects++;
    }
}
$average = ($num_subjects > 0) ? round($total_grade / $num_subjects, 2) : "";
$average_per_subject = ($num_subjects > 0) ? round($total_grade / count($unique_subjects), 2) : "";
echo "<td class='text-center'>" . number_format($full / $num, 3). "</td>";
echo "<td class='text-center'>".round(($full / $num))."</td>";

$full=0;
$average_overall = $average_per_subject / $num;
if ($average_overall >= 90 && $average_overall <= 94) {
  $honor = 'With honors';
} else if ($average_overall >= 95 && $average_overall <= 97) {
  $honor = 'With high honors';
} else if ($average_overall >= 98 && $average_overall <= 100) {
  $honor = 'With highest honors';
}

else{
  $honor = '&nbsp;&nbsp;&nbsp;';
}
 echo "<td class='text-center'>". " $honor</td></tr></tbody>";



}
// Close the row

echo "</tr></tbody>

<tbody>


<td style='border:none;'> </td>





";

// Add the unique subject names and the "average" column to the header row
foreach ($unique_subjects as $subject) {
  echo "<th class='text-center' colspan='3'>","<br></th>";
}
echo "</tbody><tr  class='no-border'><tbody class='no-border'>
   ";
foreach ($unique_subjects as $subject) {
  
}

// Close the table tag
echo "</table>";

    
    // Close the database connection
    mysqli_close($conn);
    
    ?>

<table class="table-borderless">
  <tbody>
    <tr>
<td>Prepared by:<br><br><br><u>  
<input disabled  type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT name FROM users WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $name = strtoupper($name);
            // echo the value of crname
            echo $name;

          ?>">
</u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-stem"   type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STEM Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-humss" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HUMSS Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-abm" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABM Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-tvl" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TVL Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u>     
  
<input type="text" class="form-control" id="checked-by-sports">
        
        </u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPORTS Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
        <td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noted by:<br><br><br><u>
  
  
<input disabled  type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT pname FROM settings WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['pname'];
            $crname = strtoupper($crname);
            // echo the value of crname
            echo $crname;

          ?>">




</u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by:<br><br><br><u>
  
<input disabled type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT crname FROM cr WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['crname'];

            $crname = strtoupper($crname);
            echo $crname;
            

          ?>">



</u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campus Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>

    </tr>
   
  </tbody>
</table>
</div> 
<script>
  // Check if values are stored in sessionStorage
  if (sessionStorage.getItem("checked-by-stem")) {
    document.getElementById("checked-by-stem").value = sessionStorage.getItem("checked-by-stem");
  }
  if (sessionStorage.getItem("checked-by-humss")) {
    document.getElementById("checked-by-humss").value = sessionStorage.getItem("checked-by-humss");
  }
  if (sessionStorage.getItem("checked-by-abm")) {
    document.getElementById("checked-by-abm").value = sessionStorage.getItem("checked-by-abm");
  }
  if (sessionStorage.getItem("checked-by-tvl")) {
    document.getElementById("checked-by-tvl").value = sessionStorage.getItem("checked-by-tvl");
  }
  if (sessionStorage.getItem("checked-by-sports")) {
    document.getElementById("checked-by-sports").value = sessionStorage.getItem("checked-by-sports");
  }
  if (sessionStorage.getItem("noted-by-principal")) {
    document.getElementById("noted-by-principal").value = sessionStorage.getItem("noted-by-principal");
  }
  if (sessionStorage.getItem("approved-by-cr")) {
    document.getElementById("approved-by-cr").value = sessionStorage.getItem("approved-by-cr");
  }

  // Store values in sessionStorage on change
  document.getElementById("checked-by-stem").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-stem", document.getElementById("checked-by-stem").value);
  });
  document.getElementById("checked-by-humss").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-humss", document.getElementById("checked-by-humss").value);
  });
  document.getElementById("checked-by-abm").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-abm", document.getElementById("checked-by-abm").value);
  });
  document.getElementById("checked-by-tvl").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-tvl", document.getElementById("checked-by-tvl").value);
  });
  document.getElementById("checked-by-sports").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-sports", document.getElementById("checked-by-sports").value);
  });
  document.getElementById("noted-by-principal").addEventListener("change", function() {
    sessionStorage.setItem("noted-by-principal", document.getElementById("noted-by-principal").value);
  });
  document.getElementById("approved-by-cr").addEventListener("change", function() {
    sessionStorage.setItem("approved-by-cr", document.getElementById("approved-by-cr").value);
  });
</script>


          <div class="page2">
            <br>
            <br>
            <br>
            <?php
// Include the database connection script
// Execute the SQL query to retrieve the student data for the 3rd quarter
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter 
FROM grade 
WHERE quarter IN ('THIRD', 'FOURTH')
AND LOWER(gender) = 'female'
AND section = '$section'
AND sy = '$sy'
ORDER BY studentname, subjectname";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);

// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade 
WHERE 
   section = '$section'
  AND sy = '$sy' 
LIMIT 1";

$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);



echo '
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/headerconso.png" class=" p top-0 w-10 h-auto" style="max-height: 150px;" alt="Example Image">
</div>
<div>
  <div style="display: flex; justify-content: space-between;">
    <p style="text-align: left;">
      School Year: <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
      . $info_row['sy'] . '</b><br>
   Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' .' SECOND</b>
    </p>
    <div class="text-left">
      <p style="text-align: left;">
        Grade:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $info_row['year'] . '</b><br>
        section:<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $info_row['section'] . '</b>
      </p>
    </div>
  </div>
</div>';

// Create an associative array to store the grades for each student and subject
$grades = array();
$num=0;
$full=0;
// Create an array to store the unique subject names
$unique_subjects = array();

// Create an associative array to store the total grades for each subject for each student
$total_grades = array();

// Create an array to store the quarter 1 grades for each student
$quarter1_grades = array();
$num_subjects = count($unique_subjects);
$total_grades_3rd = 0;
foreach ($quarter1_grades as $student_grades) {
    foreach ($student_grades as $grade) {
        $total_grades_3rd += $grade;
    }
}
if ($num_subjects > 0) {
  $average_grade_3rd = $total_grades_3rd / $num_subjects;
} else {
  $average_grade_3rd = 0;
}

// Loop through the results and populate the grades and unique_subjects arrays
while ($row = mysqli_fetch_assoc($result)) {
    $studentname = $row['studentname'];
    $subjectname = $row['subjectname'];
    $grade = $row['grade'];
    $quarter = $row['quarter'];

    if (!isset($grades[$studentname])) {
        $grades[$studentname] = array();
    }

    if (!isset($grades[$studentname][$subjectname])) {
        $grades[$studentname][$subjectname] = array(
            "3rd" => "",
            "4th" => "",
        );
    }

    if ($quarter =="THIRD") {
        $grades[$studentname][$subjectname]["3rd"] = ($grade === null) ? 0 : $grade;
        // Add the grade to the quarter 1 grades for the student
        if (!isset($quarter1_grades[$studentname])) {
            $quarter1_grades[$studentname] = array();
        }
        $quarter1_grades[$studentname][$subjectname] = ($grade === null) ? 0 : $grade;
    } else if ($quarter == "FOURTH") {
        $grades[$studentname][$subjectname]["4th"] = ($grade === null) ? 0 : $grade;
    }

    // Add the grade to the total for the subject for the student
    if (!isset($total_grades[$subjectname])) {
        $total_grades[$subjectname] = array();
    }

    if (!isset($total_grades[$subjectname][$studentname])) {
        $total_grades[$subjectname][$studentname] = 0;
    }

    $total_grades[$subjectname][$studentname] += ($grade === null) ? 0 : $grade;

    if (!in_array($subjectname, $unique_subjects)) {
        array_push($unique_subjects, $subjectname);
    }
}
$honor = '';

// Create a table to display the grades for each student and subject
echo "
    ";
echo "<table >
<thead>

  <th class='text-center' rowspan='2'>LEARNERS' NAME</th>
  <th class='text-center' colspan='90' style='border: none!important;''></th>

   <thead>
        <tr >
        <th class='text-center' rowspan='2' >FEMALE</th>

";

// Add the unique subject names and the "average" column to the header row
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center' colspan='3'>".$subject."</th>";
    $num ++;
}
echo "<th class='text-center'> ". 
"THIRD Sem<br>Final<br>Average</th><th></th><th></th>";
echo "</tr>
        <tr class='text-center'>";
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center'>3rd<br>Quarter</th><th class='text-center'>4th<br>Quarter</th><th class='text-center'>"."Final</th>";
}

echo "<th></th><th></th><th></th></tr></thead><tbody>";

// Loop through the grades array and display the grades for each student and subject
foreach ($grades as $studentname => $subjects) {
  echo "<tr><td>".$studentname."</td>";
  foreach ($unique_subjects as $subject) {
      if (isset($subjects[$subject])) {
          echo "<td class='text-center'>".$subjects[$subject]["3rd"]."</td><td class='text-center'>".$subjects[$subject]["4th"]."</td>";
          $THIRD = intval($subjects[$subject]["3rd"]);
          $FOURTH = intval($subjects[$subject]["4th"]);
          $average = ($THIRD + $FOURTH) / 2;
          $full +=$average;
          
          echo "
                <td class='text-center'>".$average."</td>";
          
        }
        
         
      else {
        
          echo "<td></td><td></td><td></td>";
      }

      
      
  }
  
  // Calculate and display the average for the student
  $total_grade = 0;
  $num_subjects = 0;
// Calculate and display the average for the student
$total_grade = 0;
$num_subjects = 0;
foreach ($total_grades as $subjectname => $student_grades) {
    if (isset($student_grades[$studentname])) {
        $total_grade += $student_grades[$studentname];
        $num_subjects++;
    }
}
$average = ($num_subjects > 0) ? round($total_grade / $num_subjects, 2) : "";
$average_per_subject = ($num_subjects > 0) ? round($total_grade / count($unique_subjects), 2) : "";
echo "<td class='text-center'>" . number_format($full / $num, 3). "</td>";
echo "<td class='text-center'>".round(($full / $num))."</td>";

$full=0;
$average_overall = $average_per_subject / $num;
if ($average_overall >= 90 && $average_overall <= 94) {
  $honor = 'With honors';
} else if ($average_overall >= 95 && $average_overall <= 97) {
  $honor = 'With high honors';
} else if ($average_overall >= 98 && $average_overall <= 100) {
  $honor = 'With highest honors';
}

else{
  $honor = '&nbsp;&nbsp;&nbsp;';
}
 echo "<td class='text-center'>". " $honor</td></tr></tbody>";



}
// Close the row

echo "</tr></tbody>

<tbody>


<td style='border:none;'> </td>





";

// Add the unique subject names and the "average" column to the header row
foreach ($unique_subjects as $subject) {
  echo "<th class='text-center' colspan='3'>","<br></th>";
}
echo "</tbody><tr  class='no-border'><tbody class='no-border'>
   ";
foreach ($unique_subjects as $subject) {
  
}

// Close the table tag
echo "</table>";

    
    // Close the database connection
    mysqli_close($conn);
    
    ?>
     <br>
    <br>
   

    <table class="table-borderless">
  <tbody>
    <tr>
<td>Prepared by:<br><br><br><u>  
<input disabled  type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT name FROM users WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $name = $row['name'];
            $name = strtoupper($name);
            // echo the value of crname
            echo $name;

          ?>">
</u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Administrator&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-stem"   type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;STEM Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-humss" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HUMSS Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-abm" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABM Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u><input id="checked-by-tvl" type="text" class="form-control"></u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TVL Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Checked by:<br><br><br><u>     
  
<input type="text" class="form-control" id="checked-by-sports">
        
        </u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPORTS Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
        <td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noted by:<br><br><br><u>
  
  
<input disabled  type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT pname FROM settings WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['pname'];
            $crname = strtoupper($crname);
            // echo the value of crname
            echo $crname;

          ?>">




</u><label class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Principal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by:<br><br><br><u>
  
<input disabled type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT crname FROM cr WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['crname'];

            $crname = strtoupper($crname);
            echo $crname;
            

          ?>">



</u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campus Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><br><br><br><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>

    </tr>
   
  </tbody>
</table>
          
<script>
  // Check if values are stored in sessionStorage
  if (sessionStorage.getItem("checked-by-stem")) {
    document.getElementById("checked-by-stem").value = sessionStorage.getItem("checked-by-stem");
  }
  if (sessionStorage.getItem("checked-by-humss")) {
    document.getElementById("checked-by-humss").value = sessionStorage.getItem("checked-by-humss");
  }
  if (sessionStorage.getItem("checked-by-abm")) {
    document.getElementById("checked-by-abm").value = sessionStorage.getItem("checked-by-abm");
  }
  if (sessionStorage.getItem("checked-by-tvl")) {
    document.getElementById("checked-by-tvl").value = sessionStorage.getItem("checked-by-tvl");
  }
  if (sessionStorage.getItem("checked-by-sports")) {
    document.getElementById("checked-by-sports").value = sessionStorage.getItem("checked-by-sports");
  }
  if (sessionStorage.getItem("noted-by-principal")) {
    document.getElementById("noted-by-principal").value = sessionStorage.getItem("noted-by-principal");
  }
  if (sessionStorage.getItem("approved-by-cr")) {
    document.getElementById("approved-by-cr").value = sessionStorage.getItem("approved-by-cr");
  }

  // Store values in sessionStorage on change
  document.getElementById("checked-by-stem").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-stem", document.getElementById("checked-by-stem").value);
  });
  document.getElementById("checked-by-humss").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-humss", document.getElementById("checked-by-humss").value);
  });
  document.getElementById("checked-by-abm").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-abm", document.getElementById("checked-by-abm").value);
  });
  document.getElementById("checked-by-tvl").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-tvl", document.getElementById("checked-by-tvl").value);
  });
  document.getElementById("checked-by-sports").addEventListener("change", function() {
    sessionStorage.setItem("checked-by-sports", document.getElementById("checked-by-sports").value);
  });
  document.getElementById("noted-by-principal").addEventListener("change", function() {
    sessionStorage.setItem("noted-by-principal", document.getElementById("noted-by-principal").value);
  });
  document.getElementById("approved-by-cr").addEventListener("change", function() {
    sessionStorage.setItem("approved-by-cr", document.getElementById("approved-by-cr").value);
  });
</script>




     </div> 
             


   
  </div>
  


    </div>

</div>


  
</body>
</html>


