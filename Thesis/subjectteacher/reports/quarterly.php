<?php 

   session_start();
   include "db_conn.php";
   include "subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>GRADE SHEET</title>
  
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <style>
    
@media print {

  .btn-icon img {
  width: 1.5rem;
  height: 1.5rem;
}

@page {
    margin-top: 50px;
    margin-bottom: 1cm!important;
    margin-left:1cm;
    margin-right:1cm;
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
  
  }
  .btn-icon img {
  width: 1.5rem;
  height: 1.5rem;
}
#my-element  {
 display: none;
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
  margin-top:0;

}
hr {
  border: none;
  border: 1px solid;
  width: 120%;
  background-color: black;
}



table {
 border: 1px;
  margin-top: 0;
  font-size: 11px;
font-family: calibri;
  border: 10px;
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
.flex-col {
  flex: 1;
  display: flex;
  flex-direction: column;
}

</style>
</head>
<body onload="displayDate()">
    <div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/xxx.png" class=" p top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
</div>
<div id="my-element" class="position-fixed bottom-0 w-100 text-center" style="z-index: 9999;">
  <button class="fixed-button" onclick="animateElement()">
    <img src="img/iprint.png" alt="Print" class="img-fluid" style="width: 50px;">
  </button>
</div>


<script>
function animateElement() {
  var element = document.getElementById('my-element');
  
  element.classList.add('zoom-rotate-fade');
  
  setTimeout(function() {
    window.print();
  }, 3000);
}
</script>


</script>

            <table class="table small table-sm" >
            <?php
function validate($data) {
    return htmlspecialchars(trim($data));
}

$section = validate($_GET['section']);
$sy = validate($_GET['sy']);
$quarter = validate($_GET['quarter']);
$year = validate($_GET['year']);
$teacher = validate($_GET['teacher']);
$subjectname = validate($_GET['subjectname']);

require "./php/db_conn.php";

$query = "SELECT DISTINCT * FROM grade 
          WHERE subjectname ='$subjectname' 
          AND year ='$year'
          AND quarter ='$quarter'
          AND sy ='$sy'
          AND section ='$section'
          AND teacher ='$teacher'";


$result = mysqli_query($conn, $query);
if ($row = mysqli_fetch_assoc($result)) {
    $output_left = "<div id='left'>";
    $output_left .= "<p>";
    if ($row['ts'] !== '') {
      $output_left .= "Track & Strands: <b>". $row['ts']."</b> <br>";
  }
  else{
    $output_left .= "<br>";
  }
  
    $output_left .= "Year & Section: <strong>" . $row['year'] ." - ". $row['section'] . "</strong><br>";
    $output_left .= "Adviser: <strong>" . $row['teacher'] . "</strong><br>";
    $output_left .= "</p>";
    $output_left .= "</div>";
    
    $output_right = "<div id='right'>";
    $output_right .= "<p>";
    $output_right .= "Subject: <b>" .$row['subjectname'] ."</b><br>";
    $output_right .= "Quarter: <strong>" . $row['quarter'] . "</strong><br>";
    $output_right .= "Semester: <strong>" . $row['semester'] . "</strong><br>";
    $output_right .= "</p>";
    $output_right .= "</div>";
    
    echo $output_left;
    echo $output_right;
} else {
    echo "<strong><h1>No Grades</h1></strong>";
}

mysqli_close($conn);
?>


<tr style="text-align:center;" >
  <td class="text-center" style="width:50px; vertical-align: middle;">NO</td>
  <td class="text-center" style="width:200px; vertical-align: middle;">LASTNAME</td>
  <td class="text-center" style="width:200px; vertical-align: middle;">FIRSTNAME</td>
  <td class="text-center" style="width:50px; vertical-align: middle;">M.I</td>
  <td class="text-center" style="width:90px; vertical-align: middle;">FIRST<br>QUARTER</td>
  <td class="text-center" style="width:90px; vertical-align: middle;">REMARKS</td>
</tr>

<thead>
<th colspan="6" class="text text-left"><b><div class="text text-primary"><b>MALE</b></div></b></th>
</thead>
<?php
require "./php/db_conn.php";

$rowNum = 0;


$query = "SELECT DISTINCT * FROM grade WHERE subjectname ='$subjectname' 
AND year ='$year'
AND quarter ='$quarter'
AND sy ='$sy'
AND section   ='$section'
AND teacher ='$teacher'
AND gender ='Male'
";
$result = mysqli_query($conn, $query);
while ($Row = mysqli_fetch_assoc($result)) {
  $rowNum++; // increment rowNum
?>
  
  <tr>
    <td class="text text-center"><?php echo  $rowNum ?></td>
    <td class="text"><?php echo $Row["lastname"]; ?></td>
    <td class="text"><?php echo $Row["firstname"]; ?></td>
    <td class="text text-center"><?php echo substr($Row["middlename"], 0, 1); ?>.</td>
    <td class="text text-center"><?php echo $Row["grade"]; ?></td>
    <td class="text text-center" <?php if ($Row["remarks"] == "FAILED") { ?> style="color: red;" <?php } ?>>
      <b><?php echo $Row["remarks"]; ?></b>
    </td>
  </tr>

<?php } ?>

</tbody>
</div> 
                <thead >
      <th colspan="6"class="text text-left" ><b><div class="text text-danger"><b>FEMALE</b></div></b></th>
              </thead>
              <?php

$rowNum = 0;


$query = "SELECT DISTINCT * FROM grade 
          WHERE subjectname ='$subjectname' 
          AND year ='$year'
          AND quarter ='$quarter'
          AND sy ='$sy'
          AND gender ='Female'
          AND section ='$section'
          AND teacher ='$teacher'";
  $result = mysqli_query($conn, $query);
}
while ($Row = mysqli_fetch_assoc($result)) {
  $rowNum++; 
?>

           <tr>
           <td class="text text-center" ><?php echo  $rowNum ?></td>
          <td class="text "><?php echo $Row["lastname"]; ?></td>
          <td class="text " ><?php echo $Row["firstname"]; ?></td>
          <td class="text text-center "><?php echo substr($Row["middlename"], 0, 1); ?>.</td>
         
          <td class="text text-center" ><?php echo $Row["grade"]; ?></td>
  
          <td class="text text-center" <?php if ($Row["remarks"] == "FAILED") { ?> style="color: red;" <?php } ?>>
  <b><?php echo $Row["remarks"]; ?></b>
 
</td>
     </tr>
            <?php }
 ?>
         </tbody>
      </table>

      <script>
  // JavaScript code to display the current date without the day
  function displayDate() {
    var currentDate = new Date();
    var options = { year: 'numeric', month: 'long', day: 'numeric' };
    var dateString = currentDate.toLocaleDateString(undefined, options);
    var dateElement = document.getElementById("date");
    dateElement.innerHTML = dateString;
  }
