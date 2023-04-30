<?php
// Include the database connection script
include "php/db_conn.php";

// Execute the SQL query to retrieve the student data
$student_query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter FROM grade ORDER by studentname";

$student_result = mysqli_query($conn, $student_query);

// Execute the SQL query to retrieve the grade information
$info_query = "SELECT * FROM grade LIMIT 1";
$info_result = mysqli_query($conn, $info_query);
$info_row = mysqli_fetch_assoc($info_result);

// Display the grade information in a paragraph
echo '<div style="display: flex; justify-content: space-between;">
      <p style="text-align: left;">School Year:<B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '
       . $info_row['sy'] . '</b><br> Grading Period:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>' . $info_row['quarter'] .' Quarter </b><br>Grade & Section:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $info_row['year'] . ' '. $info_row['section'] . '</b></p>
      <p style="text-align: right;">Class Adviser:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>' . $info_row['adviser'] . '</b></p>
    </div>';

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
echo '<thead><tr><th style="text-align:left" hidden>Student Name</th><th style="text-align:left">Last Name</th>
<th style="text-align:left">First Name</th><th style="text-align:left">Middle Name</th>';

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
echo '<th>TOTAL</th><th>AVE</th><th>AVE</th><th style="text-align:center">RANK</th>';
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

  echo '><td hidden> ' . $student_name . '</td>';
  
  $name_query = "SELECT lastname, firstname, middlename FROM grade WHERE studentname='$student_name' LIMIT 1";
  $name_result = mysqli_query($conn, $name_query);
  $name_row = mysqli_fetch_assoc($name_result);
  
  echo '<td>' . $name_row['lastname'] . '</td>';
  echo '<td>' . $name_row['firstname'] . '</td>';
  echo '<td>' . $name_row['middlename'] . '</td>';
  
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
    
    echo '<td style="text-align:center;">' . $average . '</td>';
  }
  
  $total = array_sum($total_subject_averages);
  $ave_decimal = round($total / count($total_subject_averages), 1);
  $ave_no_decimal = round($ave_decimal);
  echo '<td style="text-align:center;">' . $total . '</td>';
  echo '<td style="text-align:center;">' . $ave_decimal . '</td>';
  echo '<td style="text-align:center;">' . $ave_no_decimal . '</td>';
  echo '<td style="text-align:center;">' . $student_averages[$student_name][1] . '</td>';
}

?>

