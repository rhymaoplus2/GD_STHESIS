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
    

    html, body {
  height: 100%;
}
body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;
}


.fade-in {
  animation: fadeIn 3s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


.container {

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
	width: 100%;
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
  #rotate-btn:hover img {
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
}
.btn-transparent:active {
  outline: none;
  border: none;
}
.btn-transparent:focus, 
.btn-transparent:hover {
  box-shadow: none;
  border: none;
}
#rotate-btn {
  transition: transform 0.5s;
}

#rotate-btn.clicked {
  transform: rotate(360deg);
}
/* CSS */
#rotate-btn {
  position: relative;
}

#rotate-btn:active img {
  animation: rotate .3s linear infinite;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

input::placeholder {
  color: gray;
  font-style: italic;
}
.ff {

  max-width: 100%;
}
.bold {
  font-weight: bold;
}


    </style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





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



      <div class="container" >
		<div class="box">
    <div class="content">

    <div class="text-center mb-3">
      
    <!--
  <a class="link-primary" href="subject1.php"><button type="button" class="btn btn-dark"><b>ADD GRADES</b></button></a>

<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
<b>PRINT GRADES</b>
</button>
-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Print Grades From</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h3> Semester 1 - Quarter : </h3>
      
        <button type="button" class="btn btn-primary" onclick="window.open('sub1p1.php', '_blank')">1</button>
        <button type="button" class="btn btn-secondary" onclick="window.open('sub1p2.php', '_blank')">2</button>
        <br>
        <h3> Semester 2 - Quarter : </h3>
       
        <button type="button" class="btn btn-success" onclick="window.open('sub1p3.php', '_blank')">3</button>
        <button type="button" class="btn btn-danger" onclick="window.open('sub1p4.php', '_blank')">4</button>
      </div>
    </div>
  </div>
</div>


</div>








 
  <div class="border">



            <div class="mx-auto text-center text-wrap mb-3 text-white rounded-pill shadow" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
  <b class="fs-2" style="white-space: nowrap;"><?=$_SESSION['sub1']?> </b>
  
</div>

<p class="ff mx-auto text-center text-wrap mb-3 bg-warning text-white rounded-pill shadow" id="input-text" style="font-size: 30px; width:100px;"></p>


  <table class="table table-bordered" id="grade-table">


            <form method="POST"class="mb-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="row text-center">
 
  <div class="col-md-3">
  <select class="form-select fw-bold fw-bold" id="quarter" name="quarter">
    <option value="" class="fw-bold">Select Quarter</option>
    <option value="FIRST" class="fw-bold">First</option>
    <option value="SECOND" class="fw-bold">Second</option>
    <option value="THIRD" class="fw-bold">Third</option>
    <option value="FOURTH" class="fw-bold">Fourth</option>
  </select>
</div>

    <div class="col-md-3">
        
        <select class="form-select fw-bold fw-bold"  id="semester" name="semester">
          <option value="" class="fw-bold"><b>Select Semester</b></option>
          <option value="FIRST" class="fw-bold">First</option>
          <option value="SECOND" class="fw-bold">Second</option>
        </select>
      </div>
    <div class="col-md-3">
   
      <select class="form-select fw-bold" id="gender" name="gender">
        <option value=""class="fw-bold"><b>Select Gender</b></option>
        <option value="MALE"class="fw-bold">Male</option>
        <option value="FEMALE"class="fw-bold">Female</option>
      </select>
    </div>
  
    <div class="col-md-3 ">

  <select class="form-select text-center fw-bold"  id="sy" name="sy">
    <option value="" class="fw-bold"><b>Academic Year</b></option>
    <option value="2019-2020"class="fw-bold">2019-2020</option>
    <option value="2020-2021"class="fw-bold">2020-2021</option>
    <option value="2021-2022"class="fw-bold">2021-2022</option>
    <option value="2022-2023"class="fw-bold">2022-2023</option>
    <option value="2023-2024"class="fw-bold">2023-2024</option>
    <option value="2024-2025"class="fw-bold">2024-2025</option>
    <option value="2025-2026"class="fw-bold">2025-2026</option>
    <option value="2026-2027"class="fw-bold">2026-2027</option>
    <option value="2027-2028"class="fw-bold">2027-2028</option>
    <option value="2028-2029"class="fw-bold">2028-2029</option>
    <option value="2029-2030"class="fw-bold">2029-2030</option>

  </select>
