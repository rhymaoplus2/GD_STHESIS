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
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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
  </style>
</head>

<body>


<div class="content">

<div class="container">
    <h1>Grades Table</h1>
    <?php
// Include the database connection script
include "php/db_conn.php";

// Execute the SQL query to retrieve the student data
$student_query = "SELECT studentname, subjectname, grade, quarter FROM grade ORDER by studentname";
$student_result = mysqli_query($conn, $student_query);

// Execute the SQL query to retrieve the grade information
$info_query = "SELECT sy, year, adviser, section FROM grade LIMIT 1";
$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);

// Display the grade information in a paragraph
echo '<p>SY: ' . $info_row['sy'] . ' | Year: ' . $info_row['year'] . ' | Adviser: ' . $info_row['adviser'] . ' | Section: ' . $info_row['section'] . '</p>';

// Initialize an empty array to hold the student data
$students = [];

// Loop through the student query results and organize the data by student and subject
while ($row = mysqli_fetch_assoc($student_result)) {
  $student_name = $row['studentname'];
  $subject_name = $row['subjectname'];
  $grade = $row['grade'];
  $quarter = $row['quarter'];

  if (!isset($students[$student_name])) {
    $students[$student_name] = [];
  }

  if (!isset($students[$student_name][$subject_name])) {
    $students[$student_name][$subject_name] = [
      'first' => null,
      'second' => null,
      'average' => null
    ];
  }

  if ($quarter === 'First') {
    $students[$student_name][$subject_name]['first'] = $grade;
  } else if ($quarter === 'Second') {
    $students[$student_name][$subject_name]['second'] = $grade;
  }
}

// Output the table header
echo '<table>';
echo '<thead><tr><th>Student Name</th>';

// Create the subject headers
$subject_headers = [];
foreach ($students as $student_name => $grades) {
  foreach ($grades as $subject_name => $data) {
    $subject_headers[$subject_name] = true;
  }
}
$subject_headers = array_keys($subject_headers);
foreach ($subject_headers as $subject_name) {
  echo '<th>' . $subject_name . '</th>';
}
echo '<th>TOTAL</th><th>AVE</th><th>AVE</th><th>RANK</th>';
// Output the table body
echo '<tbody>';// Create an array of all the student averages
$student_averages = [];
foreach ($students as $student_name => $grades) {
  $total_subject_averages = [];
  foreach ($subject_headers as $subject_name) {
    if (isset($grades[$subject_name])) {
      $first = $grades[$subject_name]['first'] ?? 0;
      $second = $grades[$subject_name]['second'] ?? 0;
      $average = round(($first + $second) / 2, 1);
      $total_subject_averages[] = $average;
    }
  }
  $total = array_sum($total_subject_averages);
  $ave_decimal = round($total / count($total_subject_averages), 1);
  $student_averages[$student_name] = $ave_decimal;
}

// Rank the students based on their average
arsort($student_averages);
$rank = 1;
foreach ($student_averages as $student_name => $average) {
  $student_averages[$student_name] = [$average, $rank];
  $rank++;
}

// Output the table rows with rank and highlight the row with the highest average
foreach ($students as $student_name => $grades) {
  echo '<tr';

  echo '><td>' . $student_name . '</td>';
  
  $total_subject_averages = [];
  
  foreach ($subject_headers as $subject_name) {
    if (!isset($students[$student_name][$subject_name])) {
      $average = '-';
    } else {
      $first = $students[$student_name][$subject_name]['first'] ?? 0;
      $second = $students[$student_name][$subject_name]['second'] ?? 0;
      $average = round(($first + $second) / 2, 1);
      
      $total_subject_averages[] = $average;
    }
    
    echo '<td>' . $average . '</td>';
  }
  
  $total = array_sum($total_subject_averages);
  $ave_decimal = round($total / count($total_subject_averages), 1);
  $ave_no_decimal = round($ave_decimal);
  
  echo '<td>' . $total . '</td>';
  echo '<td>' . $ave_decimal . '</td>';
  echo '<td>' . $ave_no_decimal . '</td>';
  echo '<td>' . $student_averages[$student_name][1] . '</td></tr>';
}

?>




      </tbody>
    </table>
  </div>
  


    </div>

</div>


  
</body>
</html>



