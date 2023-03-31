<?php 



      
   session_start();
   include "../php/db_conn.php";
   include "php/subject1.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
  <script>
		function printPage() {
			window.location.href = "printsubject1.php";
		}
	</script>

  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    .no {border:0;outline:0;}



.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  margin-top: -10rem;
  width:1000px;

}

.container form {
	width:600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white ;
  
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
  background-color: white;
  border: 10px;
  width:600px;

}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;

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

  select option {
  font-weight: bold;
}

select option:checked {
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
}

select option[value="0"] {
  font-weight: bold;
}


/* Make the selected text bold */
select option::selection,
select option::-moz-selection,
select option::-webkit-selection {
  font-weight: bold;
}
td.text-bold {
  font-weight: bold;
}
.blue-border {
  border-color: blue;
  border-width: 3px;
}

.red-border {
  border-color: red;
  border-width: 3px;
}
.form-select-sm {
    height: 30px;
    padding: 0.25rem 0.5rem;
    font-size: 0.875rem;
  }
    </style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





<video autoplay muted loop id="myVideo">
  <source src="../bg/records.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>




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


<!-- TITLE HERE -->


<form action="./php/subject1create.php"
      method="post" >



    <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>



       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
           

            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;

              ?> 
           
           <div class="content">


     <div class="container" >

 
               
   <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="border">
        <!--
      <?php
    require "php/db_conn.php";
    $name = $_SESSION["name"];
    $query = "SELECT students.fullname, students.adviser_id, users.sub1,
            students.section, students.firstname,students.middlename,
            students.lastname,students.gender
            FROM students
            JOIN users ON users.sgh1 = students.adviser_id OR users.sgh2 = students.adviser_id OR users.sgh3 = students.adviser_id OR users.sgh4 = students.adviser_id OR users.sgh5 = students.adviser_id
            WHERE (students.subject1 = users.sub1 OR students.subject2 = users.sub1 OR students.subject3 = users.sub1 OR students.subject4 = users.sub1 OR students.subject5 = users.sub1 OR students.subject6 = users.sub1 OR students.subject7 = users.sub1 OR students.subject8 = users.sub1 OR students.subject9 = users.sub1 OR students.subject10 = users.sub1)
            AND (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section OR users.sec10 = students.section)
            AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' OR students.subjectteacher7 = '".$_SESSION["name"]."' 
            OR students.subjectteacher8 = '".$_SESSION["name"]."' OR students.subjectteacher9 = '".$_SESSION["name"]."' 
            OR students.subjectteacher10 = '".$_SESSION["name"]."')
            LIMIT 1";
    
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Do something with the row
?>
-->
   
   <table class="table table-bordered" id="grades-table">

   <div class="text-center bg-danger text-white rounded-pill mb-3">
   ADDING GRADES FOR SUBJECT :  <b> <?=$_SESSION['sub1']?></b>
</div>

                   <?php }
                   ?>   

<div class="form-floating mb-3">
  <select class="form-select form-select-sm" id="section-filter" onchange="filterTable()">
    <option value="">All Sections</option>
    <?php
    $query = "SELECT DISTINCT section FROM students ORDER BY section ASC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
      echo '<option value="' . $row['section'] . '">' . $row['section'] . '</option>';
    }
    ?>
  </select>
  <label for="section-filter"><small>Filter by Section</small></label>
</div>
<hr>

<script>
function filterTable() {
  var section = document.getElementById("section-filter").value.toUpperCase();
  var table = document.getElementById("grades-table");
  var rows = table.getElementsByTagName("tr");
  for (var i = 1; i < rows.length; i++) {
    var rowSection = rows[i].querySelector(".section").getElementsByTagName("input")[0].value.toUpperCase();
    var skipRow = false;
    if (section != "" && rowSection != section) {
      skipRow = true;
    }
    rows[i].setAttribute("data-skip-row", skipRow);
    rows[i].style.display = skipRow ? "none" : "";
  }
}


</script>

<script>
  function submit() {
  var form = document.getElementById("grades-form");
  var table = document.getElementById("grades-table");
  var rows = table.getElementsByTagName("tr");
  for (var i = 1; i < rows.length; i++) {
    var skipRow = rows[i].getAttribute("data-skip-row");
    if (skipRow === "true") {
      continue;
    }
    var inputs = rows[i].getElementsByTagName("input");
    // insert the data into the database
  }
  form.submit();
}

</script>
      <div class="row">
  <div class="col-md-6">
    <label for="semester" class="form-label text-center"><b>Semester</b></label>
    <select class="form-select" id="semester" name="semester">

      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="quarter" class="form-label text-center"><b>Quarter</b></label>
    <select class="form-select" id="quarter" name="quarter">

      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
