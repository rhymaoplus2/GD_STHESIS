<?php 
   include "php/read.php";
   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          { }  ?>


<!DOCTYPE html>
<html>
<head>

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
  margin-left: 1cm;
  margin-right: 1cm;
}
.page1 {
    page-break-after: always;
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

/* Add margin to the top of the second page */
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

/* Set the font size and line height for printing */
.row, .text-start {
  font-size: 7px;
  line-height: 1.2;
}

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
  color: red;
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
  padding: 10px;
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
   color: red;
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

<div class="page1">
	<div class="border">
  <div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/msuperma.png" class=" p top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
</div>
    <div class="info" >
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

    $sql = "SELECT * FROM students WHERE id='$id' AND grade= 11";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "Name: <strong>" . $row['fullname']."</strong>";
        echo "<br>";
        echo "Gender: <strong>" . $row['gender']."</strong>";
        echo "<br>";
        echo "Date of Birth: <strong>" . $row['birthday']."</strong>";
        echo "<br>";
        echo "Place of Birth: <strong>" . $row['birthplace']."</strong>";
        echo "<br>";
        echo "Parent / Guardian: <strong>" . $row['parent']."</strong>";
        echo "<br>";
        echo "Ocupation: <strong>"."</strong>" ;
        echo "<br>";
        echo "Address: <strong>" . $row['address']."</strong>";
        echo "<br>";
        echo "Junior High School Completed: <strong>"."</strong>";
        echo "<br>";
        echo "Average: <strong>"."<input type='text' name='promotable-to' style='width:50px;''></strong>";
        echo "<br>";
        echo "Total number of years to complete Junior High School: <strong>"." <input type='text' name='promotable-to' style='width:50px;''> </strong>";
    

    
}
}
?>

</div>

<div class="horizontal-line"></div>
<div class="row" style=";">
  <div class="col-md-6">
    <div class="text-start">
 


    <?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);
    $sql = "SELECT * FROM students WHERE id='$id' AND grade= 11";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "SCHOOL: <strong>" . "MSU-MAIGO SCHOOL OF ARTS AND TRADES"."</strong>";
        echo "<br>";
        echo "SCHOOL YEAR: <strong>" . $row['syear']."</strong>";
        echo "<br>";
        echo "GRADE & SECTION: <strong>" . $row['grade']."-". $row['section']."</strong>";
        echo "<br>";
        echo "TRACK/SECTION: <strong>" . $row['trackstrand']."</strong>";
        echo "<br>";
        echo "Specialization: <strong>" . $row['parent']."</strong>";
        echo "<br>";
        echo "SEMESTER: <strong>"."FIRST</strong>" ;
 
      
    
}
}
?>






    </div>
    <br>
  </div>
  <div class="col-md-6">
    <div class="text-start">
     
    <?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM students WHERE id='$id' AND grade= 11";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "SCHOOL: <strong>" . "MSU-MAIGO SCHOOL OF ARTS AND TRADES"."</strong>";
        echo "<br>";
        echo "SCHOOL YEAR: <strong>" . $row['syear']."</strong>";
        echo "<br>";
        echo "GRADE & SECTION: <strong>" . $row['grade']."-". $row['section']."</strong>";
        echo "<br>";
        echo "TRACK/SECTION: <strong>" . $row['trackstrand']."</strong>";
        echo "<br>";
        echo "Specialization: <strong>" . $row['parent']."</strong>";
        echo "<br>";
        echo "SEMESTER: <strong>"."SECOND</strong>" ;
 
      
    
}
}
?>

    </div>
  </div>
</div>

  <div class="row">
 <div class="col">
 <table class="table border" id="my-table">

    <tbody>
 
    <thead class="text-center align-middle" style="font-weight:bold;">
    <td  style=" width:60%;" class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
      <td class="text-center align-middle" colspan="2" style="width:50px;">QUARTER</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">FINAL<br>RATING</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">ACTION<br>TAKEN</td>
    </tr>
    <tr class="text-center align-middle" style="font-weight:bold;">
      <td class="text-center align-middle" style="width:50px;">1st</td>
      <td class="text-center align-middle" style="width:50px;">2nd</td>
    </thead>
