<?php 

   session_start();
   include "db_conn.php";
   include "subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>1st Grading</title>
  
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


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
    margin-bottom: 1cm;
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
  margin-top: 1cm;
  margin-bottom: 1cm;
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


.container form {
	width: 800px;
	padding: 20px;


}
.box {
	width: 750px;
}

.container table {
	padding: 5px;
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
</style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center position-relative">
    <img src="msu.png" class=" p top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
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
<div class="container " >
<div style="text-align: center;">
<form class="row text-center g-3 print-hidden" method="POST" action="" style=""> 
  <div class="col-auto">
  </div>
  <div class="col-auto" style="font-weight: bold;" >
    <select class="form-select" name="section" id="section">
      <option value="">PRINT GRADES FROM SECTION</option>
      <?php
      require "./php/db_conn.php";
      // Retrieve the section names from the "section" table
      $sql = "SELECT name FROM section";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
              echo '<option value="' . $row["name"] . '">' . $row["name"] . '</option>';
          }
      }
      $conn->close();
      ?>
    </select>
  </div>
  <div class="col-auto">
  <button type="submit" class="btn btn-primary mb-3" style="background-color: transparent; border: none; outline: none; box-shadow: none;">
    <img src="img/show.gif" alt="Print" class="img-fluid" style="width: 30px;">
  </button>
</div>
</form>
    </div>
		<div class="box">
    <div class="content">
<script>
  const searchInput = document.getElementById('search');
  const tableRows = document.querySelectorAll('table tbody tr');
  searchInput.addEventListener('input', () => {
    const searchText = searchInput.value.toLowerCase();
    tableRows.forEach(row => {
      const name = row.querySelector('.name').textContent.toLowerCase();
      const subject = row.querySelector('.subject').textContent.toLowerCase();
      const grade = row.querySelector('.grade').textContent.toLowerCase();
      const teacher = row.querySelector('.teacher').textContent.toLowerCase();
      const section = row.querySelector('.section').textContent.toLowerCase();
      if (name.includes(searchText) || subject.includes(searchText) || grade.includes(searchText) || teacher.includes(searchText) || section.includes(searchText)) {
        row.style.display = '';
      } else {
        row.style.display = 'none';
      }
    });
  });
</script>
            <table class="table table-bordered small table-sm" >
<?php
require "./php/db_conn.php";
$teacher = $_SESSION['name'];
$filter = isset($_POST['section']) ? "AND b.section = '{$_POST['section']}'" : "";
$query = "SELECT DISTINCT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
a.name, a.sub5, a.sec1, a.sgh1, b.gender, b.quarter,b.ts,b.year,b.semester,
b.firstname, b.middlename, b.lastname, b.remarks
FROM grade b
INNER JOIN users a ON REPLACE(LOWER(a.sub5), ' ', '') = REPLACE(LOWER(b.subjectname), ' ', '') AND (REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec1), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec2), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec3), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec4), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec5), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec6), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec7), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec8), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec9), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec10), ' ', ''))
WHERE 
REPLACE(LOWER(b.quarter), ' ', '') = REPLACE(LOWER('FIRST'), ' ', '')

AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$teacher'), ' ', '')

AND b.quarter = 'FIRST'
AND a.name = '$teacher'
$filter
ORDER BY REPLACE(LOWER(b.studentname), ' ', '') ASC;
"; 
$result = mysqli_query($conn, $query);
if ($Row = mysqli_fetch_assoc($result)) {
  $output_left = "<div id='left'>";
  $output_left .= "<p>";
  $output_left .= "Track & Strands:&nbsp;:&nbsp;<b>". $Row['ts']."</b> <br>" ; 
  $output_left .= "Year & Section:&nbsp; &nbsp;&nbsp;<strong>" . $Row['section'] ."&nbsp;". $Row['year'] . "</strong><br>";
  $output_left .= "Adviser:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
  <strong>" . $Row['adviser'] . "</strong><br>";
  $output_left .= "</p>";
  $output_left .= "</div>";
  $output_right = "<div id='right'>";
  $output_right .= "<p>";
  $output_right .= "Subject:&nbsp;<b>" .$Row['sub5'] ."</b><br>";
  $output_right .= "Quarter:&nbsp;<strong>" . $Row['quarter'] . "</strong><br>";
  $output_right .= "Semester:&nbsp;<strong>" . $Row['semester'] . "</strong><br>";
  $output_right .= "</p>";
  $output_right .= "</div>";
  echo $output_left;
  echo $output_right;
} else {
  echo "<strong><h1>No Grades</h1></strong>
    ";
}
mysqli_close($conn);
?>
<thead>
<tr style="text-align:center;" >
  <th class="text-center" style="width:50px; vertical-align: middle;">NO</th>
  <th class="text-center" style="width:200px; vertical-align: middle;">LASTNAME</th>
  <th class="text-center" style="width:200px; vertical-align: middle;">FIRSTNAME</th>
  <th class="text-center" style="width:50px; vertical-align: middle;">M.I</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">FIRST<br>QUARTER</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">REMARKS</th>
