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
.img-fluid{
    display: none;
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
 .print{
    display: none;
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
   border: 10px;
   border-color: black;

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
    background-color: white;


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


  $output_left .= "</p>";
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

$query = "SELECT * FROM students WHERE adviser_id = '$name'   ORDER by lastname";

$result = mysqli_query($conn, $query);
$rowNum = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $rowNum++; 
?>

 
 <?php echo  $rowNum ?>.

 <?php echo $row["fullname"]; ?>
<br>
<?php }
} ?>

</tbody>



        


      
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>

 
</body>
</html>