</tr>


   
    <tr>
    <td style=" " class="custom-class" colspan="5"><b>Core Subjects</b></td>
    </tr>
    <tr>
<td style=" " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style="" class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='FIRST' OR semester='first' OR semester=' First') AND year=11";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
    ?>
     
        <?php // display grades per subject and quarter
        $subjects = array();
        mysqli_data_seek($result, 0); // reset the result pointer
        while ($row = mysqli_fetch_assoc($result)) {
            $subjectname = $row['subjectname'];
            $quarter = $row['quarter'];
            $grade = $row['grade'];
            $total_average = 0;

            // add subject to list of subjects if it's not there already
            if (!array_key_exists($subjectname, $subjects)) {
                $subjects[$subjectname] = array();
            }

            // add grade to subject's list of grades
            if (!array_key_exists($quarter, $subjects[$subjectname])) {
                $subjects[$subjectname][$quarter] = array();
            }

            // set the grade to 0 if it is not set or empty
            if (empty($grade)) {
                $grade = 0;
            }

            // set the first or second quarter grade
            if ($quarter == "First") {
                $first = $grade;
                $second = 0;
            } else if ($quarter == "Second") {
                $first = 0;
                $second = $grade;
            }

            array_push($subjects[$subjectname][$quarter], $grade);
        }
        ?>

        <?php // display subject grades and averages
        foreach ($subjects as $subjectname => $quarters) { 
            $first_average = 0;
            $second_average = 0;
            ?>
            
            <tr>
                <td style="" style="width:60%;"><?php echo $subjectname ?></td>
                <?php foreach ($quarters as $quarter => $grades) {
                    $count = count($grades);
                    $sum = array_sum($grades);
                    $average = $sum / $count;
                    if ($quarter == "First") {
                        $first_average = $average;
                    } else if ($quarter == "Second") {
                        $second_average = $average;
                    }
                ?>
                <?php } ?>
                <td style=" "class="text-center"><?php echo $first_average ?></td>
                <td style=" "class="text-center"><?php echo $second_average ?></td>
                <td style="; "class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
                <td style=" "class="text-center <?php echo (($first_average + $second_average) / 2 >= 75) ? 'pass' : 'fail'; ?>"
    <?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: black;"'; } else { echo 'style="color: red;"'; } ?>>
    <?php echo (($first_average + $second_average) / 2 >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

            </tr>
            
            <?php
            // add the subject average to the total average
            $total_average += ($first_average + $second_average) / 2;
        } 
        
        // calculatethe overall average and round it to 2 decimal places
$overall_average = round($total_average / count($subjects), 2);
?>
        <tr  style=" ">
        <td  style=" width:60%;"><strong>GEN. AVE. for the Semester</strong></td>

        <td style="" colspan="3" class="text-center"><?php echo intval($overall_average) ?></td>

        <td style="" class="text-center <?php echo ($overall_average >= 75) ? 'pass' : 'fail'; ?>">
   <?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

      </tr>
  
    <?php 
    }
}else {
  ?>

  <table>

      <tr>
          <td colspan="4">No grades found for this student in Second Semester.....</td>
      </tr>
  </table>

<?php 
}
?>
</tbody>
</table>

<script>
$(function() {
  $("#my-table tbody").sortable({
    cursor: "move",
    opacity: 0.6
  });
});
</script>
</div>
   