</script>

  <?php
require "./php/db_conn.php";
$query = "SELECT pname, crname, name FROM settings, cr, users LIMIT 1";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $pname = $row['pname'];
    $crname = $row['crname'];
    $show = $_SESSION['name'];

    $uppercaseshow = strtoupper($show);
    $uppercasePname = strtoupper($pname);
    $uppercasecrname = strtoupper($crname);

    echo "<div class='row'>
            <div class='col flex-grow-large' '>
              Prepared by<br>
              <div class='text-center' style='width:px;'>
                <b><u>". $uppercaseshow."</u></b><br>
                Subject Teacher
              </div>
            </div>
            <div class='col flex-grow'>
              <br>
              <div class='text-center'>
                <b> <u> <span id='date'></span> </u></b><br>
                Date
              </div>
            </div>
            <div class='col flex-grow'>
              Checked by<br>
              <div class='text-center'> 
                <b><u>                                                                        </u></b><br>
              </div> 
              <div class='text-center'> 
                Subject Teacher
              </div>
            </div>
            <div class='col flex-grow'>
              <br>
              <div class='text-center'> 
                <b><u>                                                                        </u></b><br>
              </div>
              <div class='text-center'>
             
                Date
              </div>
            </div>
          </div>
          <div class='row'>
            <div class='col flex-grow'>
              Noted by<br>
              <div class='text-center'>
                <b><u>". $uppercasePname."</u></b><br>
                Principal
              </div>
            </div>
            <div class='col flex-grow'>
              <br>
              <div class='text-center'> 
                <b><u>                                                                        </u></b><br>
              </div>
              <div class='text-center'>
                Date
              </div>
            </div>
            <div class='col flex-grow'>
              Approved by<br>
              <div class='text-center'>
                <b><u>". $uppercasecrname ."</u></b><br>
                Campus Registrar
              </div>
            </div>
            <div class='col flex-grow'>
              <br>
              <div class='text-center'> 
                <b><u>                                                                        </u></b><br>
              </div>
              <div class='text-center'>
                Date
              </div>
            </div>
          </div>";
  }
} else {
  echo "<div class='row'>
          <div class='col'>
            There are no grades available for printing.
          </div>
        </div>";
}

mysqli_close($conn);
?>


 
    </div>
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>
  </body>
</html>
