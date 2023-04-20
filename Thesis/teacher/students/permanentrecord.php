
<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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
  }
  
  .btn-icon img {
  width: 1.5rem;
  height: 1.5rem;
}

@page {
    margin-top: 50px;
  }
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

  /* Hide the file name and other description */
  .print-header,
  .print-footer {
    display: none;
  }
h1{
  display: none;
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
  .container-fluid.p-0 {
  display: none;
}
.tooltip {
  display: none !important;
}

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

}
@media print {
  /* Set the page size to A4 */
  @page {
    size: A4;
    margin: 0;
  }
  .btn-icon img {
  width: 1.5rem;
  height: 1.5rem;
}

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

  /* Hide the file name and other description */
  .print-header,
  .print-footer {
    display: none;
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
  .container-fluid.p-0 {
  display: none;
}
.tooltip {
  display: none !important;
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
	justify-content: ;
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
	padding: 15px;
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
  .text{

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
#left {
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

  </style>

</head>
<body>


	<div class="container">
  <div class="box">
  <div class="content">
    
  <div class="row">
 <div class="col">
 <table class="table border" id="my-table">

    <tbody>
 
    <thead class="text-center align-middle" style="font-weight:bold;">
      <td class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
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
    <td style="font-size:7px; " class="custom-class" colspan="5"><b>Core Subjects</b></td>
    </tr>
    <tr>
<td style="font-size:7px; " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style="font-size:7px; " class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
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

    $sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='FIRST' OR semester='first' OR semester=' First')";

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
                <td style="font-size:7px; " style="width:60%;"><?php echo $subjectname ?></td>
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
                <td style="font-size:7px; "class="text-center"><?php echo $first_average ?></td>
                <td style="font-size:7px; "class="text-center"><?php echo $second_average ?></td>
                <td style="font-size:7px; "class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
                <td style="font-size:7px; "class="text-center"<?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: green;"'; } else { echo 'style="color: red;"'; } ?>>
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
        <tr  style="font-size:7px; ">
        <td  style="font-size:7px; "><strong>GEN. AVE. for the Semester</strong></td>


        <td colspan="3"class="text-center"><?php echo $overall_average ?></td>
        <td class="text-center"><?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?></td>
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
<table class="table border" id="my-table">

<tbody>

<thead class="text-center align-middle" style="font-weight:bold;">
  <td class="text-center align-middle" rowspan="2" style="width:100px;">Subjects</td>
  <td class="text-center align-middle" colspan="2" style="width:50px;">QUARTER</td>
  <td class="text-center align-middle" rowspan="2" style="width:100px;">FINAL<br>RATING</td>
  <td class="text-center align-middle" rowspan="2" style="width:100px;">ACTION<br>TAKEN</td>
</tr>
<tr class="text-center align-middle" style="font-weight:bold;">
  <td class="text-center align-middle" style="width:50px;">1st</td>
  <td class="text-center align-middle" style="width:50px;">2nd</td>
</thead>
</tr>



<tr >
<td style="font-size:7px; " class="custom-class" colspan="5"><b>Core Subjects</b></td>
</tr>
<tr>
<td style="font-size:7px; " class="custom-class" colspan="5"><b>Contextualized Subjects</b></td>
</tr>
<tr>
<td style="font-size:7px; " class="custom-class" colspan="5"><b>Specialized Subjects</b></td>
</tr>
<?php 
if (isset($_GET['id'])) {
include "db_conn.php";



$id = validate($_GET['id']);

$sql = "SELECT * FROM grade WHERE studentid='$id' AND (semester='SECOND' OR semester='second' OR semester=' Second')";

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
            <td><?php echo $subjectname ?></td>
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
            <td class="text-center"><?php echo $first_average ?></td>
            <td class="text-center"><?php echo $second_average ?></td>
            <td class="text-center"><?php echo ($first_average + $second_average) / 2 ?></td>
            <td class="text-center"<?php if (($first_average + $second_average) / 2 >= 75) { echo 'style="color: green;"'; } else { echo 'style="color: red;"'; } ?>>
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
      <tr  style="font-size:7px; ">
        <td  style="font-size:7px; "><strong>GEN. AVE. for the Semester</strong></td>

        <td colspan="3"class="text-center"><?php echo $overall_average ?></td>
        <td class="text-center"><?php echo ($overall_average >= 75) ? 'PASS' : 'FAIL'; ?></td>
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

	</div>
  </div>

</div>

	<br>
	<br>

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
