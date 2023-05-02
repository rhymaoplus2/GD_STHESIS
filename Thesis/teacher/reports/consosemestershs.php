
<?php
// Include the database connection script
include "php/db_conn.php";

// Execute the SQL query to retrieve the student data
$query = "SELECT lastname, firstname, middlename, studentname, subjectname, grade, quarter FROM grade WHERE quarter IN ('First', 'Second') ORDER BY studentname, subjectname";

// Execute the query and fetch the results
$result = mysqli_query($conn, $query);

// Create an associative array to store the grades for each student and subject
$grades = array();

// Create an array to store the unique subject names
$unique_subjects = array();

// Create an associative array to store the total grades for each subject for each student
$total_grades = array();

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
            "average" => "",
        );
    }

    if ($quarter == "First") {
        $grades[$studentname][$subjectname]["1st"] = ($grade === null) ? 0 : $grade;
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

// Add the average to the grades array
foreach ($total_grades as $subjectname => $students) {
    foreach ($students as $studentname => $total) {
        $count = count($grades[$studentname][$subjectname]);
        $average = round($total / $count, 2);
        $grades[$studentname][$subjectname]["average"] = $average;
    }
}
echo "<table border='1'>
      <thead>
        <tr>
          <th rowspan='2'>Student Name</th>";
          
foreach ($unique_subjects as $subject) {
    echo "<th colspan='3'>".$subject."</th>";
}
echo "<th>Average</th>";
echo "</tr>
        <tr>";
foreach ($unique_subjects as $subject) {
    echo "<th>1st</th><th>2nd</th><th>Average</th>";
}
echo "</tr>
      </thead>
      <tbody>";

foreach ($grades as $studentname => $subjects) {
    echo "<tr><td>".$studentname."</td>";
    foreach ($unique_subjects as $subject) {
        if (isset($subjects[$subject])) {
            echo "<td>".$subjects[$subject]["1st"]."</td><td>".$subjects[$subject]["2nd"]."</td><td>".$subjects[$subject]["average"]."</td>";
        } else {
            echo "<td></td><td></td><td></td>";
        }
    }
    // Calculate and display the average for the student
    $total_grade = 0;
    $num_subjects = 0;
    foreach ($total_grades as $subjectname => $student_grades) {
        if (isset($student_grades[$studentname])) {
            $total_grade += $student_grades[$studentname];
            $num_subjects++;
        }
    }
    $average = ($num_subjects > 0) ? round($total_grade / $num_subjects, 2) : 0;
    echo "<td>".$average."</td>";
    echo "</tr>";
}

echo "</tbody></table>";


          // Close the database connection
          mysqli_close($conn);

          ?>
          