<?php 
   include "php/read.php";
   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          { }  ?>


<!DOCTYPE html>
<html>
<head>
<title>JHS PERMANENT RECORDS</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>
<script src="path/jquery-ui.min.js"></script>


  <style>
  
  @media print {

/* Set the page size to A4 */
@page {
  size: A4;
  margin: 0;
  margin-top: 2cm;
  margin-bottom: 1cm;
}
.page1 {
    page-break-after: always;
  }
input{
    border:none!important;

}
  .page2 {
    page-break-before: always;
  }
/* Hide elements that are not required for printing */
.print-hidden {
  display: none;
}

/* Set the footer to be at the bottom of the page */
.print-footer {
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align: center;
  font-size: 12px;
  padding: 10px;
  border-top: 1px solid #ccc;
}

/* Set the page break after two pages */
.page-break {
  page-break-after: always;
}

/* Only display content in the last page */
.wrapper {
  counter-increment: page;
}

/* Add margin to the top of the SECOND page */
.wrapper:nth-of-type(n+3) {
  margin-top: 100px;
}

/* Add page number to the last page */
.wrapper:after {
  content: counter(page);
  display: block;
  font-size: 0;
  line-height: 0;
  page-break-after: always;
}
.wrapper:last-of-type:after {
  content: "";
}
.display{

    height: 10px;
}
table{
  border:10px!important;
}
/* Set the font size and line height for printing */

/* Set the width of the inputs for printing */
input {
  width: 30px;
  border: none;
}

/* Set the layout and positioning of the elements for printing */
.col-md-6 {
  display: inline-block;
  width: 48%;
  margin-right: 2%;
  vertical-align: top;
}

.text-start {
  margin-top: 10px;
}

input[type="text"] {
  margin-bottom: 5px;
}

.info{
  font-size: 9px;
}
.no-print {
    display: none;
  }
/* remove the URL from the header */
@page {
  @top-left {
    content: "";
  }
}

/* Hide elements that are not required for printing */
.btn {
  display: none;
}

/* Hide inputs */
input[type="button"],
input[type="submit"],
input[type="reset"],
input[type="checkbox"],
input[type="radio"],
select,
textarea {
  display: none;
}
select option {
  display: none;
}

/* Hide headings that are not required for printing */
h1, .print-header, .print-footer {
  display: none;
}

/* Add page break before each wrapper element */
.wrapper {
  page-break-before: always;
}
}

td {
  border: 1px solid black;
}

.failed {
  color: black;
  border-right-color: white; /* set border color to white */
}

.wrapper{
  font-size: 11px;
}
.container {

	display: flex;

	align-items: center;
	flex-direction: column;

}
hr {
  border: none;
  border: 1px solid;
  width: 120%;
  background-color: black;
}


.container form {
	width: 800px;
	padding: 20px;


}
.box {
	width: 750px;
}


.container text{
}
.border {
 
	border:none!important;
}
.link-right {
	display: flex;
	justify-content: flex-end;
}

.link-center {
	display: flex;
	justify-content: flex-end;
}
input{
    text-align: center;
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

  .fixed-button {
  position: fixed;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 999;
}

  .button{
      margin-left: 5rem;
      margin-top: 11rem;
  }

  .form-label, .form-select {
      font-size: inherit;
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

  .text2
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }

.top-container {
    background-color: white;
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

  .addbutton
  {
    margin-left:80%;
  }

  .btn-bold {
  font-weight: bold;
}

#left 
{
  float: left;
  width: 50%;
  font-size: 13px
}


#right {
  float: right;
  width: 34%;
  font-size: 13px
}

#left, #right {
    display: inline-block;
    vertical-align: top;
  }

  select#section {
  font-weight: bold;
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


#my-element img {
  background: none;
  border: none;
}



#my-element button:hover img {
  opacity: 0.8;
}
  


  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }


  
  .sticky + .content {
    padding-top: 102px;
  }



  .dragged {
            opacity: 0.5;
            background-color: #f7f7f7;
            cursor: move;
        }



        .drag:hover {
  cursor: pointer;
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  color: white;
}


