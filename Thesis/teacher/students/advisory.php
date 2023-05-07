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
  /* Set the page size to A4 */
  @page {
    margin-top: 0;
    margin-bottom: 0;
    size: auto;  /* Use the default page size */
       /* Reset the page margin to zero */
  }
  .img-fluid{

    display: none;
  }

  .my-element
  {
    display: none;
  }
  /* Define the styles for the printable elements */
  .printable {
    visibility: visible;
  }
  /* Define the styles for page 1 */
  .page1 {
    page-break-after: always;
  }
  /* Define the styles for page 2 */
  .page2 {
    page-break-before: always;
  }
  .form-control 
{
border:none;
text-align: center;
}
.table-borderless {
text-align: center;
  
}
label {
  text-align: center;
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


<!--
    <div class="d-flex justify-content-center align-items-center position-relative">

    <img src="msu.png" class=" p top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">


</div>
-->
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

    </div>
		<div class="box">
    <div class="content">



      
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/headergen.png" class="  top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
</div>
            <?php
require "./php/db_conn.php";
$name = $_SESSION["name"];

$teacher = mysqli_real_escape_string($conn, $_SESSION['name']);
$filter = isset($_POST['section']) ? "AND REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER('{$_POST['section']}'), ' ', '')" : "";
$query = "SELECT * FROM students WHERE adviser_id = '$name' ORDER by lastname";


$result = mysqli_query($conn, $query);
if ($Row = mysqli_fetch_assoc($result)) {
  $output_left = "<div id=''>";
  $output_left .= "<p>";

  $output_left .= "Adviser :&nbsp;:&nbsp;<b>".$Row['adviser_id']."</b> <br>" ; 

  $output_left .= "Section:&nbsp;:&nbsp;<b>". $Row['section']."</b> <br>" ; 
  $output_left .= "Track & Strands&nbsp;:&nbsp;<b>". (!empty($Row['trackstrand']) ? $Row['trackstrand'] : "N/A") ."</b> <br>";

  $output_left .= "S.Y.&nbsp;:&nbsp;<b>". $Row['syear']."</b>" ;


  $output_left .= "<br>Gender: <b>Male</b></p>";
  $output_left .= "</div>";

  
  
  echo $output_left;
;
} else {
  echo "<strong><h1>No Results, Select Section First</h1></strong>
    ";
    
}

mysqli_close($conn);

?>



<div class="page1">    

<?php
require "./php/db_conn.php";
$name = $_SESSION["name"];
$teacher = mysqli_real_escape_string($conn, $_SESSION['name']);

$query = "SELECT * FROM students WHERE adviser_id = '$name'  and gender='male'  ORDER by lastname";

$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$row_count = count($rows);
$half_row_count = ceil($row_count / 2);
$rowNum1 = 1;
$rowNum2 = $half_row_count + 1;

echo '<div class="column-wrapper">';
for ($i = 0; $i < $half_row_count; $i++) {
    echo '<div class="column">';
    echo $rowNum1++ . ". " . $rows[$i]["lastname"] . " ". $rows[$i]["firstname"]  . " ". $rows[$i]["middlename"] ."<br>";
    echo "</div>";
    
    if ($rowNum2 <= $row_count) {
        echo '<div class="column">';
        echo $rowNum2++ . ". " . $rows[$half_row_count + $i]["fullname"] . "<br>";
        echo "</div>";
    }
} 
   
echo "</div>";
?>



</div> 





<div class="page2">    
     
<div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/headergen.png" class="  top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
</div>
            <?php
require "./php/db_conn.php";
$name = $_SESSION["name"];

$teacher = mysqli_real_escape_string($conn, $_SESSION['name']);
$filter = isset($_POST['section']) ? "AND REPLACE(LOWER(b.section), ' ', '') = REPLACE(LOWER('{$_POST['section']}'), ' ', '')" : "";
$query = "SELECT * FROM students WHERE adviser_id = '$name' ORDER by lastname";


$result = mysqli_query($conn, $query);
if ($Row = mysqli_fetch_assoc($result)) {
  $output_left = "<div id=''>";
  $output_left .= "<p>";

  $output_left .= "Adviser :&nbsp;:&nbsp;<b>".$Row['adviser_id']."</b> <br>" ; 

  $output_left .= "Section:&nbsp;:&nbsp;<b>". $Row['section']."</b> <br>" ; 
  $output_left .= "Track & Strands&nbsp;:&nbsp;<b>". (!empty($Row['trackstrand']) ? $Row['trackstrand'] : "N/A") ."</b> <br>";

  $output_left .= "S.Y.&nbsp;:&nbsp;<b>". $Row['syear']."</b>" ;

  $output_left .= "<br>Gender: <b>Female</b></p>";
  $output_left .= "</div>";

  
  
  echo $output_left;
;
} else {
  echo "<strong><h1>No Results, Select Section First</h1></strong>
    ";
    
}

mysqli_close($conn);

?>
<?php
require "./php/db_conn.php";
$name = $_SESSION["name"];
$teacher = mysqli_real_escape_string($conn, $_SESSION['name']);

$query = "SELECT * FROM students WHERE adviser_id = '$name' and gender='female'  ORDER by lastname";

$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$row_count = count($rows);
$half_row_count = ceil($row_count / 2);
$rowNum1 = 1;
$rowNum2 = $half_row_count + 1;

echo '<div class="column-wrapper">';
for ($i = 0; $i < $half_row_count; $i++) {
    echo '<div class="column">';
    echo $rowNum1++ . ". " . $rows[$i]["lastname"] . " ". $rows[$i]["firstname"]  . " ". $rows[$i]["middlename"] ."<br>";
    echo "</div>";
    
    if ($rowNum2 <= $row_count) {
        echo '<div class="column">';
        echo $rowNum2++ . ". " . $rows[$half_row_count + $i]["fullname"] . "<br>";
        echo "</div>";
    }
} 
   }
echo "</div>";
?>



</div> 



      
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>

 
</body>
</html>