</div>
<br>
              <thead >
                  <tr>
                  
              
          
                  <th scope="col">Student Name</th>
                  <th hidden  scope="col">Subject Name </th>
                  <th scope="col" class="text-center">Grade </th>
      
                </tr>
              </thead>
          
        <tbody>    
          
        <tr>
           






          
       



         
<?php
                    require "php/db_conn.php";
            $name = $_SESSION["name"];
                    $query =
                    $query = "SELECT students.fullname, students.adviser_id, users.sub1,
                    students.section, students.firstname,students.middlename,
                    students.lastname,students.gender,students.syear,students.grade
              FROM students
              JOIN users ON users.sgh1 = students.adviser_id OR users.sgh2 = students.adviser_id OR users.sgh3 = students.adviser_id OR users.sgh4 = students.adviser_id OR users.sgh5 = students.adviser_id
              WHERE (students.subject1 = users.sub1 OR students.subject2 = users.sub1 OR students.subject3 = users.sub1 OR students.subject4 = users.sub1 OR students.subject5 = users.sub1 OR students.subject6 = users.sub1 OR students.subject7 = users.sub1 OR students.subject8 = users.sub1 OR students.subject9 = users.sub1 OR students.subject10 = users.sub1)
              AND (users.sec1 = students.section OR users.sec2 = students.section OR users.sec3 = students.section OR users.sec4 = students.section OR users.sec5 = students.section OR users.sec6 = students.section OR users.sec7 = students.section OR users.sec8 = students.section OR users.sec9 = students.section OR users.sec10 = students.section)
              AND (students.subjectteacher1 = '".$_SESSION["name"]."' OR students.subjectteacher2 = '".$_SESSION["name"]."' OR students.subjectteacher3 = '".$_SESSION["name"]."' OR students.subjectteacher4 = '".$_SESSION["name"]."' OR students.subjectteacher5 = '".$_SESSION["name"]."' OR students.subjectteacher6 = '".$_SESSION["name"]."' OR students.subjectteacher7 = '".$_SESSION["name"]."' 
              OR students.subjectteacher8 = '".$_SESSION["name"]."' OR students.subjectteacher9 = '".$_SESSION["name"]."' 
              OR students.subjectteacher10 = '".$_SESSION["name"]."')";
    
                  
                    // $query = "SELECT students.fullname,students.adviser_id,students.firstname
                    //FROM students 
                    //INNER JOIN subjects   ON subjects.subjectgrouphead = adviser_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

                      while ($Row = mysqli_fetch_assoc($result)) {

                        ?>
   



   
               
<td   colspan="">
<input class="no" id="studentname" name="studentname[]" value="<?= $Row['fullname'] ?>">
</input>
</td>
               
<td  hidden colspan="">
<input class="no" id="firstname" name="firstname[]" value="<?= $Row['firstname'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="year" name="year[]" value="<?= $Row['grade'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="sy" name="sy[]" value="<?= $Row['syear'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="middlename" name="middlename[]" value="<?= $Row['middlename'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="lastname" name="lastname[]" value="<?= $Row['lastname'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="gender" name="gender[]" value="<?= $Row['gender'] ?>">
</input>
</td>


 
            <td hidden >
            <input hidden class="no" id="subjectname" name="subjectname[]" 
            value="<?= $Row['sub1'] ?>">
             </input>
          <b class="text-danger"><?= $Row['sub1'] ?></b>
        </td>
          
        <td>
      <select id="grade-<?php echo $i; ?>" name="grade[]" class="form-control text-center grade-select">
        <option value="0" class="">ADD GRADE</option>
        <option value="1" class="text-danger"><b>INC</b></option>
        <?php for ($j = 50; $j <= 100; $j++) { ?>
          <option value="<?php echo $j; ?>"><?php echo $j; ?></option>
        <?php } ?>
      </select>
    </td>







    
          <td hidden><input value="<?= $_SESSION['name']?>" id="teacher"name="teacher[]">

        </td>
        <td class="section" hidden><input hidden class="no" id="section" name="section[]" value="<?= $Row['section'] ?>"></td>

        <td hidden>          

        </input> 
          <input hidden class="no" id="adviser" name="adviser[]" 
            value="<?= $Row['adviser_id'] ?>">
          </input> 
                      </td> 
			    </tr>


       
            <?php }
                    }

            }
      }
            }
          
        

  
      ?>



         </tbody>
         
      </table>
      <button type="submit"
        class="btn btn-primary"
        name="submit" id="submit"><b>ADD<b></button>
      
          <a class="link-primary" href="subject1view.php" display-40>
          <button type="button" class="btn btn-dark">

      <b>CANCEL</b>

          </button>
          </a>
          
          </div>
          <br>
    




    
</form>

      <br>



      
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