<div class="col">
<div class="col">
 <table class="table border" id="my-table">

    <tbody>
 
    <thead class="text-center align-middle" style="font-weight:bold;">
      <td style=" width:60%;"  class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
      <td class="text-center align-middle" colspan="2" style="width:50px;">QUARTER</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">FINAL<br>RATING</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">ACTION<br>TAKEN</td>
    </tr>
    <tr class="text-center align-middle" style="font-weight:bold;">
      <td class="text-center align-middle" style="width:50px;">1st</td>
      <td class="text-center align-middle" style="width:50px;">2nd</td>
    </thead>
</tr>


   
    <tr>
    <td style=" " class="custom-class" colspan="5"><b>Core Subjects</b></td>
    </tr>
    <tr>
<td style=" " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style=" " class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='Second' OR semester='second' OR semester=' Second') AND year=11";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
    ?>
     
        <?php // display grades per subject and quarter
        $subjects = array();
        mysqli_data_seek($result, 0); // reset the result pointer
        while ($row = mysqli_fetch_assoc($result)) {
            $subjectname = $row['subjectname'];
            $quarter = $row['quarter'];
            $grade = $row['grade'];
            $total_average = 0;

            // add subject to list of subjects if it's not there already
            if (!array_key_exists($subjectname, $subjects)) {
                $subjects[$subjectname] = array();
            }

            // add grade to subject's list of grades
            if (!array_key_exists($quarter, $subjects[$subjectname])) {
                $subjects[$subjectname][$quarter] = array();
            }

            // set the grade to 0 if it is not set or empty
            if (empty($grade)) {
                $grade = 0;
            }

            // set the first or second quarter grade
            if ($quarter == "First") {
                $first = $grade;
                $second = 0;
            } else if ($quarter == "Second") {
                $first = 0;
                $second = $grade;
            }

            array_push($subjects[$subjectname][$quarter], $grade);
        }
        ?>

        <?php // display subject grades and averages
        foreach ($subjects as $subjectname => $quarters) { 
            $first_average = 0;
            $second_average = 0;
            ?>
            
            <tr>
                <td style=" " style="width:60%;"><?php echo $subjectname ?></td>
                <?php foreach ($quarters as $quarter => $grades) {
                    $count = count($grades);
                    $sum = array_sum($grades);
                    $average = $sum / $count;
                    if ($quarter == "First") {
                        $first_average = $average;
                    } else if ($quarter == "Second") {
                        $second_average = $average;
                    }
                ?>
                <?php } ?>
                <td style=" "class="text-center"><?php echo $first_average ?></td>
                <td style=" "class="text-center"><?php echo $second_average ?></td>
                <td style=" "class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
                <td style=" "class="text-center <?php echo (($first_average + $second_average) / 2 >= 75) ? 'pass' : 'fail'; ?>"
    <?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: black;"'; } else { echo 'style="color: red;"'; } ?>>
    <?php echo (($first_average + $second_average) / 2 >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

            </tr>
            
            <?php
            // add the subject average to the total average
            $total_average += ($first_average + $second_average) / 2;
        } 
        
        // calculatethe overall average and round it to 2 decimal places
$overall_average = round($total_average / count($subjects), 2);
?>
        <tr  style=" ">
        <td  style=" width:60%;"><strong>GEN. AVE. for the Semester</strong></td>

        <td style="" colspan="3" class="text-center"><?php echo intval($overall_average) ?></td>

        <td style="" class="text-center <?php echo ($overall_average >= 75) ? 'pass' : 'fail'; ?>">
   <?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

      </tr>
  
    <?php 
    }
}else {
  ?>

  <table>

      <tr>
          <td colspan="4">No grades found for this student in Second Semester.....</td>
      </tr>
  </table>

<?php 
}
?>
</tbody>
</table>
<script>
$(function() {
  $("#my-table tbody").sortable({
    cursor: "move",
    opacity: 0.6
  });
});
</script>
</div>

</div>

</div>

<div class="row" style=";">
  <div class="col-md-6">
