<?php 
   include "php/read.php";
   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head>
	<title>CONSOLIDATED GRADES</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
   html, body {
  height: 100%;
  
}
body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;

}

  .container {
  width: 1000px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.formx {
	width: auto;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 900px;
  
}
.container table {
	padding: 20px;
	border-radius: 5px;
	
  border:10px;
  background-color: white;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  border-radius: 30px;
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


.modal
{
 border: 100px;
 background-color: ;
 
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
  .btn-transparent {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:hover {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:focus {
    background-color: transparent;
    border: none;
    box-shadow: none;
  }
a{
  text-decoration: none;
  color: black;
}
  .btn img {
    width: 30px;
    height: 30px;
  }
  #refresh-img {
  transition: all 0.2s;
}

#refresh-img:hover {
  transform: scale(1.2);
}
#search {
  border-width: 2px;
}
.page-item a.page-link {
  opacity: 0.5;
}
.page-item.active a.page-link {
  font-weight: bold;
  opacity: 1;
}
td a {
  text-decoration: none;
  color: black;
}


td a:hover {
  font-weight: bold;
  color: black;
}

.table-scrollable{
  height: 400px;
  overflow-y: auto;
  scroll-behavior: smooth;
}
.table-scrollable::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

.table-scrollable::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

.table-scrollable::-webkit-scrollbar-thumb {
  background: #888; /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}

.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.btn:hover img,
.btn:hover img {
    transform: scale(1.2);
    transition: transform 0.5s ease;
}

.table-scrollable{
  height: 300px;
  overflow-y: auto;
  scroll-behavior: smooth;
}
.table-scrollable::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

.table-scrollable::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

.table-scrollable::-webkit-scrollbar-thumb {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}
.sticky {
    position: sticky;
    top: 0;
  
  }
  .zoom-image {
  width: 30px;
  transition: transform 0.3s ease;
}

.zoom-image:hover {
  transform: scale(1.2); /* Increase the scale value to zoom in further */
}

  </style>
</head>

<body>


<div class="header" id="myHeader">
<?php include_once('header.php');?>
</div>

<br>
<div class="container">
    <div class="border">
<div>
    <div  style="	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
     border-radius:20px;   background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);" class="mb-3 text-white text-center"><h4>FOURTH QUARTER PRINTABLE GRADES </h4></div>
</div>  
<div class="filter-options d-flex justify-content-center mb-3">
  
  <div class="row">
    <div class="col-md-3 mb-3">
      <select id="filter-year" class="form-select">
        <option value="">GRADE LEVEL</option>
        <option value="7">7th Grade</option>
        <option value="8">8th Grade</option>
        <option value="9">9th Grade</option>
        <option value="10">10th Grade</option>
        <option value="11">11th Grade</option>
        <option value="12">12th Grade</option>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <select id="filter-section" class="form-select">
        <option value="">SECTION</option>
        <?php
          require "./php/db_conn.php";
          $query = "SELECT DISTINCT name FROM section";
          $result = mysqli_query($conn, $query);

          while($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <select id="filter-sy" class="form-select">
        <option value="">SCHOOL YEAR</option>
        <?php
          require "./php/db_conn.php";
          $query = "SELECT DISTINCT syear FROM students";
          $result = mysqli_query($conn, $query);

          while($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['syear'] . "'>" . $row['syear'] . "</option>";
          }
        ?>
      </select>
    </div>
    <div class="col-md-3 mb-3">
      <select id="filter-subject" class="form-select">
        <option value="">SUBJECT NAME</option>
        <?php
          require "./php/db_conn.php";
          $query = "SELECT DISTINCT subjectname FROM grade";
          $result = mysqli_query($conn, $query);

          while($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
          }
        ?>
      </select>
    </div>
  </div>
</div>

<div class="table-scrollable">
<table class="table table-bordered mb-3" style="width: 1200px;">
    <thead class="text-white sticky" style="
    
    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <tr>
            <th class="text-center">Subject</th>
            <th class="text-center">Year</th>
            <th class="text-center">Section</th>
            <th class="text-center">School Year</th>
            <th class="text-center"></th>
        </tr>
    </thead>
    <tbody id="table-body">
        <?php
    $query = "SELECT MAX(section) AS section, MAX(year) AS year, MAX(sy) AS sy, MAX(quarter) AS quarter, subjectname, teacher
    FROM grade 
    WHERE quarter='FOURTH'
    AND teacher = '" . $_SESSION['name'] . "'
    GROUP BY session, quarter, sy ,year
    ORDER BY subjectname, year, section, sy";

$result = $conn->query($query);


        while ($row = $result->fetch_assoc()) {
            $section = $row['section'];
            $quarter1shs = "quarterly.php?section=" . $section . "&sy=" . $row['sy'] . "&quarter=" . $row['quarter'] . "&year=" . $row['year']

            . "&teacher=" . $row['teacher']
                . "&subjectname=" . $row['subjectname']
                . "&teacher=" . $row['teacher'];
        
            ?>
            <tr style="background-color:#f5f5f0;" data-year="<?php echo $row['year']; ?>" data-section="<?php echo $section; ?>" data-sy="<?php echo $row['sy']; ?>">
                <td><b> <?php echo $row['subjectname']; ?> </b></td>
                <td class="text-center"><?php echo $row['year']; ?></td>
                <td class="text-center"><?php echo $section; ?></td>
                <td class="text-center"><?php echo $row['sy']; ?></td>
                <td class="text-center">
                   
                <a href="<?php echo $quarter1shs; ?>" target="_blank" title="PRINT">
  <img src="img/print.png" class="img-fluid zoom-image" alt="Description of image">
</a>

                </td>
            </tr>
        <?php
        }
        $conn->close();
        ?>
    </tbody>
</table>

      </div>
      </div>
<script>
  const filterYear = document.getElementById('filter-year');
  const filterSection = document.getElementById('filter-section');
  const filterSy = document.getElementById('filter-sy');
  const filterSubject = document.getElementById('filter-subject');
  const tableBody = document.getElementById('table-body');

  function applyFilters() {
    const selectedYear = filterYear.value;
    const selectedSection = filterSection.value;
    const selectedSy = filterSy.value;
    const selectedSubject = filterSubject.value;

    Array.from(tableBody.children).forEach(row => {
      const year = row.getAttribute('data-year');
      const section = row.getAttribute('data-section');
      const sy = row.getAttribute('data-sy');
      const subject = row.cells[0].textContent.trim();

      const showYear = selectedYear === '' || year === selectedYear;
      const showSection = selectedSection === '' || section === selectedSection;
      const showSy = selectedSy === '' || sy === selectedSy;
      const showSubject = selectedSubject === '' || subject === selectedSubject;

      row.style.display = showYear && showSection && showSy && showSubject ? 'table-row' : 'none';
    });
  }
  filterYear.addEventListener('change', applyFilters);
  filterSection.addEventListener('change', applyFilters);
  filterSy.addEventListener('change', applyFilters);
  filterSubject.addEventListener('change', applyFilters);
</script>
    </div>
</div>

<script>
    function filterTable() {
        var section = document.getElementById("section").value;
        var year = document.getElementById("year").value;
        var rows = document.getElementById("table-body").getElementsByTagName("tr");

        for (var i = 0; i < rows.length; i++) {
            var row = rows[i];
            var rowSection = row.querySelector("td:first-child").innerText;

            if (
                (section === "" || rowSection.includes(section)) &&
                (year === "" || rowSection.includes(year))
            ) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
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


  

</body>
</html>
<?php

}?>
                                                          
