<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
  
	<title>HOME</title>

  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    


.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  border-color: #f1f1f1;
}

.container form {
	width: 800px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  margin: 0 auto;
}
.box {
	width: auto;
}
.container table {
	padding: 20px;
	border-radius: 10px;
   
  background-color:white;
  border: 10px;
}
.border {
	padding: 15px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:white;
 
  border: 10px;
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
  .red-text {
  color: red;
}

.cell-border {
  border: 1px solid black;
}


  td.disabled {
  pointer-events: none;
  color: black; /* Change color to something other than red */
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
  .text-center {
  text-align: center;
 /* default border color */
}

.failed {
  color: red;
}

.failed + .text-center {
  border-color: black; /* override border color for cells with red text */
}
  .sticky + .content {
    padding-top: 102px;
  }

  .addbutton
  {
    margin-left:80%;
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
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }
  
  .btn-primary:hover {
    background-color: #0062cc;
    border-color: #005cbf;
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











<!-- TITLE HERE    -->




      <div class="container" >
		<div class="box">
    <div class="content">





    <div class="text-center mb-3">
  <a class="link-primary" href="subject1.php"><button type="button" class="btn btn-dark"><b>ADD GRADES</b></button></a>
  <button type="button" class="btn btn-dark" onclick="printPage()"><b>PRINTABLE DATA</b></button>
</div>










 
  <div class="border">

  <div class="mx-auto text-center text-wrap mb-3 bg-danger text-white rounded-pill shadow">
    <b class="fs-2"><?=$_SESSION['sub1']?> - <?=$_SESSION['sec1']?></b>
</div>

  <table class="table table-bordered" id="grade-table">


            <form method="POST"class="mb-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="row">
    <div class="col-md-4">
        
      <select class="form-select" id="semester" name="semester">
        <option value="">Select Semester</option>
        <option value="FIRST">First</option>
        <option value="SECOND">Second</option>
        <option value="THIRD">Third</option>
        <option value="FOURTH">Fourth</option>
      </select>
    </div>
    <div class="col-md-4">
 
      <select class="form-select" id="quarter" name="quarter">
        <option value="">Select Quarter</option>
        <option value="FIRST">First</option>
        <option value="SECOND">Second</option>
        <option value="THIRD">Third</option>
        <option value="FOURTH">Fourth</option>
      </select>
    </div>
    <div class="col-md-4">
   
      <select class="form-select" id="gender" name="gender">
        <option value="">Select Gender</option>
        <option value="MALE">Male</option>
        <option value="FEMALE">Female</option>
      </select>
    </div>
  </div>
  <div class="text-center">
  <button type="submit" class="btn btn-dark mt-3 mb-3 "><b>Show Results</b></button>
      </div>
        <input class="mb-3"type="text" id="search-input" placeholder="Search..." oninput="filterTable()">
</form>

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           




              <thead >
                  <tr>
                  <th scope="col" class="w-50"><h3 class="text-primary text-center"><b>StudentName</h3> </th>
                  <th hidden scope="col"><h3 class="text-primary text-center"><b>Subject Name</h3></b></th>
                  <th scope="col"><h3 class="text-primary text-center"><b>Grade</b></h3></th>
                  <th scope="col"><h3 class="text-primary text-center"><b>Remarks</b></h3></th>
                  <th scope="col"><h3 class="text-primary text-center"><b>Quarter</b></h3></th>
                  <th scope="col"><h3 class="text-primary text-center"><b>Semester</b></h3></th>
                  <th colspan="2" scope="col" class="w-50">
        <h3 class="text-success center text-center"><b>Actions</b></h3>
      </th>
                  
                </tr>
              </thead>
              <tbody>
              <?php 
  require "./php/db_conn.php";
  $teacher = $_SESSION['name'];

  $query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
    a.name,a.sub1 ,a.name,a.sec1, a.sgh1,b.remarks,b.quarter,b.semester,b.gender
    FROM grade b, users a WHERE  b.subjectname = a.sub1  
    AND b.section = a.sec1 AND a.name = b.teacher AND b.adviser = a.sgh1 
    AND teacher = '$teacher'";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester = $_POST["semester"];
    $quarter = $_POST["quarter"];
    $gender = $_POST["gender"];

    if (!empty($semester)) {
      $query .= " AND semester = '$semester'";
    }
    if (!empty($quarter)) {
      $query .= " AND quarter = '$quarter'";
    }
    if (!empty($gender)) {
      $query .= " AND gender = '$gender'";
    }
  }

  $result = mysqli_query($conn, $query);
?>


    <?php 
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>


<script>
function filterTable() {
  var input = document.getElementById("search-input").value.toUpperCase();
  var table = document.getElementById("grade-table");
  var tbody = table.getElementsByTagName("tbody")[0];
  var rows = tbody.getElementsByTagName("tr");
  for (var i = 0; i < rows.length; i++) {
    var cells = rows[i].getElementsByTagName("td");
    var match = false;
    for (var j = 0; j < cells.length; j++) {
      var cellText = cells[j].textContent.toUpperCase();
      if (cellText.indexOf(input) > -1) {
        match = true;
        break;
      }
    }
    rows[i].style.display = match ? "" : "none";
  }
}


</script>
    <tr>
      <td><b><?php echo $rows["studentname"]; ?></b></td>
      <td hidden><b><?php echo $rows["subjectname"]; ?></b></td>
      <td class="text-center"><b><?php echo $rows["grade"]; ?></b></td>
      <td class="text-center cell-border <?php if ($rows['remarks'] == 'FAILED') { ?> red-text <?php } ?>">
  <b><?php echo $rows["remarks"]; ?></b>
</td>

      <td class="text-center"><b><?php echo $rows["quarter"]; ?></b></td>
      <td class="text-center"><b><?php echo $rows["semester"]; ?></b></td>
      <td class="text-center">
        <b>
          <a href="update.php?id=<?=$rows['id']?>" class="btn btn-primary"><b>Update</b></a>
</td>
<td>
   
                   <script type="text/javascript">  

function openulr(newurl) {  

  if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $rows['id'] ?>');">
  <b>DELETE</b>
</a>

			      </td>

			    </tr>
     












       
            <?php }
 }



     }


 ?>



         </tbody>
      </table>
</div>

  
<div>
          <script>
		function printPage() {
			window.open("printsubject1.php", "_blank");
		}
	</script>
<bR>





      </tbody>
                
              </table>
              </div>
     </div>
   </div>
  </div>


          
            </div>
      
      </div>
    </div>
      </div>
 
      </form>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
