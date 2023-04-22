




<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>
 
 @media print {

/* Set the page size to A4 */
@page {
  size: A4;
  margin: 0;
  margin-left: 1cm;
  margin-right: 1cm;
}
.p1 {
  page-break-after: always;
  margin-top: 50px; /* adjust the value as needed */
}

.p2 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p3 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p4 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p5 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p6 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p7 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p9 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p10 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
}
.p11 {
  page-break-before: always;
  margin-top: 50px; /* adjust the value as needed */
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
hr{
  display: none;
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
.font{
  font-size: 10px;
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



table {
 font-size: 5px;
  padding:10px;
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
  table{
font-size: 15px;
width: 700px;
  }
  
  </style>

</head>
<body>

	<div class="container">
  <div class="page1">
  <div class="d-flex justify-content-center align-items-center position-relative">
    <img src="img/wholegrades.png" class=" p top-0 w-10 h-auto" style="max-height: 350px;" alt="Example Image">
</div><?php
// Include the database connection file
include "db_conn.php";

// Construct the SQL query with prepared statements
$sql = "SELECT section, subjectname, studentname, teacher, adviser, UPPER(quarter) as quarter, ROUND(AVG(grade), 0) as average FROM grade GROUP BY section, subjectname, studentname, UPPER(quarter)";
$stmt = mysqli_prepare($conn, $sql);

// Execute the query and get the result set
if(mysqli_stmt_execute($stmt)) {
    $result = mysqli_stmt_get_result($stmt);

    $table_index = 1;
    $first_grade = 0;
    $second_grade = 0;
  
    $current_subject = null;

    // Check if there are any rows returned
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($row['subjectname'] !== $current_subject) {
                // Close the previous table
                if($current_subject !== null) {
                    echo "</tbody></table><hr></div>";
                }

                // Set the current subject name and increment the table index
                $current_subject = "<span style='font-size: 20px'> " . $row['subjectname'] . "</span>";
                $table_class = "p" . $table_index;
                $table_index++;

                // Start a new table for the current subject
                echo "<div class='table $table_class'>";
                
                echo "<div class='mb-4' style='font-size: 20px'>Subject: <b>" . $current_subject . "</b><br>Subject Teacher: <b>" . $row['teacher'] . "</b><br>Adviser:<b> " . $row['adviser'] . "</b><br>Section: <b>" . $row['section'] . "</b></div>" ;
                echo "<table class='font' >";
                echo "<tr><td style='width:40%;'><b>&nbsp;&nbsp;STUDENT NAME</td><td class='text-center'> <b>1ST QUARTER</td><td class='text-center'><b>2ND QUARTER</td><td class='text-center'><b>AVERAGE</td><td class='text-center'><b>REMARKS</td></td></tr>";

                echo "<tbody>";
            }

            // Process the current row
            if($row['quarter'] === 'FIRST') {
                $first_grade = $row['average'];
                $second_grade = 0; // initialize second grade to 0
            } else if($row['quarter'] === 'SECOND') {
                $second_grade = $row['average'];
            }
            $average = ($first_grade + $second_grade)/2;
            $pass_fail_td = "<td class='text-center " . ($average >= 75 ? "text-darj'>PASS" : "text-danger'>FAIL") . "</td>";
            echo "<tr><td>&nbsp;&nbsp;" . htmlspecialchars($row['studentname']) . "</td><td class='text-center'>" . $first_grade . "</td><td class='text-center'>" . $second_grade . "</td><td class='text-center'>" . $average . "</td>" . $pass_fail_td . "</tr>";
        }

        // Close the last table
        echo "</tbody></table></div>";
      } else {
      echo "No results found";
      }
      } else {
      // Handle the error
      echo "Error: " . mysqli_error($conn);
      }
      
      // Close the prepared statement and the database connection
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
      ?>




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