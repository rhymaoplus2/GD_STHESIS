<?php 

   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Masterlist</title>
  
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



 
<style>
  


  .container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;

}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;

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
  
  
  .button{
  
      margin-left: 5rem;
      margin-top: 11rem;
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
  .text1
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }
  
  .text2
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }



  table {
  width: 100%;
  border-collapse: collapse;
}

td, th {
  padding: 8px;
  text-align: left;
  font-size: 14px;
}

@media screen and (min-width: 600px) {
  td, th {
    font-size: 12px;
    padding: 12px;

  }
}

.top-container {
    background-color: #f1f1f1;
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
  #myVideo {

width: 100vw;
height: 100vh;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
  }
.carousel-inner img {
  margin: auto;
}
.poster img
{
  margin: auto;
}
table {
    border-collapse: collapse;
  }
  td, th {
    border: 1px solid black;
    padding: 5px;
  }


  #no-border {
  border: none;
  visibility: hidden;
  border-bottom: none !important;
}
/* Define the styles for the page */
@media print {
   /* Existing CSS table styles */

   table {
      width: 100%;
      border-collapse: collapse;
   }
@page{
  margin: 0;
  margin-left: 1cm;
  margin-right: 1cm;
  margin-top: 1cm;
  margin-bottom: 2cm;
}
   td,
   th {
      border: 1px solid black;
      padding: 8px;
      word-break: break-all;
   }
   .img-fluid{

    display: none;
   }
}

.footer input {
    font-size: 12px;
  }
  .d-flex {
  display: flex;
  align-items: flex-end;
}

.d-flex input::placeholder {
  font-weight: bold;
}

.footer
{
    font-size: 12px;
    border-left: none;
 
  }
  .table-borderless input {
width:200px;

}
.table-borderless {
  border-collapse: collapse;
  
}

.table-borderless td, .table-borderless th {
  border: none;
  font-size: 12px;
  padding: 0px; /* adjust the padding value as desired */
  margin: 0; /* set margin to 0 to remove any extra space between cells */
  white-space: nowrap;
}
label {
    display: block;
    font-size: 12px;
    margin-top: 0;
  }
  .form-control {
font-size: 12px;

  padding: 0;
  margin: 0;
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
@keyframes blink {
    0% {
      opacity: 1;
    }
    50% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }

  #my-element {
    animation: blink 3s infinite;
  }

  .column-wrapper {
    display: flex;
    flex-wrap: wrap;
}

.column {
    width: 50%;
    box-sizing: border-box;
    padding: 1px;
}
</style>
</head>
<body>



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





      


 


<div class="page1">    
     
<div style="margin-bottom:1.5cm;  "class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/XXX.png" class="  top-0 w-10 h-auto" style="max-width: 100%;" alt="Example Image">
</div>
<?php
require "./php/db_conn.php";
$name = $_SESSION["name"];

$teacher = mysqli_real_escape_string($conn, $_SESSION['name']);
$filter = isset($_POST['section']) ? " AND REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER('" . mysqli_real_escape_string($conn, $_POST['section']) . "'), ' ', '')" : "";
$query = "SELECT * FROM students WHERE syear = (SELECT schoolyear FROM users LIMIT 1) AND adviser_id = '$teacher' ORDER BY lastname";

$result = mysqli_query($conn, $query);
if ($Row = mysqli_fetch_assoc($result)) {
    $output_left = "<div id=''>";
    $output_left .= "<p>";
    $output_left .= '<div class="row">';
    $output_left .= '<div class="col">';
    $output_left .= 'Year Level: <b>' . $Row['grade'] . '</b><br>';
    $output_left .= '</div>';
    $output_left .= '<div class="col">';
    $output_left .= 'Section: <b>' . $Row['section'] . '</b><br>';
    $output_left .= '</div>';
    $output_left .= '<div class="col">';
    $output_left .= 'School Year: <b>' . $Row['syear'] . '</b><br>';
    $output_left .= '</div>';
    $output_left .= '</div>';
    $output_left .= "Track & Strands: <b>" . (!empty($Row['trackstrand']) ? $Row['trackstrand'] : "N/A") . "</b><br>";
    $output_left .= "Adviser: <b>" . $Row['adviser_id'] . "</b><br>";

    
  


    $output_left .= "</div>";

    echo $output_left;
} else {
    echo "<strong><h1>No Advisory for this School Year</h1></strong>";
}

mysqli_close($conn);
?>
   <br>
<?php
    require "./php/db_conn.php";
    $name = $_SESSION["name"];
    $teacher = mysqli_real_escape_string($conn, $_SESSION['name']);

    // Query for male students
    $query_male = "SELECT * FROM students WHERE syear = (SELECT schoolyear FROM users LIMIT 1)  AND adviser_id = '$name' AND gender = 'male' ORDER BY lastname";
    $result_male = mysqli_query($conn, $query_male);
    $rows_male = mysqli_fetch_all($result_male, MYSQLI_ASSOC);

    // Query for female students
    $query_female = "SELECT * FROM students WHERE syear = (SELECT schoolyear FROM users LIMIT 1)  AND adviser_id = '$name' AND gender = 'female' ORDER BY lastname";
    $result_female = mysqli_query($conn, $query_female);
    $rows_female = mysqli_fetch_all($result_female, MYSQLI_ASSOC);


    echo '<table style="font-size:10px;">';
   
    echo '<tr>
    <th class="text-center">LASTNAME</th>
    <th class="text-center">FIRSTNAME</th>
    <th class="text-center">MI.</th>
    
    
    <th class="text-center">ID Number</th></tr>'; // Add table header
    echo '<tr>
    <th colspan="4"class="text-primary">MALE</th>
   </tr>'; 
    echo '<tbody>';
    foreach ($rows_male as $row) {
        echo '<tr>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td class="text-center">' . substr($row['middlename'], 0, 1) . '.</td>';

        echo '<td class="text-center">' . $row['idnumber'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody><tbody>';
    echo '<tr>
    <th colspan="4"class="text-danger">FE MALE</th>
   </tr>'; 
    echo '<tbody>';
// Add table header

    foreach ($rows_female as $row) {
        echo '<tr>';
        echo '<td>' . $row['lastname'] . '</td>';
        echo '<td>' . $row['firstname'] . '</td>';
        echo '<td class="text-center">' . substr($row['middlename'], 0, 1) . '.</td>';
        echo '<td class="text-center">' . $row['idnumber'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
}
?>


</div> 

</div> 

</div> 


      
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>

 
</body>
</html>
