<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
  
 
  html, body {
  height: 100%;
}


body {

  background-repeat: no-repeat;
}



  .container {
  width: auto;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  padding: 20px;

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

.img-fluid:hover {
  width: 40px; /* or any other desired size */
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

  .btn img {
    width: 30px;
    height: 30px;
  }


  #refresh-img {
  transition: all 0.2s;
}
.btn:hover img {
    transform: scale(1.2);
}
#refresh-img:hover {
  transform: scale(1.2);
}
.zoom:hover img {
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
  height: 350px;
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
.table-scrollable {
  overflow-y: scroll; /* Make the container scrollable */
}

.table-scrollable thead {
  position: sticky; /* Make the header sticky */
  top: 0; /* Position the header at the top */
  z-index: 1; /* Make the header stay on top of the rows */
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
a.btn:hover img {
    transform: scale(1.2);
}
#rolling-image {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  z-index: 9999; /* or any higher value than other elements on the page */
}
.about{

  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 20px;
}
.about img {
  transition: transform .3s ease;
}

.about img:hover {
  transform: scale(1.1);
}

.text{

  font-size: 30px;
  font-family: tahoma;
  color: white;

}
html, body {
  height: 100%;
}


body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-repeat: no-repeat;
}

.image-container {
  overflow: hidden;
}

.about {
  transition: transform 0.3s ease-out;
}

.about:hover {
  transform: scale(1.1);
}

  </style>
</head>

<body>
<style>
  #logoutModal2 {
    z-index: 9999;
  }
</style>

<div class="modal fade" id="logoutModal2" tabindex="-1" aria-labelledby="logoutModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
        <h5 class="modal-title" id="logoutModal2Label">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 
      <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" >
                </a>
            </div>
  </div>
</div>

</div>
<div class="header sticky-top">
  <?PHP include_once('header.php'); ?>
</div>


<?php
// Check if the button is clicked
if(isset($_POST['export_button'])) {
    // Connect to the database
    $conn = mysqli_connect('localhost', 'username', 'password', 'my_db');

    // Retrieve all table names
    $result = mysqli_query($conn, "SHOW TABLES");
    $tables = array();
    while ($row = mysqli_fetch_row($result)) {
        $tables[] = $row[0];
    }

    // Loop through the tables and retrieve data
    $sql = "";
    foreach ($tables as $table) {
        $result = mysqli_query($conn, "SELECT * FROM $table");
        $num_fields = mysqli_num_fields($result);

        $sql .= "DROP TABLE IF EXISTS $table;";
        $create_table_query = mysqli_query($conn, "SHOW CREATE TABLE $table");
        $create_table_row = mysqli_fetch_row($create_table_query);
        $sql .= "\n\n" . $create_table_row[1] . ";\n\n";

        for ($i = 0; $i < $num_fields; $i++) {
            while ($row = mysqli_fetch_row($result)) {
                $sql .= "INSERT INTO $table VALUES(";
                for ($j = 0; $j < $num_fields; $j++) {
                    $row[$j] = addslashes($row[$j]);
                    if (isset($row[$j])) {
                        $sql .= '"' . $row[$j] . '"';
                    } else {
                        $sql .= '""';
                    }
                    if ($j < ($num_fields - 1)) {
                        $sql .= ',';
                    }
                }
                $sql .= ");\n";
            }
        }
        $sql .= "\n\n\n";
    }

    // Save the SQL file
    $filename = 'my_db_backup_' . date('Y-m-d_H-i-s') . '.sql';
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"" . $filename . "\"");
    echo $sql;
    exit;
}
?>


<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog text-center">
    <div class="modal-content text-center">
      <div class="modal-header text-white text-center" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
        <h5 class="modal-title text-center" id="exampleModalLabel text-center">Welcome!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <b>MSU-MSAT High School<br>Grade Reporting and Recording System</b>
      </div>
      <div class="modal-footer">
        <i>User Logged in:</i> <b>Administrator</b>
      </div>
    </div>
  </div>
</div>

<script>
  // Check if the modal has been shown before
  var modalShown = localStorage.getItem('modalShown');

  if (!modalShown) {
    // Show the modal
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
      keyboard: false
    });
    myModal.show();

    // Store a flag indicating that the modal has been shown
    localStorage.setItem('modalShown', true);
  }
</script>


<div class="container">
  <div class="row align-items-center">
    <div class="col-md-6 mb-3">
      <span class="text mb-3">
       <b>MSU-MSAT High School Grade Reporting and Recording System
</b>  <div>
    <p id="date-time">
  


    </p>
    
  </div>

  <script>
    function updateDateTime() {
      // Create a new Date object and get the current date and time
      let now = new Date();

      // Format the date and time as a string
      let dateTimeString = now.toLocaleString();

      // Update the HTML element with the formatted date and time
      document.getElementById("date-time").textContent = dateTimeString;
    }

    // Call the updateDateTime function every second to update the date and time in real-time
    setInterval(updateDateTime, 1000);
  </script>

      </span>
    </div>
    <div class="col-md-6">
      <div class="row text-center">
      <div class="col-md-6 mb-3">
  <img class="about" src="img/bako.gif" class="img-fluid" alt="Image 1" style="width:90%;" onclick="openBackupWindow()">
</div>

<script>
function openBackupWindow() {
  window.location.href = "./backup/";
}
</script>

        <div class="col-md-6 mb-3">
        <a href="guide.php" target="_blank">
  <img class="about" src="img/gay.gif" class="img-fluid" alt="Image 2" style="width:90%;">
</a>

        </div>

        <div class="col-md-6 mb-3">
        <a href="terms.php" target="_blank">
          <img class="about" src="img/terms.gif" class="img-fluid" alt="Image 3" style="width:90%;">
          </a>
        </div>
    
        <div class="col-md-6 mb-3">
          <img class="about" src="img/ab.gif" class="img-fluid" alt="Image 4" style="width:90%;">
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php

}


