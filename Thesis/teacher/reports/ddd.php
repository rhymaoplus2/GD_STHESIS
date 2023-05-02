<?php
// Include the database connection script
include "php/db_conn.php";
// Execute the SQL query to retrieve the student data
$student_query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter FROM grade ORDER by studentname, subjectname, quarter";

$student_result = mysqli_query($conn, $student_query);
$subject_totals = [];
$subject_counts = [];

// Initialize an empty array to hold the student data
$students = [];

// Loop through the student query results and organize the data by student and subject
while ($row = mysqli_fetch_assoc($student_result)) {
  $student_name = $row['studentname'];
  $subject_name = $row['subjectname'];
  $grade = $row['grade'];
  $quarter = $row['quarter'];
  if (!isset($subject_totals[$subject_name])) {
    $subject_totals[$subject_name] = 0;
    $subject_counts[$subject_name] = 0;
}

if (isset($grades[$subject_name])) {
    $first = $grades[$subject_name]['first'] ?? 0;
    $second = $grades[$subject_name]['second'] ?? 0;
    $average = round(($first + $second) / 2, 1);
    $subject_totals[$subject_name] += $average;
    $subject_counts[$subject_name]++;
}

  if (!isset($students[$student_name])) {
    $students[$student_name] = [];
  }

  if (!isset($students[$student_name][$subject_name])) {
    $students[$student_name][$subject_name] = [
      'first' => null,
      'second' => null,
      'average' => null,
      'quarters' => []
    ];
  }

  if ($quarter === 'First') {
    $students[$student_name][$subject_name]['first'] = $grade;
    $students[$student_name][$subject_name]['quarters']['first'] = $grade;
  } else if ($quarter === 'Second') {
    $students[$student_name][$subject_name]['second'] = $grade;
    $students[$student_name][$subject_name]['quarters']['second'] = $grade;
  }
}

// Output the table header
echo '<table>';
echo '<thead><tr><th style="text-align:left" hidden>Student Name</th><th style="text-align:left">Last Name</th>
<th style="text-align:left">First Name</th><th style="text-align:left">Middle Name</th>';

// Create the subject headers and quarter headers
$subject_headers = [];
$quarter_headers = ['First', 'Second'];
foreach ($students as $student_name => $grades) {
  foreach ($grades as $subject_name => $data) {
    $subject_headers[$subject_name] = true;
  }
}
$subject_headers = array_keys($subject_headers);
foreach ($subject_headers as $subject_name) {
    echo '<th>' . $subject_name . '</th>';
}
echo '<th>SUBJECT AVE</th><th>TOTAL</th><th>AVE</th><th>AVE</th><th style="text-align:center">RANK</th>';

// Output the table body
echo '<tbody>';
// Create an array of all the student averages
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
foreach ($student_averages as $student_name => $average) {$student_averages[$student_name] = [$average, $rank];
  $rank++;
  }
  
  // Output the table rows with rank and highlight the row with the highest average
  $highest_average = max(array_column($student_averages, 0));
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
    }
    echo '<td style="text-align:center;">' . $average . '</td>';
}
$subject_total = 0;
foreach ($subject_headers as $subject_name) {
    if (isset($students[$student_name][$subject_name])) {
        $first = $students[$student_name][$subject_name]['first'] ?? 0;
        $second = $students[$student_name][$subject_name]['second'] ?? 0;
        $average = round(($first + $second) / 2, 1);
        $subject_total += $average;
    }
}
$subject_ave = '-';
if ($subject_counts[$subject_name] > 0) {
    $subject_ave = round($subject_totals[$subject_name] / $subject_counts[$subject_name], 1);
}
echo '<td style="text-align:center;">' . $subject_ave . '</td>';
echo '<td style="text-align:center;">' . $subject_total . '</td>';
$student_total = array_sum($total_subject_averages);
$student_ave_decimal = round($student_total / count($total_subject_averages), 1);
$student_ave_no_decimal = round($student_ave_decimal);
echo '<td style="text-align:center;">' . $student_total . '</td>';
echo '<td style="text-align:center;">' . $student_ave_decimal . '</td>';
echo '<td style="text-align:center;">' . $student_ave_no_decimal . '</td>';
echo '<td style="text-align:center;">' . $student_averages[$student_name][1] . '</td>';


echo '</tbody></table>';

?>  



