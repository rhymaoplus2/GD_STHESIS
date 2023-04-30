
echo "<tbody>";
// Loop through the grades array and display the grades for each student and subject
foreach ($grades as $studentname => $subjects) {
  echo "<tr><td></td>";
  foreach ($unique_subjects as $subject) {
      if (isset($subjects[$subject])) {
          echo "<td class='text-center'></td><td></td><td></td>";
      } else {
          echo "<td></td><td></td><td><br>
          <br></td>";
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
echo "<td class='text-center'></td>";
echo "<td class='text-center'></td>";


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
 echo "<td class='text-center'></td></tr>";



}