<div style="display: flex; justify-content: space-between; align-items: center;">
  <div class="text-start">
    TOTAL NO. OF SCHOOL DAYS:
    <input type="text" name="total-school-days" style="width:50px;"><br>
    TOTAL NO. OF DAYS PRESENT:
    <input type="text" name="days-present" style="width:50px;"><br>
    LACK UNITS IN:
    <input type="text" name="lack-units" style="width:50px;"><br>
    PROMOTABLE TO:
    <input type="text" name="promotable-to" style="width:50px;"> <br>
    TOTAL NO. OF YEARS IN SCHOOL TO DATE:
    <input type="text" name="promotable-to" style="width:50px;">
  </div>
  <div style="text-align: center;">
    <?php 
    $sql = "SELECT * FROM students where id ='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "<br><br><br><br><br><strong>" . $row['adviser_id'] . "</strong>";
        echo "<br>". "<i>Adviser</i>";
    }
    ?>
  </div>
</div>

  </div>
  <div class="col-md-6">
  <div style="display: flex; justify-content: space-between; align-items: center;">
  <div class="text-start">
    TOTAL NO. OF SCHOOL DAYS:
    <input type="text" name="total-school-days" style="width:50px;"><br>
    TOTAL NO. OF DAYS PRESENT:
    <input type="text" name="days-present" style="width:50px;"><br>
    LACK UNITS IN:
    <input type="text" name="lack-units" style="width:50px;"><br>
    PROMOTABLE TO:
    <input type="text" name="promotable-to" style="width:50px;"> <br>
    TOTAL NO. OF YEARS IN SCHOOL TO DATE:
    <input type="text" name="promotable-to" style="width:50px;">
  </div>
  <div style="text-align: center;">
    <?php 
    $sql = "SELECT * FROM students where id ='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "<br><br><br><br><br><strong>" . $row['adviser_id'] . "</strong>";
        echo "<br>". "<i>Adviser</i>";
    }
    ?>
  </div>
</div>
</div>

<div class="horizontal-line"></div>
<strong style="font-size:10px;">more entries at the back</strong>



</div>




	</div>
  </div>

</div>



  <!-- Page2 -->


  

	<div class="page2">
	<div class="border">

    

<div class="horizontal-line"></div>
<div class="row" style=";">
  <div class="col-md-6">
    <div class="text-start">
 


    <?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM students WHERE id='$id' AND grade = 12";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "SCHOOL: <strong>" . "MSU-MAIGO SCHOOL OF ARTS AND TRADES"."</strong>";
        echo "<br>";
        echo "SCHOOL YEAR: <strong>" . $row['syear']."</strong>";
        echo "<br>";
        echo "GRADE & SECTION: <strong>" . $row['grade']."-". $row['section']."</strong>";
        echo "<br>";
        echo "TRACK/SECTION: <strong>" . $row['trackstrand']."</strong>";
        echo "<br>";
        echo "Specialization: <strong>" . $row['parent']."</strong>";
        echo "<br>";
        echo "SEMESTER: <strong>"."FIRST</strong>" ;
 
      
    
}
}
?>






    </div>
    <br>
  </div>
  <div class="col-md-6">
    <div class="text-start">
     
    <?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);


    $sql = "SELECT * FROM students WHERE id='$id' AND grade = 12";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "SCHOOL: <strong>" . "MSU-MAIGO SCHOOL OF ARTS AND TRADES"."</strong>";
        echo "<br>";
        echo "SCHOOL YEAR: <strong>" . $row['syear']."</strong>";
        echo "<br>";
        echo "GRADE & SECTION: <strong>" . $row['grade']."-". $row['section']."</strong>";
        echo "<br>";
        echo "TRACK/SECTION: <strong>" . $row['trackstrand']."</strong>";
        echo "<br>";
        echo "Specialization: <strong>" . $row['parent']."</strong>";
        echo "<br>";
        echo "SEMESTER: <strong>"."SECOND</strong>" ;
 
      
 
}
}
?>
    </div>
  </div>
