<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { }?>





<!DOCTYPE html>
<html>
<head>
	<title>REPORTS</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

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
}



</style>

  </style>
</head>

<body>
<div class="page1">
<?php
// Include the database connection script
include "php/db_conn.php";

// Execute the SQL query to retrieve the student data for the 1st quarter
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter 
FROM grade 
WHERE quarter = 'First' 
AND LOWER(gender) = 'male'
ORDER BY studentname, subjectname;
";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);
// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade LIMIT 1";
$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);

// Display the grade information in a paragraph
echo '
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/consoheader.png" class=" p top-0 w-10 h-auto" style="max-height: 150px;" alt="Example Image">
</div>
<div>
  <div style="display: flex; justify-content: space-between;">
    <p style="text-align: left;">
      School Year: <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
      . $info_row['sy'] . '</b><br>
      Semester: Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' . $info_row['semester'] .' Quarter </b>
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

// Create an array to store the unique subject names
$unique_subjects = array();

// Create an associative array to store the total grades for each subject for each student
$total_grades = array();

// Create an array to store the quarter 1 grades for each student
$quarter1_grades = array();
$num_subjects = count($unique_subjects);
$total_grades_1st = 0;
foreach ($quarter1_grades as $student_grades) {
    foreach ($student_grades as $grade) {
        $total_grades_1st += $grade;
    }
}
if ($num_subjects > 0) {
  $average_grade_1st = $total_grades_1st / $num_subjects;
} else {
  $average_grade_1st = 0;
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
            "1st" => "",
            "2nd" => "",
        );
    }

    if ($quarter == "First") {
        $grades[$studentname][$subjectname]["1st"] = ($grade === null) ? 0 : $grade;
        // Add the grade to the quarter 1 grades for the student
        if (!isset($quarter1_grades[$studentname])) {
            $quarter1_grades[$studentname] = array();
        }
        $quarter1_grades[$studentname][$subjectname] = ($grade === null) ? 0 : $grade;
    } else if ($quarter == "Second") {
        $grades[$studentname][$subjectname]["2nd"] = ($grade === null) ? 0 : $grade;
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
}
echo "<th class='text-center'> ".  $info_row['quarter'] .
" Sem<br>Final<br>Average</th><th></th><th></th>";
echo "</tr>
        <tr class='text-center'>";
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center'>1st<br>Quarter</th><th class='text-center'>2nd<br>Quarter</th><th class='text-center'>"."Final</th>";
}

echo "<th></th><th></th><th></th></tr></thead><tbody>";

// Loop through the grades array and display the grades for each student and subject
foreach ($grades as $studentname => $subjects) {
  echo "<tr><td>".$studentname."</td>";
  foreach ($unique_subjects as $subject) {
      if (isset($subjects[$subject])) {
          echo "<td class='text-center'>".$subjects[$subject]["1st"]."</td><td>".$subjects[$subject]["2nd"]."</td><td></td>";
      
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
echo "<td class='text-center'>".$average_per_subject."</td>";
echo "<td class='text-center'>".round($average_per_subject)."</td>";


if ($average_per_subject >= 90 && $average_per_subject <= 94) {
  $honor = 'With honors';
} else if ($average_per_subject >= 95 && $average_per_subject <= 97) {
  $honor = 'With high honors';
} else if ($average_per_subject >= 98 && $average_per_subject <= 100) {
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
       </div>
      
          
          <div class="page2">
            <br>
            <br>
            <br>
     <?php
// Include the database connection script
include "php/db_conn.php";

// Execute the SQL query to retrieve the student data for the 1st quarter
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter 
FROM grade 
WHERE quarter = 'First' 
AND LOWER(gender) = 'female'
ORDER BY studentname, subjectname;
";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);
// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade LIMIT 1";
$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);

// Display the grade information in a paragraph
echo '
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/consoheader.png" class=" p top-0 w-10 h-auto" style="max-height: 150px;" alt="Example Image">
</div>
<div>
  <div style="display: flex; justify-content: space-between;">
    <p style="text-align: left;">
      School Year: <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'
      . $info_row['sy'] . '</b><br>
      Semester: Semester:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' . $info_row['semester'] .' Quarter </b>
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

// Create an array to store the unique subject names
$unique_subjects = array();

// Create an associative array to store the total grades for each subject for each student
$total_grades = array();

// Create an array to store the quarter 1 grades for each student
$quarter1_grades = array();
$num_subjects = count($unique_subjects);
$total_grades_1st = 0;
foreach ($quarter1_grades as $student_grades) {
    foreach ($student_grades as $grade) {
        $total_grades_1st += $grade;
    }
}
if ($num_subjects > 0) {
  $average_grade_1st = $total_grades_1st / $num_subjects;
} else {
  $average_grade_1st = 0;
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
            "1st" => "",
            "2nd" => "",
        );
    }

    if ($quarter == "First") {
        $grades[$studentname][$subjectname]["1st"] = ($grade === null) ? 0 : $grade;
        // Add the grade to the quarter 1 grades for the student
        if (!isset($quarter1_grades[$studentname])) {
            $quarter1_grades[$studentname] = array();
        }
        $quarter1_grades[$studentname][$subjectname] = ($grade === null) ? 0 : $grade;
    } else if ($quarter == "Second") {
        $grades[$studentname][$subjectname]["2nd"] = ($grade === null) ? 0 : $grade;
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
}
echo "<th class='text-center'> ".  $info_row['quarter'] .
" Sem<br>Final<br>Average</th><th></th><th></th>";
echo "</tr>
        <tr class='text-center'>";
foreach ($unique_subjects as $subject) {
    echo "<th class='text-center'>1st<br>Quarter</th><th class='text-center'>2nd<br>Quarter</th><th class='text-center'>"."Final</th><th></th>";
}

echo "<th></th><th></th></tr></thead><tbody>";

// Loop through the grades array and display the grades for each student and subject
foreach ($grades as $studentname => $subjects) {
  echo "<tr><td>".$studentname."</td>";
  foreach ($unique_subjects as $subject) {
      if (isset($subjects[$subject])) {
          echo "<td class='text-center'>".$subjects[$subject]["1st"]."</td><td>".$subjects[$subject]["2nd"]."</td><td></td>";
      
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
echo "<td class='text-center'>".$average_per_subject."</td>";
echo "<td class='text-center'>".round($average_per_subject)."</td>";


if ($average_per_subject >= 90 && $average_per_subject <= 94) {
  $honor = 'With honors';
} else if ($average_per_subject >= 95 && $average_per_subject <= 97) {
  $honor = 'With high honors';
} else if ($average_per_subject >= 98 && $average_per_subject <= 100) {
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
     
     </div> 
             


   
  </div>
  


    </div>

</div>


  
</body>
</html>