#my-table td {
  font-size: 10px;
  padding: 2px;
}


.fail {
   color: black;
}


.horizontal-line {
  border-top: 3px solid black; /* Change this value to adjust the thickness and color */
  margin: 10px 0; /* Add margin to adjust the spacing around the line */
}

.underline1 {
    border-bottom: 1px solid black; /* Change the thickness of the underline as needed */
    display: inline-block; /* Make the underline only take up the width of its content */
    width: 262px; /* Change the width of the underline as needed */
  }
  .underline2 {
    border-bottom: 1px solid black; /* Change the thickness of the underline as needed */
    display: inline-block; /* Make the underline only take up the width of its content */
    width: 60px; /* Change the width of the underline as needed */
  }
  .underline3 {
    border-bottom: 1px solid black; /* Change the thickness of the underline as needed */
    display: inline-block; /* Make the underline only take up the width of its content */
    width: 70px; /* Change the width of the underline as needed */
  }
  .underline4 {
    border-bottom: 1px solid black; /* Change the thickness of the underline as needed */
    display: inline-block; /* Make the underline only take up the width of its content */
    width: 100px; /* Change the width of the underline as needed */
  }
  </style>

</head>
<body>
<div class="border">
    <div class="page1">

    <div style="font-size:12px;" class="text-center mb-3">
      Republic of the Philippines
      <br>
      MINDANAO STATE UNIVERSITY
      <br>
      (Maigo School of Arts and Trades)
      <br>
      Maigo, Lanao del Norte
</div>
       <div style="font-size:12px;" class="text-center fw-bold mb-3">
        SECONDARY STUDENT'S PERMANENT RECORD
</div>
<br>

    <?php
include "php/db_conn.php";
$query = "SELECT * FROM students WHERE id = 1800217";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $lastname = $row['lastname'];
    $firstname = $row['firstname'];
    $middlename = $row['middlename'];
    $birthplace = $row['birthplace'];
    $parentplace = $row['parentplace'];
    $elemschool = $row['elemschool'];
    $elemaverage = $row['elemaverage'];
    $elemyear = $row['elemyear'];
    $parent = $row['parent'];
    $occupation = $row['occupation'];
    $birthday = date('F d, Y', strtotime($row['birthday']));

    echo '
  <div style="font-size:10px;">
    <div class="row" >
        <div class="col">
        NAME: <b>'.$lastname.'&nbsp;'.$firstname.'&nbsp;'.$middlename.'</b>
        </div>
        <div class="col-7">
        DATE OF BIRTH: <b>'.$birthday.'</b>
        </div>
        </div>
    
        PLACE OF BIRTH: <b> '.$birthplace.' </b>
        <br>
        <div class="row">
        <div class="col-7">
          PARENT OR GUARDIAN: <b>'.$parent.'</b>
        </div>
        <div class="col">
          OCCUPATION: <b>'.$occupation.'</b>
        </div>
      </div>
        ADDRESS OF PARENT OR GUARDIAN: <b> '.$parentplace.' </b>
        <div class="row">
        <div class="col-7">
          INTERMEDIATE COURSE COMPLETED: <b>'.$elemschool.'</b></p>
        </div>
        <div class="col">
          <p>YEAR: <b>'.$elemyear.'</b></p>
        </div>
        <div class="col">
          <p>GEN Ave: <b>'.$elemaverage.'%</b></p>
        </div>
      </div>
      </div>
    ';  
    
}
?>


