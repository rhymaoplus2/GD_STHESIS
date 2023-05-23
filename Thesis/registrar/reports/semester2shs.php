<?php 

   session_start();
   include "db_conn.php";
   include "subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Semestral Grades</title>
  
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>


    <script src="path/jquery-3.6.4.min.js"></script>
<script src="path/bootstrap.js"></script>


  <style>
   @media print{

    @page{
      margin-top: 1cm;
      margin-bottom: 1cm;
    }
    .img-fluid{
      display: none;
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

.container table {
	padding: 5px;

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
 
<div class="text-start">
        
            <?php
require "./php/db_conn.php";

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $section = validate($_GET['section']);
    $sy = validate($_GET['sy']);
    $semester = validate($_GET['semester']);
    $subjectname = validate($_GET['subjectname']);
    $teacher = validate($_GET['teacher']);

    $year = validate($_GET['year']);
    $query = "SELECT DISTINCT * 
FROM grade
WHERE semester = '$semester'
AND teacher = '$teacher'
;";

    $result = mysqli_query($conn, $query);

    if ($Row = mysqli_fetch_assoc($result)) {
        $output_left = "<div id='left'>";
        $output_left .= "<p>";
        $output_left .= "Track & Strands: <b>". $Row['ts']."</b><br>";
        $output_left .= "Year & Section: <strong>" . $Row['section'] ." ". $Row['year'] . "</strong><br>";
        $output_left .= "Adviser: <strong>" . $Row['adviser'] . "</strong><br>";
        $output_left .= "</p>";
        $output_left .= "</div>";

        $output_right = "<div id='right'>";
        $output_right .= "<p>";
        $output_right .= "Subject: <b>" .$Row['subjectname'] ."</b><br>";
        $output_right .= "Quarter: <strong>THIRD & FOURTH</strong><br>";
        $output_right .= "Semester: <strong>" . $Row['semester'] . "</strong><br>";
        $output_right .= "</p>";
        $output_right .= "</div>";

        echo $output_left;
        echo $output_right;
    } else {
        echo "<strong><h1>No Grades</h1></strong>";
    }

    mysqli_close($conn);
    ?>
</div>
<table class="text-start table table-bordered small table-sm" >
<thead>
<tr style="text-align:center;">
  <th class="text-center" style="width:50px; vertical-align: middle;">NO</th>
  <th class="text-center" style="width:200px; vertical-align: middle;">LASTNAME</th>
  <th class="text-center" style="width:200px; vertical-align: middle;">FIRSTNAME</th>
  <th class="text-center" style="width:50px; vertical-align: middle;">M.I</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">1ST</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">2ND</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">FINAL</th>
  <th class="text-center" style="width:90px; vertical-align: middle;">REMARKS</th>
</tr>
</thead>  

<thead>
<th colspan="8" class="text text-left"><b><div class="text text-primary"><b>MALE</b></div></b></th>
</thead>
<?php
require "./php/db_conn.php";

$query = "SELECT firstname, lastname, middlename, 
          AVG(CASE WHEN quarter = 'THIRD' THEN grade END) AS THIRD_average,
          AVG(CASE WHEN quarter = 'FOURTH' THEN grade END) AS FOURTH_average
          FROM grade
          WHERE semester = '$semester'
          AND section = '$section'
          AND subjectname = '$subjectname'
          AND teacher = '$teacher'
          AND sy = '$sy'
          AND year = '$year'
          AND (quarter = 'THIRD' OR quarter = 'FOURTH')
          AND gender = 'Male'
          GROUP BY firstname, lastname, middlename
          ORDER BY lastname";


    $result = mysqli_query($conn, $query);
    $rowNum = 0; // initialize rowNum

    while ($row = mysqli_fetch_assoc($result)) {
        $rowNum++; // increment rowNum
        $finalAverage = ($row["THIRD_average"] + $row["FOURTH_average"]) / 2; // Calculate the average

        ?>
    <tr>
        <td class="text text-center"><?php echo $rowNum; ?></td>
        <td class="text"><?php echo $row["lastname"]; ?></td>
        <td class="text"><?php echo $row["firstname"]; ?></td>
        <td class="text text-center"><?php echo substr($row["middlename"], 0, 1); ?>.</td>
        <td class="text text-center"><?php echo round($row["THIRD_average"]) ?: "-"; ?></td>
<td class="text text-center"><?php echo round($row["FOURTH_average"]) ?: "-"; ?></td>

        <td class="text text-center"><?php echo $finalAverage; ?></td>
        <td class="text text-center" style="color: <?php echo $finalAverage < 75 ? 'red' : 'black'; ?>;">
            <?php echo strtoupper($finalAverage < 75 ? 'FAILED' : 'PASSED'); ?>
        </td>
    </tr>
<?php
    }



?>

<thead>
<th colspan="8" class="text text-left"><b><div class="text text-danger"><b>FEMALE</b></div></b></th>
</thead>
<?php
require "./php/db_conn.php";

$query = "SELECT firstname, lastname, middlename, 
AVG(CASE WHEN quarter = 'THIRD' THEN grade END) AS THIRD_average,
AVG(CASE WHEN quarter = 'FOURTH' THEN grade END) AS FOURTH_average
FROM grade
WHERE semester = '$semester'
AND section = '$section'
AND subjectname = '$subjectname'
AND teacher = '$teacher'
AND sy = '$sy'
AND year = '$year'
AND (quarter = 'THIRD' OR quarter = 'FOURTH')
AND gender = 'Female'
GROUP BY firstname, lastname, middlename
ORDER BY lastname";


    $result = mysqli_query($conn, $query);
    $rowNum = 0; // initialize rowNum

    while ($row = mysqli_fetch_assoc($result)) {
        $rowNum++; // increment rowNum
        $finalAverage = ($row["THIRD_average"] + $row["FOURTH_average"]) / 2; // Calculate the average

        ?>
    <tr>
        <td class="text text-center"><?php echo $rowNum; ?></td>
        <td class="text"><?php echo $row["lastname"]; ?></td>
        <td class="text"><?php echo $row["firstname"]; ?></td>
        <td class="text text-center"><?php echo substr($row["middlename"], 0, 1); ?>.</td>
        <td class="text text-center"><?php echo round($row["THIRD_average"]) ?: "-"; ?></td>
<td class="text text-center"><?php echo round($row["FOURTH_average"]) ?: "-"; ?></td>

        <td class="text text-center"><?php echo $finalAverage; ?></td>
        <td class="text text-center" style="color: <?php echo $finalAverage < 75 ? 'red' : 'black'; ?>;">
            <?php echo strtoupper($finalAverage < 75 ? 'FAILED' : 'PASSED'); ?>
        </td>
    </tr>
<?php
    }


}// Add the string 'last-page'
?>
</table>
</div>
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
               LIMIT 1";
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
          &nbsp;&nbsp;&nbsp;&nbsp;      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </u>
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