</div>

  <div class="row">
 <div class="col">
 <table class="table border" id="my-table">

    <tbody>
 
    <thead class="text-center align-middle" style="font-weight:bold;">
      <td style=" width:60%;"  class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
      <td class="text-center align-middle" colspan="2" style="width:50px;">QUARTER</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">FINAL<br>RATING</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">ACTION<br>TAKEN</td>
    </tr>
    <tr class="text-center align-middle" style="font-weight:bold;">
      <td class="text-center align-middle" style="width:50px;">1st</td>
      <td class="text-center align-middle" style="width:50px;">2nd</td>
    </thead>
</tr>


   
    <tr>
    <td style=" " class="custom-class" colspan="5"><b>Core Subjects</b></td>
    </tr>
    <tr>
<td style=" " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style="" class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='FIRST' OR semester='first' OR semester=' First') AND year=12";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
    ?>
     
        <?php // display grades per subject and quarter
        $subjects = array();
        mysqli_data_seek($result, 0); // reset the result pointer
        while ($row = mysqli_fetch_assoc($result)) {
            $subjectname = $row['subjectname'];
            $quarter = $row['quarter'];
            $grade = $row['grade'];
            $total_average = 0;

            // add subject to list of subjects if it's not there already
            if (!array_key_exists($subjectname, $subjects)) {
                $subjects[$subjectname] = array();
            }

            // add grade to subject's list of grades
            if (!array_key_exists($quarter, $subjects[$subjectname])) {
                $subjects[$subjectname][$quarter] = array();
            }

            // set the grade to 0 if it is not set or empty
            if (empty($grade)) {
                $grade = 0;
            }

            // set the first or second quarter grade
            if ($quarter == "First") {
                $first = $grade;
                $second = 0;
            } else if ($quarter == "Second") {
                $first = 0;
                $second = $grade;
            }

            array_push($subjects[$subjectname][$quarter], $grade);
        }
        ?>

        <?php // display subject grades and averages
        foreach ($subjects as $subjectname => $quarters) { 
            $first_average = 0;
            $second_average = 0;
            ?>
            
            <tr>
                <td style="" style="width:60%;"><?php echo $subjectname ?></td>
                <?php foreach ($quarters as $quarter => $grades) {
                    $count = count($grades);
                    $sum = array_sum($grades);
                    $average = $sum / $count;
                    if ($quarter == "First") {
                        $first_average = $average;
                    } else if ($quarter == "Second") {
                        $second_average = $average;
                    }
                ?>
                <?php } ?>
                <td style=" "class="text-center"><?php echo $first_average ?></td>
                <td style=" "class="text-center"><?php echo $second_average ?></td>
                <td style="; "class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
                <td style=" "class="text-center <?php echo (($first_average + $second_average) / 2 >= 75) ? 'pass' : 'fail'; ?>"
    <?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: black;"'; } else { echo 'style="color: red;"'; } ?>>
    <?php echo (($first_average + $second_average) / 2 >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

            </tr>
            
            <?php
            // add the subject average to the total average
            $total_average += ($first_average + $second_average) / 2;
        } 
        
        // calculatethe overall average and round it to 2 decimal places
$overall_average = round($total_average / count($subjects), 2);
?>
        <tr  style=" ">
        <td  style=" width:60%;"><strong>GEN. AVE. for the Semester</strong></td>


        <td style="" colspan="3" class="text-center"><?php echo intval($overall_average) ?></td>

        <td style="" class="text-center <?php echo ($overall_average >= 75) ? 'pass' : 'fail'; ?>">
   <?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

      </tr>
  
    <?php 
    }
}else {
  ?>

  <table>

      <tr>
          <td colspan="4">No grades found for this student in Second Semester.....</td>
      </tr>
  </table>

<?php 
}
?>
</tbody>
</table>
<script>
$(function() {
  $("#my-table tbody").sortable({
    cursor: "move",
    opacity: 0.6
  });
});
</script>
</div>
   
