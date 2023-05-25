<?php

session_start();
include "../php/db_conn.php";
include "./php/records.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    $name = $_SESSION['name'];
    $query = "SELECT section, subject1, subject2, subject3, subject4, subject5, subject6, subject7, subject8, subject9, subject10
    FROM students 
    WHERE section = 'Lilac'  
    AND (subjectteacher1 = '".$name."' OR subjectteacher2 = '".$name."' OR subjectteacher3 = '".$name."' OR subjectteacher4 = '".$name."' OR subjectteacher5 = '".$name."' OR subjectteacher6 = '".$name."' OR subjectteacher7 = '".$name."' OR subjectteacher8 = '".$name."' OR subjectteacher9 = '".$name."' OR subjectteacher10 = '".$name."')
    GROUP BY section
    ORDER BY section";
    

    $result = mysqli_query($conn, $query);

    $tableData = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $section = $row['section'];
        $subjects = array_slice($row, 1); // Get the subject values only

        if (!isset($tableData[$section])) {
            $tableData[$section] = array();
        }

        $tableData[$section][] = $subjects;
    }

    // Print the table using Bootstrap 5 styling
    echo '<table class="table">';
    echo '<thead><tr><th>Section</th>';
    for ($i = 1; $i <= 10; $i++) {
        echo '<th>Subject' . $i . '</th>';
    }
    echo '</tr></thead>';
    echo '<tbody>';

    foreach ($tableData as $section => $subjects) {
        echo '<tr>';
        echo '<td>' . $section . '</td>';
        foreach ($subjects as $subject) {
            foreach ($subject as $value) {
                echo '<td>' . $value . '</td>';
            }
        }
        echo '</tr>';
    }
}


echo '</tbody></table>';
?>
