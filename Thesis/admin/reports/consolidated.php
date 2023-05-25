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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
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
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 900px;
  
}
.container table {
	padding: 20px;
	border-radius: 10px;
	
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
  height: 360px;
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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);/* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
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
    <div style="	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius:20px; background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);" class="text-white text-center"><h4>CONSOLIDATED GRADES</h4></div>
</div>

    <div class="filter-options d-flex justify-content-between mb-3">
  
  <select id="section" onchange="filterTable()" class="fw-bold form-select flex-grow-1">
    <option value="">ALL SECTIONS</option>
    <?php
    include "db_conn.php";
    $query = "SELECT DISTINCT section FROM grade ORDER BY section ";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $section = urlencode($row['section']);
        echo "<option value=\"$section\">{$row['section']}</option>";
    }
    ?>
  </select>
&nbsp;&nbsp;
  <select id="year" onchange="filterTable()" class="fw-bold  form-select flex-grow-1">
    <option value="">ALL YEAR LEVEL</option>
    <?php
$query = "SELECT DISTINCT year FROM grade ORDER BY year ASC";

    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $year = urlencode($row['year']);
        echo "<option value=\"$year\">{$row['year']}</option>";
    }
    ?>
  </select>
</div>

<div class="table-scrollable">
  <table class="table table-bordered" style="width:700px;">
<Script>
  // get the table element and its height
var table = document.querySelector('.table-scrollable table');
var tableHeight = table.offsetHeight;

// set the interval (in milliseconds) for scrolling
var interval = 2000; // scroll every 2 seconds

// start scrolling the table
setInterval(function() {
  // get the current scroll position
  var scrollTop = table.parentElement.scrollTop;

  // calculate the new scroll position
  var newScrollTop = scrollTop + tableHeight;

  // check if we've reached the end of the table
  if (newScrollTop >= table.scrollHeight) {
    // reset the scroll position to the top
    newScrollTop = 0;
  }

  // set the new scroll position
  table.parentElement.scrollTo({
    top: newScrollTop,
    behavior: 'smooth'
  });
}, interval);

</script>
            <thead>
                <tr>
                    <th style="  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); "class="text-white text-center">SELECT ONE</th>
                </tr>
            </thead>
            <tbody id="table-body">
    <?php
    $query = "SELECT id, section, year, sy FROM grade GROUP BY section, sy ORDER BY year, section, sy";
    $result = $conn->query($query);

    $counter = 1; // Initialize a counter for unique identifiers

    while ($row = $result->fetch_assoc()) {
        $section = urlencode($row['section']);
        $sy = urlencode($row['sy']);
        $yearSectionYear = "Grade: <b> ".$row['year'] . "</b>&nbsp;&nbsp;-&nbsp;&nbsp;<b>" . $row['section'] . "</b> (&nbsp;ACADEMIC YEAR : <b> "  . $row['sy']. "</b>"."&nbsp;)";

        $modalId = "myModal" . $counter; // Generate unique modal ID
        $counter++;

        $quarter1shs = "q1shs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter1jhs = "q1jhs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter2jhs = "q2jhs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter3jhs = "q3jhs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter4jhs = "q4jhs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter2shs = "q2shs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter3shs = "q3shs.php?section=". $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $quarter4shs = "q4shs.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $sshs1 = "sshs1.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        $sshs2 = "sshs2.php?section=" . $section . "&sy=" . $row['sy']. "&year=" . $row['year'];
        ?>


        <tr>
            <td>
                <a href="#" data-bs-toggle="modal" data-bs-target="#<?php echo $modalId; ?>">
                    <?php echo $yearSectionYear; ?>
                </a>
            </td>
        </tr>
        <div class="modal fade" id="<?php echo $modalId; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-white" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
                        <h5 class="modal-title" id="exampleModalLabel">CHOOSE DATA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p><b>JHS FORMAT CONSOLIDATED GRADES</b></p>
                        <ul>
                            <li><a href="<?php echo $quarter1jhs; ?>" target="_blank">Quarter 1</a></li>
                            <li><a href="<?php echo $quarter2jhs; ?>" target="_blank">Quarter 2</a></li>
                            <li><a href="<?php echo $quarter3jhs; ?>" target="_blank">Quarter 3</a></li>
                            <li><a href="<?php echo $quarter4jhs; ?>" target="_blank">Quarter 4</a></li>
                        </ul>
                        <p><b>SHS FORMAT CONSOLIDATED GRADES</b></p>
                        <ul>
                            <li><a href="<?php echo $quarter1shs; ?>" target="_blank">Quarter 1</a></li>
                            <li><a href="<?php echo $quarter2shs; ?>" target="_blank">Quarter 2</a></li>
                            <li><a href="<?php echo $quarter3shs; ?>" target="_blank">Quarter 3</a></li>
                            <li><a href="<?php echo $quarter4shs; ?>" target="_blank">Quarter 4</a></li>
                            <li><a href="<?php echo $sshs1; ?>" target="_blank">Semester 1</a></li>
                            <li><a href="<?php echo $sshs2; ?>" target="_blank">Semester 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
    $conn->close();
    ?>
</tbody>
</table>

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
                                                          