<div class="col">
<div class="col">
 <table class="table border" id="my-table">

    <tbody>
 
    <thead class="text-center align-middle" style="font-weight:bold;">
      <td style=" width:60%;"  class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
      <td class="text-center align-middle" colspan="2" style="width:50px;">QUARTER</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">FINAL<br>RATING</td>
      <td class="text-center align-middle" rowspan="2" style="width:100px;">ACTION<br>TAKEN</td>
    </tr>
    <tr class="text-center align-middle" style="font-weight:bold;">
      <td class="text-center align-middle" style="width:50px;">1st</td>
      <td class="text-center align-middle" style="width:50px;">2nd</td>
    </thead>
</tr>


   
    <tr>
    <td style=" " class="custom-class" colspan="5"><b>Core Subjects</b></td>
    </tr>
    <tr>
<td style=" " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style=" " class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
<?php 
if (isset($_GET['id'])) {
    include "db_conn.php";
    $id = validate($_GET['id']);

    $sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='Second' OR semester='second' OR semester=' Second') AND year = 12";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
    ?>
     
        <?php // display grades per subject and quarter
        $subjects = array();
        mysqli_data_seek($result, 0); // reset the result pointer
        while ($row = mysqli_fetch_assoc($result)) {
            $subjectname = $row['subjectname'];
            $quarter = $row['quarter'];
            $grade = $row['grade'];
            $total_average = 0;

            // add subject to list of subjects if it's not there already
            if (!array_key_exists($subjectname, $subjects)) {
                $subjects[$subjectname] = array();
            }

            // add grade to subject's list of grades
            if (!array_key_exists($quarter, $subjects[$subjectname])) {
                $subjects[$subjectname][$quarter] = array();
            }

            // set the grade to 0 if it is not set or empty
            if (empty($grade)) {
                $grade = 0;
            }

            // set the first or second quarter grade
            if ($quarter == "First") {
                $first = $grade;
                $second = 0;
            } else if ($quarter == "Second") {
                $first = 0;
                $second = $grade;
            }

            array_push($subjects[$subjectname][$quarter], $grade);
        }
        ?>

        <?php // display subject grades and averages
        foreach ($subjects as $subjectname => $quarters) { 
            $first_average = 0;
            $second_average = 0;
            ?>
            
            <tr>
                <td style=" " style="width:60%;"><?php echo $subjectname ?></td>
                <?php foreach ($quarters as $quarter => $grades) {
                    $count = count($grades);
                    $sum = array_sum($grades);
                    $average = $sum / $count;
                    if ($quarter == "First") {
                        $first_average = $average;
                    } else if ($quarter == "Second") {
                        $second_average = $average;
                    }
                ?>
                <?php } ?>
                <td style=" "class="text-center"><?php echo $first_average ?></td>
                <td style=" "class="text-center"><?php echo $second_average ?></td>
                <td style=" "class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
                <td style=" "class="text-center <?php echo (($first_average + $second_average) / 2 >= 75) ? 'pass' : 'fail'; ?>"
    <?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: black;"'; } else { echo 'style="color: red;"'; } ?>>
    <?php echo (($first_average + $second_average) / 2 >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

            </tr>
            
            <?php
            // add the subject average to the total average
            $total_average += ($first_average + $second_average) / 2;
        } 
        
        // calculatethe overall average and round it to 2 decimal places
$overall_average = round($total_average / count($subjects), 2);
?>
        <tr  style=" ">
        <td  style=" width:60%;"><strong>GEN. AVE. for the Semester</strong></td>

        <td style="" colspan="3" class="text-center"><?php echo intval($overall_average) ?></td>

        <td style="" class="text-center <?php echo ($overall_average >= 75) ? 'pass' : 'fail'; ?>">
   <?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?>
</td>

      </tr>
  
    <?php 
    }
}else {
  ?>

  <table>

      <tr>
          <td colspan="4">No grades found for this student in Second Semester.....</td>
      </tr>
  </table>

<?php 
}
?>
</tbody>
</table>
<script>
$(function() {
  $("#my-table tbody").sortable({
    cursor: "move",
    opacity: 0.6
  });
});
</script>
</div>