<!-- GRADE 7 -->
<?php
include "php/db_conn.php";
function validate($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$id = validate($_GET['id']);
$query = "SELECT * FROM grade WHERE studentid = '$id' AND year='7'";
$result = mysqli_query($conn, $query);
$total = 0;
$count = 0;

// Retrieve the value of $sy from the first row of the table
if (mysqli_num_rows($result) > 0) {
    $firstRow = mysqli_fetch_assoc($result);
    $sy = $firstRow['sy'];
    
    // Initialize an empty array to store the grade values for each quarter
    $grades = [];

    // Populate the $grades array with the grade values for each quarter
    do {
        $grades[$firstRow['subjectname']][$firstRow['quarter']] = $firstRow['grade'];
    } while ($firstRow = mysqli_fetch_assoc($result));
} else {
    // Handle the case when the record is not found or sy column is not available
    $sy = 'Unknown';
    $grades = [];
}

echo '
<div class="horizontal-line" style="font-size:10px;">
    CLASSIFIED as Total number of years in school to complete elementary course:&nbsp;&nbsp;  &nbsp6 yrs.<br>
    <div class="row">
        <div class="col">
        FIRST&nbsp;&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;&nbsp;SCHOOL:&nbsp;Maigo School of Arts & Trades
        </div>
        <div class="col">
            SY:&nbsp;' . $sy . '
        </div>
    </div>
</div>';

// Build the HTML table structure
echo '
<table class="table-bordered" style="font-size:10px; width: 100%; height:10%;">
    <tr>
        <td rowspan="2" style="width: 7%;" class="text-center">CURR. YEAR</td>
        <td rowspan="2" style="width: 40%;" class="text-center">SUBJECT</td>
        <td colspan="4" class="text-center">GRADING PERIOD</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CS.<br>AVE.</td>
        <td rowspan="2" style="width: 10%;" class="text-center">ACTION<br>TAKEN</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CREDITS<br>EARNED</td>
    </tr>
    <tr>
        <td style="width: 5%;" class="text-center">1</td>
        <td style="width: 5%;" class="text-center">2</td>
        <td style="width: 5%;" class="text-center">3</td>
        <td style="width: 5%;" class="text-center">4</td>
    </tr>
    <tbody>';

// Determine the number of subjects
$subjectCount = count($grades);

// Calculate the number of empty rows to display in tbody
$emptyRowCount = 11 - $subjectCount;

// Display the grade values and average in the table
foreach ($grades as $subject => $quarterGrades) {
    echo '<tr>
            <td class="text-center">|</td>
            <td>&nbsp;' . $subject . '</td>
            <td class="text-center">' . ($quarterGrades['FIRST'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['SECOND'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['THIRD'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['FOURTH'] ?? '') . '</td>';

    $averageGrade = array_sum($quarterGrades) / count($quarterGrades);
    echo '<td class="text-center">' . number_format($averageGrade, 2) . '</td>';
    $total += $averageGrade;
    $count++;
    
    if ($averageGrade >= 75) {
        echo '<td class="text-center">Passed</td>';
    } else {
        echo '<td class="text-center">Failed</td>';
    }

    echo '<td class="text-center"><input style="border: 2px solid #333;"></td>
        </tr>';
}

// Display empty rows for the remaining rows in tbody
for ($i = 0; $i < $emptyRowCount; $i++) {
    echo '<tr>
            <td class="text-center"><br></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td></td>
        </tr>';
}

echo '<tr>
        <td class="text-center"><br></td>
        <td></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>';
        
if ($count != 0) {
    echo '<td class="text-center">' . ($total / $count) . '</td>';
}

echo '</tr>
    </tbody>


';
echo '</tbody>';

echo' 

<tbody style="border-left: none;">
  <td class="text-center" style="border-left: none; border-right: none;" colspan="8">
  JUNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  JULY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  AUG.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  SEPT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  OCT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  NOV.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DEC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  FEB.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  MAR.</td>
  <td  class="text-center"style="border-left: none; border-right: none;">TOTAL</td>
</tbody>
<tbody style=" border: none;"border-left: none;">
  <td style="border-left: none; border-right: none;" colspan="8">Days of School</td>
  <td  class="text-center"style="border-left: none; border-right: none;"><input style="border: 2px solid #333;"></td>
</tbody>
<tbody>
<tr style=" border: none;"border-left: none;">
  <td style="border: none;" colspan="8">Days Present</td>
  <td class="text-center" style="border: none;"><input style="border: 2px solid #333;"></td>
  </tr>
  </tbody>
  </table>

';
?>

<!-- GRADE 8 --> 
<?php
include "php/db_conn.php";
$query = "SELECT * FROM grade WHERE studentid = '$id' AND year='8'";
$result = mysqli_query($conn, $query);
$total = 0;
$count = 0;

// Retrieve the value of $sy from the first row of the table
if (mysqli_num_rows($result) > 0) {
    $firstRow = mysqli_fetch_assoc($result);
    $sy = $firstRow['sy'];
    
    // Initialize an empty array to store the grade values for each quarter
    $grades = [];

    // Populate the $grades array with the grade values for each quarter
    do {
        $grades[$firstRow['subjectname']][$firstRow['quarter']] = $firstRow['grade'];
    } while ($firstRow = mysqli_fetch_assoc($result));
} else {
    // Handle the case when the record is not found or sy column is not available
    $sy = 'Unknown';
    $grades = [];
}

echo '
<div  style="font-size:10px;">
CLASSIFIED as Total number of years in school to date:&nbsp;&nbsp;  &nbsp;7 years.<br>
    <div class="row">
        <div class="col">
        SECOND&nbsp;&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;&nbsp;SCHOOL:&nbsp;Maigo School of Arts & Trades
        </div>
        <div class="col">
            SY:&nbsp;' . $sy . '
        </div>
    </div>
</div>';

// Build the HTML table structure
echo '
<table class="table-bordered" style="font-size:10px; width: 100%; height:10%;">
    <tr>
        <td rowspan="2" style="width: 7%;" class="text-center">CURR. YEAR</td>
        <td rowspan="2" style="width: 40%;" class="text-center">SUBJECT</td>
        <td colspan="4" class="text-center">GRADING PERIOD</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CS.<br>AVE.</td>
        <td rowspan="2" style="width: 10%;" class="text-center">ACTION<br>TAKEN</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CREDITS<br>EARNED</td>
    </tr>
    <tr>
        <td style="width: 5%;" class="text-center">1</td>
        <td style="width: 5%;" class="text-center">2</td>
        <td style="width: 5%;" class="text-center">3</td>
        <td style="width: 5%;" class="text-center">4</td>
    </tr>
    <tbody>';

// Determine the number of subjects
$subjectCount = count($grades);

// Calculate the number of empty rows to display in tbody
$emptyRowCount = 11 - $subjectCount;

// Display the grade values and average in the table
foreach ($grades as $subject => $quarterGrades) {
    echo '<tr>
            <td class="text-center">|</td>
            <td>&nbsp;' . $subject . '</td>
            <td class="text-center">' . ($quarterGrades['FIRST'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['SECOND'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['THIRD'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['FOURTH'] ?? '') . '</td>';

    $averageGrade = array_sum($quarterGrades) / count($quarterGrades);
    echo '<td class="text-center">' . number_format($averageGrade, 2) . '</td>';
    $total += $averageGrade;
    $count++;
    
    if ($averageGrade >= 75) {
        echo '<td class="text-center">Passed</td>';
    } else {
        echo '<td class="text-center">Failed</td>';
    }

    echo '<td class="text-center"><input style="border: 2px solid #333;"></td>
        </tr>';
}

// Display empty rows for the remaining rows in tbody
for ($i = 0; $i < $emptyRowCount; $i++) {
    echo '<tr>
            <td class="text-center"><br></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td></td>
        </tr>';
}

echo '<tr>
        <td class="text-center"><br></td>
        <td></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>';
        
if ($count != 0) {
    echo '<td class="text-center">' . ($total / $count) . '</td>';
}
else{
  echo '<td class="text-center"> </td>';
}
echo '</tr>
    </tbody>


';
echo '</tbody>';

echo' 

<tbody style="border-left: none;">
  <td class="text-center" style="border-left: none; border-right: none;" colspan="8">
  JUNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  JULY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  AUG.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  SEPT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  OCT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  NOV.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DEC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  FEB.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  MAR.</td>
  <td  class="text-center"style="border-left: none; border-right: none;">TOTAL</td>
</tbody>
<tbody style=" border: none;"border-left: none;">
  <td style="border-left: none; border-right: none;" colspan="8">Days of School</td>
  <td  class="text-center"style="border-left: none; border-right: none;"><input style="border: 2px solid #333;"></td>
</tbody>
<tbody>
<tr style=" border: none;"border-left: none;">
  <td style="border: none;" colspan="8">Days Present</td>
  <td class="text-center" style="border: none;"><input style="border: 2px solid #333;"></td>
  </tr>
  </tbody>
  <tbody>
  <tr style=" border-bottom: none;">
 <td style=" border : none;">
 </td>
 </tr>
  </tbody>
  </table>

';
?>

</div>


<div class="page2">

<!-- GRADE 9 --> 
<?php
include "php/db_conn.php";
$query = "SELECT * FROM grade WHERE studentid = '$id' AND year='9'";
$result = mysqli_query($conn, $query);
$total = 0;
$count = 0;

// Retrieve the value of $sy from the first row of the table
if (mysqli_num_rows($result) > 0) {
    $firstRow = mysqli_fetch_assoc($result);
    $sy = $firstRow['sy'];
    
    // Initialize an empty array to store the grade values for each quarter
    $grades = [];

    // Populate the $grades array with the grade values for each quarter
    do {
        $grades[$firstRow['subjectname']][$firstRow['quarter']] = $firstRow['grade'];
    } while ($firstRow = mysqli_fetch_assoc($result));
} else {
    // Handle the case when the record is not found or sy column is not available
    $sy = 'Unknown';
    $grades = [];
}

echo '
<div  style="font-size:10px;">
CLASSIFIED as Total number of years in school to date:&nbsp;&nbsp;  &nbsp;8 years.<br>
    <div class="row">
        <div class="col">
        THIRD&nbsp;&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;&nbsp;SCHOOL:&nbsp;Maigo School of Arts & Trades
        </div>
        <div class="col">
            SY:&nbsp;' . $sy . '
        </div>
    </div>
</div>';

// Build the HTML table structure
echo '
<table class="table-bordered" style="font-size:10px; width: 100%; height:10%;">
    <tr>
        <td rowspan="2" style="width: 7%;" class="text-center">CURR. YEAR</td>
        <td rowspan="2" style="width: 40%;" class="text-center">SUBJECT</td>
        <td colspan="4" class="text-center">GRADING PERIOD</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CS.<br>AVE.</td>
        <td rowspan="2" style="width: 10%;" class="text-center">ACTION<br>TAKEN</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CREDITS<br>EARNED</td>
    </tr>
    <tr>
        <td style="width: 5%;" class="text-center">1</td>
        <td style="width: 5%;" class="text-center">2</td>
        <td style="width: 5%;" class="text-center">3</td>
        <td style="width: 5%;" class="text-center">4</td>
    </tr>
    <tbody>';

// Determine the number of subjects
$subjectCount = count($grades);

// Calculate the number of empty rows to display in tbody
$emptyRowCount = 11 - $subjectCount;

// Display the grade values and average in the table
foreach ($grades as $subject => $quarterGrades) {
    echo '<tr>
            <td class="text-center">|</td>
            <td>&nbsp;' . $subject . '</td>
            <td class="text-center">' . ($quarterGrades['FIRST'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['SECOND'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['THIRD'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['FOURTH'] ?? '') . '</td>';

    $averageGrade = array_sum($quarterGrades) / count($quarterGrades);
    echo '<td class="text-center">' . number_format($averageGrade, 2) . '</td>';
    $total += $averageGrade;
    $count++;
    
    if ($averageGrade >= 75) {
        echo '<td class="text-center">Passed</td>';
    } else {
        echo '<td class="text-center">Failed</td>';
    }

    echo '<td class="text-center"><input style="border: 2px solid #333;"></td>
        </tr>';
}

// Display empty rows for the remaining rows in tbody
for ($i = 0; $i < $emptyRowCount; $i++) {
    echo '<tr>
            <td class="text-center"><br></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td></td>
        </tr>';
}

echo '<tr>
        <td class="text-center"><br></td>
        <td></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>';
        if ($count != 0) {
          echo '<td class="text-center">' . ($total / $count) . '</td>';
      }
      else{
        echo '<td class="text-center"> </td>';
      }
echo '</tr>
    </tbody>


';
echo '</tbody>';

echo' 

<tbody style="border-left: none;">
  <td class="text-center" style="border-left: none; border-right: none;" colspan="8">
  JUNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  JULY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  AUG.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  SEPT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  OCT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  NOV.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DEC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  FEB.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  MAR.</td>
  <td  class="text-center"style="border-left: none; border-right: none;">TOTAL</td>
</tbody>
<tbody style=" border: none;"border-left: none;">
  <td style="border-left: none; border-right: none;" colspan="8">Days of School</td>
  <td  class="text-center"style="border-left: none; border-right: none;"><input style="border: 2px solid #333;"></td>
</tbody>
<tbody>
<tr style=" border: none;"border-left: none;">
  <td style="border: none;" colspan="8">Days Present</td>
  <td class="text-center" style="border: none;"><input style="border: 2px solid #333;"></td>
  </tr>
  </tbody>
  <tbody>
  <tr style=" border-bottom: none;">
 <td style=" border : none;">
 </td>
 </tr>
  </tbody>
  </table>

';
?>
<!-- GRADE 10 --> 
<?php
include "php/db_conn.php";

// First query to retrieve grade information
$query = "SELECT * FROM grade WHERE studentid = '$id' AND year = '10'";
$result = mysqli_query($conn, $query);
$total = 0;
$count = 0;

// Retrieve the value of $sy from the first row of the table
if (mysqli_num_rows($result) > 0) {
    $firstRow = mysqli_fetch_assoc($result);
    $sy = $firstRow['sy'];
    
    // Initialize an empty array to store the grade values for each quarter
    $grades = [];

    // Populate the $grades array with the grade values for each quarter
    do {
        $grades[$firstRow['subjectname']][$firstRow['quarter']] = $firstRow['grade'];
    } while ($firstRow = mysqli_fetch_assoc($result));
} else {
    // Handle the case when the record is not found or sy column is not available
    $sy = 'Unknown';
    $grades = [];
}

// Second query to retrieve value in pname column where id is 1 from the settings table
$querySettings = "SELECT pname FROM settings WHERE id = 1";
$resultSettings = mysqli_query($conn, $querySettings);

if (mysqli_num_rows($resultSettings) > 0) {
    $firstRowSettings = mysqli_fetch_assoc($resultSettings);
    $pname = strtoupper($firstRowSettings['pname']);
} else {
    $pname = 'Unknown';
}

echo '
<div  style="font-size:10px;">
    CLASSIFIED as Total number of years in school to date:&nbsp;&nbsp;  &nbsp;9 years.<br>
    <div class="row">
        <div class="col">
            FOURTH&nbsp;&nbsp;&nbsp;&nbsp;YEAR&nbsp;&nbsp;&nbsp;&nbsp;SCHOOL:&nbsp;Maigo School of Arts & Trades
        </div>
        <div class="col">
            SY:&nbsp;' . $sy . '
        </div>
    </div>
</div>';

// Build the HTML table structure
echo '
<table class="table-bordered" style="font-size:10px; width: 100%; height:10%;">
    <tr>
        <td rowspan="2" style="width: 7%;" class="text-center">CURR. YEAR</td>
        <td rowspan="2" style="width: 40%;" class="text-center">SUBJECT</td>
        <td colspan="4" class="text-center">GRADING PERIOD</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CS.<br>AVE.</td>
        <td rowspan="2" style="width: 10%;" class="text-center">ACTION<br>TAKEN</td>
        <td rowspan="2" style="width: 10%;" class="text-center">CREDITS<br>EARNED</td>
    </tr>
    <tr>
        <td style="width: 5%;" class="text-center">1</td>
        <td style="width: 5%;" class="text-center">2</td>
        <td style="width: 5%;" class="text-center">3</td>
        <td style="width: 5%;" class="text-center">4</td>
    </tr>
    <tbody>';

// Determine the number of subjects
$subjectCount = count($grades);

// Calculate the number of empty rows to display in tbody
$emptyRowCount = 11 - $subjectCount;

// Display the grade values and average in the table
foreach ($grades as $subject => $quarterGrades) {
    echo '<tr>
            <td class="text-center">|</td>
            <td>&nbsp;' . $subject . '</td>
            <td class="text-center">' . ($quarterGrades['FIRST'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['SECOND'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['THIRD'] ?? '') . '</td>
            <td class="text-center">' . ($quarterGrades['FOURTH'] ?? '') . '</td>';

    $averageGrade = array_sum($quarterGrades) / count($quarterGrades);
    echo '<td class="text-center">' . number_format($averageGrade, 2) . '</td>';
    $total += $averageGrade;
    $count++;
    
    if ($averageGrade >= 75) {
        echo '<td class="text-center">Passed</td>';
    } else {
        echo '<td class="text-center">Failed</td>';
    }

    echo '<td class="text-center"><input style="border: 2px solid #333;"></td>
        </tr>';
}

// Display empty rows for the remaining rows in tbody
for ($i = 0; $i < $emptyRowCount; $i++) {
    echo '<tr>
            <td class="text-center"><br></td>
            <td></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td></td>
        </tr>';
}

echo '<tr>
        <td class="text-center"><br></td>
        <td></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>
        <td class="text-center"></td>';
        if ($count != 0) {
          echo '<td class="text-center">' . ($total / $count) . '</td>';
      }
      else{
        echo '<td class="text-center"> </td>';
      }
echo '</tr>
    </tbody>


';
echo '</tbody>';

echo' 

<tbody style="border-left: none;">
  <td class="text-center" style="border-left: none; border-right: none;" colspan="8">
  JUNE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  JULY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  AUG.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  SEPT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  OCT.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  NOV.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  DEC.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  FEB.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  MAR.</td>
  <td  class="text-center"style="border-left: none; border-right: none;">TOTAL</td>
</tbody>
<tbody style=" border: none;"border-left: none;">
  <td style="border-left: none; border-right: none;" colspan="8">Days of School</td>
  <td  class="text-center"style="border-left: none; border-right: none;"><input style="border: 2px solid #333;"></td>
</tbody>
<tbody>
<tr style=" border: none;"border-left: none;">
  <td style="border: none;" colspan="8">Days Present</td>
  <td class="text-center" style="border: none;"><input style="border: 2px solid #333;"></td>
  </tr>
  </tbody>
  <tbody>
  <tr style=" border-bottom: none;">
 <td style=" border : none;">
 </td>
 </tr>
  </tbody>
  <tbody class="text-left">
<tr class="text-left" style=" border: none;"border-left: none;">
<td style="border: none;" colspan=""></td>
  <td class="text-left" style="border: none;" colspan="8">
  <div class="">Total number of year in school to date: 10 years</div>

  <div class="mb-3">REMARKS: <b>Graduated on <input class="text-start fw-bold "style="border: 2px solid #333; width:300px;"></b>
  </div>
  </td>
  </tr>
  </tbody>
  <tbody >
<tr style=" font-size:12px; border: none;"border-left: none;">
  <td style="border: none;" colspan="8">PURPOSE:<input class="fw-bold   text-start" style="width:400px; border: 2px solid #333;"></td>
  <td class="text-center" style="border: none;"></td>
  </tr>
  </tbody>
  <tbody class="text-left">
  <tr class="text-left" style=" border: none;"border-left: none;">
  <td style="border: none;" colspan=""></td>
    <td class="text-left" style="border: none;" colspan="8">
 Copy for
  
<input class="text-start"style="border: 2px solid #333; width:300px;">
    </div>
    </td>
    </tr>
    </tbody>
    <tbody>
    <tr style=" font-size:12px; border: none;"border-left: none;">
      <td style="border: none;" colspan="6">
      NOT VALID WITHOUT SEAL</td>
      <td colspan="6" class="text-center" style="border: none;">
      
      <b> '.$pname.' </b>
      
      </td>
      </tr>
      </tbody>
  </table>

';
?>

</div>


</div>

</body>
</html> 
