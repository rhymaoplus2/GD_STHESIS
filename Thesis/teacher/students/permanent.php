<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM grade WHERE studentid='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "<h2>Student ID: " . $id . "</h2>";
        echo "<h3>Name: " . $row['studentname'] . "</h3><br>";

        // display grades per subject and quarter
        $subjects = array();
        mysqli_data_seek($result, 0); // reset the result pointer
        while ($row = mysqli_fetch_assoc($result)) {
            $subjectname = $row['subjectname'];
            $quarter = $row['quarter'];
            $grade = $row['grade'];

            // add subject to list of subjects if it's not there already
            if (!array_key_exists($subjectname, $subjects)) {
                $subjects[$subjectname] = array();
            }

            // add grade to subject's list of grades
            if (!array_key_exists($quarter, $subjects[$subjectname])) {
                $subjects[$subjectname][$quarter] = array();
            }
            array_push($subjects[$subjectname][$quarter], $grade);
        }

        // display subject grades and averages
        echo "<table>";
        foreach ($subjects as $subjectname => $quarters) {
            echo "<tr><td>" . $subjectname . "</td>";
            foreach ($quarters as $quarter => $grades) {
                $count = count($grades);
                $sum = array_sum($grades);
                $average = $sum / $count;
                echo "<td>" . $quarter . ": " . $average . "</td>";
            }
            $total_grades = array_merge(...array_values($quarters));
            $total_count = count($total_grades);
            $total_sum = array_sum($total_grades);
            $total_average = $total_sum / $total_count;
            echo "<td>Average: " . $total_average . "</td>";
            echo "</tr>";
        }
        echo "</table>";

    } else {
        echo "No student found with the given ID.";
    }
} else {
    echo "Invalid request.";
}
