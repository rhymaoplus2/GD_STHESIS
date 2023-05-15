<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { }?>





<!DOCTYPE html>
<html>
<head>
	<title>QUARTER 3 JHS</title>
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
    margin-top: 1cm;
    margin-bottom: 1cm;
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
// Include the database connection script
include "php/db_conn.php";
$name = $_SESSION["name"];
// Execute the SQL query to retrieve the student data for the 3rd quarter
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter 
          FROM grade 
          WHERE quarter = 'FOURTH' 
          AND adviser = '$name'
          ORDER BY lastname;";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);
// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade 

WHERE adviser = '$name' LIMIT 1
";
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
     Quarter:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' .' FOURTH </b>
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
$full=0;
$num=0;
$no=1;
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

while ($row = mysqli_fetch_assoc($result)) {
  $studentname = $row['studentname'];
  $subjectname = $row['subjectname'];
  $grade = $row['grade'];
  $quarter = $row['quarter'];

  if (!isset($grades[$studentname])) {
      $grades[$studentname] = array(
          'lastname' => $row['lastname'],
          'firstname' => $row['firstname'],
          'middlename' => $row['middlename'],
          'rank' => '',
      );
  }

    if (!isset($grades[$studentname][$subjectname])) {
        $grades[$studentname][$subjectname] = array(
            "3rd" => "",
     
        );
    }

    if ($quarter == "FOURTH") {
        $grades[$studentname][$subjectname]["3rd"] = ($grade === null) ? 0 : $grade;
        // Add the grade to the quarter 1 grades for the student
        if (!isset($quarter1_grades[$studentname])) {
            $quarter1_grades[$studentname] = array();
        }
   
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
        <tr >
   

";

// Add the unique subject names and the "average" column to the header row
foreach ($unique_subjects as $subject) {
    echo "";
}

echo "</tr>";
foreach ($unique_subjects as $subject) {
    echo ""."";
}

echo "</thead><tbody>";
// Loop through the total grades array and calculate the sum for each student
// Loop through the total grades array and calculate the sum for each student
$total_grade_sum = array();
foreach ($total_grades as $subjectname => $student_grades) {
    foreach ($student_grades as $studentname => $grade) {
        if (!isset($total_grade_sum[$studentname])) {
            $total_grade_sum[$studentname] = 0;
        }
        $total_grade_sum[$studentname] += $grade;
    }
}

// Sort the total grade sum array in descending order




$highest_grade = max($total_grade_sum);
// Create a new array to store student names and total grades
$student_grades = array();

// Populate the student_grades array
foreach ($total_grade_sum as $studentname => $total_grade) {
    $student_grades[$studentname] = $total_grade;
}

// Sort the student_grades array by total grades while maintaining the original order of students with the same total grades
arsort($student_grades, SORT_NUMERIC);

// Assign ranks to the students based on the sorted order
$current_rank = 1;
$previous_grade = null;
foreach ($student_grades as $studentname => $total_grade) {
    if ($previous_grade !== null && $total_grade !== $previous_grade) {
        $current_rank++;
    }
    $grades[$studentname]['rank'] = $current_rank;
    $previous_grade = $total_grade;
}

// Create a table to display the grades for each student and subject
echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th class='text-center'>No.</th>";
echo "<th class='text-center'>LAST NAME</th>";
echo "<th class='text-center'>FOURTH NAME</th>";
echo "<th class='text-center'>MI.</th>";
// Add the unique subject names and the "total" and "average" columns to the header row
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center'>" . $subject . "</th>";
    $num++;
  
}
echo "<th  class='text-center' >TOTAL</th><th  class='text-center' >AVE</th><th  class='text-center'>AVE</th>
<th  class='text-center'>RANK</th>
<th></th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

// Loop through the students and display their grades
$ranking = 1;
foreach ($total_grade_sum as $studentname => $total_grade) {
    // Calculate the average grade for the student
    $average_grade = ($num_subjects > 0) ? round($total_grade / $num_subjects) : 0;
    // Calculate the percentage of the total grade out of the maximum possible grade
    $percentage_grade = ($full > 0) ? round($total_grade / $full * 100) : 0;

    echo "<tr>";
    echo "<td class='text-center'>" . $no. " </td><td>" . "" . $grades[$studentname]['lastname'] . " </td><td>" . $grades[$studentname]['firstname'] . "</td><td class='text-center'> " .$grades[$studentname]['middlename'][0]. ".</td>";

$no++;
    // Loop through the subjects and display the grades for each subject
    foreach ($unique_subjects as $subject) {
        if (isset($grades[$studentname][$subject]["3rd"])) {
            echo "<td class='text-center'>" . $grades[$studentname][$subject]["3rd"] . "</td>";
        
        } else {
            echo "<td class='text-center'>-</td>";
        }
    }
    echo "<td class='text-center'>" . $total_grade  . "</td>";
    echo "<td class='text-center'>" . number_format($total_grade / $num, 3) . "</td>";
    echo "<td class='text-center'> " . ROUND($total_grade / $num). "</td>";
   

    // Display the total grade and average grade for the student
    echo "<td class='text-center'>" . $grades[$studentname]['rank'] . "</td>";

    
    $average_grade = round($total_grade / $num);

    if ($average_grade >= 98 && $average_grade <= 100) {
        $honor = 'With highest honors';
    } else if ($average_grade >= 95 && $average_grade <= 97) {
        $honor = 'With high honors';
    } else if ($average_grade >= 90 && $average_grade <= 94) {
        $honor = 'With honors';
    } else {
        $honor = '';
    }
    

    echo "<td class='text-center'>". " $honor</td></tr></tbody>";

 

    $ranking++;
}

echo "</tbody>";

echo "<tbody>


<tr>
<td> </td>
<td class='text-center'  colspan='3'>Teacher's Initials</td>



";
for ($i = 1; $i <= $num; $i++) {
  echo  "<td> <td> ";
}
echo "
<td> </td>
<td> </td>
<td> </td>


</tr>


</tbody>

";

echo "</table>";


    
    // Close the database connection
    mysqli_close($conn);
    
    ?>
    <br>
    <br>
 
<table class="table-borderless">
  <tbody>
    <tr>
<td>Prepared by:<br><br><br><u><input disabled type="text" class="form-control" value="<?php if (isset($_SESSION['name'])) echo $_SESSION['name']; ?>">
</u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adviser&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
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
        
        </u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SPORTS Subject Group Head&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noted by:<br><br><br><u>
  
  
<input disabled  type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT pname FROM settings WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['pname'];

            // echo the value of crname
            echo $crname;

          ?>">




</u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;settings&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Approved by:<br><br><br><u>
  
<input disabled type="text" class="form-control" value="<?php 
      
      include "php/db_conn.php";
            // select the crname from the table where the id matches a certain value
            $result = mysqli_query($conn, "SELECT crname FROM cr WHERE id=1");

            // fetch the row as an associative array and extract the value of crname
            $row = mysqli_fetch_assoc($result);
            $crname = $row['crname'];

            // echo the value of crname
            echo $crname;

          ?>">



</u><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campus Registrar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label></td>
<td><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u><br>Date</td>

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
  if (sessionStorage.getItem("noted-by-settings")) {
    document.getElementById("noted-by-settings").value = sessionStorage.getItem("noted-by-settings");
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
  document.getElementById("noted-by-settings").addEventListener("change", function() {
    sessionStorage.setItem("noted-by-settings", document.getElementById("noted-by-settings").value);
  });
  document.getElementById("approved-by-cr").addEventListener("change", function() {
    sessionStorage.setItem("approved-by-cr", document.getElementById("approved-by-cr").value);
  });
</script>


   
  </div>
  


    </div>

</div>


  
</body>
</html>