</div>

  </div>
  <div class="text-center">
  <button id="rotate-btn" type="submit" class="btn btn-transparent mt-3 mb-3">
  <img src="img/show.png" alt="Image" title="Add New Student" width="20" height="auto">
  <b></b>
</button>


<script>
 const rotateBtn = document.getElementById("rotate-btn");
const rotateImg = document.getElementById("rotate-img");

rotateBtn.addEventListener("click", () => {
  rotateImg.classList.add("rotate");
  setTimeout(() => rotateImg.classList.remove("rotate"), 1000);
});

</script>
<div class="input-group mb-3">
  <input type="text" class="form-control" id="search-input" placeholder="Type section name or student name" oninput="filterTable()">
</div>

<p id="input-text"></p>


<script>
  function filterTable() {
    const input = document.getElementById("search-input").value;
    const inputText = document.getElementById("input-text");
    inputText.textContent = "You typed: " + input;

    // your existing code to filter the table goes here...
    const table = document.getElementById("table");
    const rows = table.getElementsByTagName("tr");
    for (let i = 0; i < rows.length; i++) {
      const cells = rows[i].getElementsByTagName("td");
      let match = false;
      for (let j = 0; j < cells.length; j++) {
        if (cells[j].textContent.toLowerCase().includes(input.toLowerCase())) {
          match = true;
          break;
        }
      }
      rows[i].style.display = match ? "" : "none";
    }
  }
</script>





</form>

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           




              <thead class="text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%); border-color:black;  ">
                  <tr>
                  <th scope="col" class="w-50">StudentName</th>
<th hidden scope="col">Subject Name</th>
<th scope="col">Grade</th>
<th scope="col">Remarks</th>
<th scope="col">Section</th>
<th scope="col">Quarter</th>

<th colspan="2" scope="col" class="w-50">
 
</th>

      </th>
                  
                </tr>
              </thead>
              <tbody style="  background-color:#e6e6e6; border-color:black;  ">
              <?php 
  require "./php/db_conn.php";
  $teacher = $_SESSION['name'];

  // Add the section column to the SELECT statement
  $query = "SELECT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
      a.name, a.sub1, a.name, a.sec1, a.sgh1, b.remarks, b.quarter, b.semester, b.gender, b.sy, b.section
      FROM grade b, users a
      WHERE b.subjectname = a.sub1  
      AND a.name = b.teacher
      AND teacher = '$teacher'";
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $semester = $_POST["semester"];
    $quarter = $_POST["quarter"];
    $gender = $_POST["gender"];
    $sy = $_POST["sy"];


    if (!empty($semester)) {
      $query .= " AND semester = '$semester'";
    }
    if (!empty($quarter)) {
      $query .= " AND quarter = '$quarter'";
    }
    if (!empty($gender)) {
      $query .= " AND gender = '$gender'";
    }
    if (!empty($sy)) {
      $query .= " AND sy = '$sy'";
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
<td><?php echo $rows["studentname"]; ?></td>
<td class="text-center"><b><?php echo $rows["grade"]; ?></b></td>
<td class="text-center cell-border <?php if ($rows['remarks'] == 'FAILED') { ?> red-text <?php } ?>">
        <?php echo $rows["remarks"]; ?>
      </td>
      <td class="text-center"><b><?php echo $rows["section"]; ?></b></td>
 
   
      <td hidden><?php echo $rows["subjectname"]; ?></td>
      <td hidden><?php echo $rows["sy"]; ?></td>
      <td hidden><?php echo $rows["section"]; ?></td>

  
      <td><?php echo $rows["semester"]; ?></td>
      <td class="text-center">
        <a href="update.php?id=<?=$rows['id']?>" class="btn btn-primary">Update</a>
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