</tr>
</thed>  
<thead>
<th colspan="6" class="text text-left"><b><div class="text text-primary"><b>MALE</b></div></b></th>
</thead>
<?php
require "./php/db_conn.php";
$teacher = $_SESSION['name'];
$rowNum = 0;
$filter = isset($_POST['section']) ? "AND REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER('{$_POST['section']}'), ' ', '')" : "";
$query = "SELECT DISTINCT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
a.name, a.sub5, a.sec1, a.sgh1, b.gender, b.quarter,
b.firstname, b.middlename, b.lastname, b.remarks
FROM grade b
INNER JOIN users a ON REPLACE(LOWER(a.sub5), ' ', '') = REPLACE(LOWER(b.subjectname), ' ', '') AND (REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec1), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec2), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec3), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec4), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec5), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec6), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec7), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec8), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec9), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec10), ' ', ''))
WHERE 
 REPLACE(LOWER(b.quarter), ' ', '') = REPLACE(LOWER('FIRST'), ' ', '')
AND REPLACE(LOWER(b.gender), ' ', '') = REPLACE(LOWER('MALE'), ' ', '')
AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$teacher'), ' ', '')

AND b.quarter = 'FIRST'
AND a.name = '$teacher'
$filter
ORDER BY REPLACE(LOWER(b.studentname), ' ', '') ASC;
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
$teacher = $_SESSION['name'];
$rowNum = 0;
$filter = isset($_POST['section']) ? "AND REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER('{$_POST['section']}'), ' ', '')" : "";

$query = "SELECT DISTINCT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
a.name, a.sub5, a.sec1, a.sgh1, b.gender, b.quarter,
b.firstname, b.middlename, b.lastname, b.remarks
FROM grade b
INNER JOIN users a ON REPLACE(LOWER(a.sub5), ' ', '') = REPLACE(LOWER(b.subjectname), ' ', '') AND (REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec1), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec2), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec3), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec4), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec5), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec6), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec7), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec8), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec9), ' ', '') OR REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER(a.sec10), ' ', ''))
WHERE
REPLACE(LOWER(b.quarter), ' ', '') = REPLACE(LOWER('FIRST'), ' ', '')
AND REPLACE(LOWER(b.gender), ' ', '') = REPLACE(LOWER('FEMALE'), ' ', '') 
AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$teacher'), ' ', '')

AND b.quarter = 'FIRST'
AND a.name = '$teacher'
$filter
ORDER BY REPLACE(LOWER(b.studentname), ' ', '') ASC;
";

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
  <?php
require "./php/db_conn.php";
$teacher = $_SESSION['name'];
$rowNum = 0; 
$filter = isset($_POST['section']) ? "AND b.section = '{$_POST['section']}'" : "";
$query = "SELECT DISTINCT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
a.name, a.sub5, a.sec1, a.sgh1, b.gender, b.quarter,
b.firstname, b.middlename, b.lastname, b.remarks
FROM grade b
INNER JOIN users a ON a.sub5 = b.subjectname AND (b.section = a.sec1 OR b.section = a.sec2 OR b.section = a.sec3 OR b.section = a.sec4 OR b.section = a.sec5 OR b.section = a.sec6 OR b.section = a.sec7 OR b.section = a.sec8 OR b.section = a.sec9 OR b.section = a.sec10)
WHERE b.semester = 'FIRST' AND b.quarter = 'FIRST' AND a.name = '$teacher'
$filter
ORDER BY b.studentname ASC;
";

$result = mysqli_query($conn, $query);
while ($Row = mysqli_fetch_assoc($result)) {
  $rowNum++;
?>
<?php } ?>
      <table style="font-size: 16px; width:720px;">
  <thead>
    <tr>
</tr>
  </thead>
  <tbody>
    <?php
      require "./php/db_conn.php";
      $query = "SELECT pname, crname, name
                FROM settings, cr, users
                WHERE users.name = '" . $_SESSION['name'] . "'LIMIT 1";
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          
          $pname = $row['pname'];
          $uppercasePname = strtoupper($pname);
          echo "<tr>";
          echo "<td style='border: none;'>";
          echo "
          Prepared by
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          Checked by
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          
          <b><u>". strtoupper($row['name']). 
          "</b></u>&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          <u><b>"
          . date("Y-m-d") . 
          "</u></b>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          <u>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          </u>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;
          <u>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </u>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;
          &nbsp;
          <i>Subject Teacher</i>
          &nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i>Date</i>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          <i>Subject Group Head</i>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;
          <i>Date</i>
          <br>
          <br>
          Noted by
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          Approved by
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br>
          <b>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          <u>"
          
          . $uppercasePname."</b></u>
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;
          <u>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
          </u>
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;
          <u>
          <b>
          "
          . $row['crname'] .
          
          "</b></u>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;
          <u>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </u>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;
          <i>Principal</i>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp;&nbsp;
          <i>Date</i>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp; 
          <i>Campus Registrar</i>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp;&nbsp;
          &nbsp;&nbsp; &nbsp; 
          <i>Date</i>
          </td>";
   
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='4'>There are no grades available for printing.</td></tr>";
      }
      mysqli_close($conn);
    ?>
  </tbody>
</table>
  
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>
  </body>
</html>