</div>

</div>
<div class="row" style=";">
  <div class="col-md-6">
<div style="display: flex; justify-content: space-between; align-items: center;">
  <div class="text-start">
    TOTAL NO. OF SCHOOL DAYS:
    <input type="text" name="total-school-days" style="width:50px;"><br>
    TOTAL NO. OF DAYS PRESENT:
    <input type="text" name="days-present" style="width:50px;"><br>
    LACK UNITS IN:
    <input type="text" name="lack-units" style="width:50px;"><br>
    PROMOTABLE TO:
    <input type="text" name="promotable-to" style="width:50px;"> <br>
    TOTAL NO. OF YEARS IN SCHOOL TO DATE:
    <input type="text" name="promotable-to" style="width:50px;">
  </div>
  <div style="text-align: center;">
    <?php 
    $sql = "SELECT * FROM students where id ='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "<br><br><br><br><br><strong>" . $row['adviser_id'] . "</strong>";
        echo "<br>". "<i>Adviser</i>";
    }
    ?>
  </div>
</div>

  </div>
  <div class="col-md-6">
  <div style="display: flex; justify-content: space-between; align-items: center;">
  <div class="text-start">
    TOTAL NO. OF SCHOOL DAYS:
    <input type="text" name="total-school-days" style="width:50px;"><br>
    TOTAL NO. OF DAYS PRESENT:
    <input type="text" name="days-present" style="width:50px;"><br>
    LACK UNITS IN:
    <input type="text" name="lack-units" style="width:50px;"><br>
    PROMOTABLE TO:
    <input type="text" name="promotable-to" style="width:50px;"> <br>
    TOTAL NO. OF YEARS IN SCHOOL TO DATE:
    <input type="text" name="promotable-to" style="width:50px;">
  </div>
  <div style="text-align: center;">
    <?php 
    $sql = "SELECT * FROM students where id ='$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // display student information
        $row = mysqli_fetch_assoc($result);
        echo "<br><br><br><br><br><strong>" . $row['adviser_id'] . "</strong>";
        echo "<br>". "<i>Adviser</i>";
    }
    ?>
  </div>
</div>
</div>

<div class="horizontal-line"></div>
<br>
<br>

<div class="container">
<style>
    .indent {
        text-indent: 50px;
    }
</style>

<p class="indent" style="font-size:13px;">
    I certify this is a true of Mr/Ms<u class="underline1">          </u>this<u class="underline2"></u>day of<u class="underline3"></u>
    <br>This Student is cleared from monetary accountabilities in this school, and is eligible for admission to<u class="underline4"></u><br>as regular / irregular student.
</p>

</div>

<div class="row" style="font-size:13px;">
  <div class="col-md-6">
    <div class="text-center">
      <br>
   
<i>Admin. Aide</i>

<br>
<br>
<br>
<br>
NOT VALID WITHOUT SEAL


    </div>
  </div>
  <div class="col-md-6">
    <div class="text-center">
    <?php 


$sql = "SELECT * FROM cr ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // display student information
    $row = mysqli_fetch_assoc($result);
    echo"<div class''>";
    echo "<strong>" . $row['crname'] . "</strong>";
    echo "<br>". "<i>Campus Registrar</i>";
}


?>

    </div>
  </div>
</div>




</div>




	</div>
  </div>

</div>


	<script>
		window.onscroll = function() {myFunction()};

		var header = document.getElementById("myHeader");
		var sticky = header.offsetTop;

		function myFunction() {
			if (window.pageYOffset > sticky) {
header.classList.add("sticky");
} else {
header.classList.remove("sticky");
}
}
</script>

</body>
</html> 
