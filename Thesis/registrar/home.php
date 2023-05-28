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
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );


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
      <div class="modal-header text-white" style="
      
      background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
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
    <!-- Image -->
<img id="image1" class="about" src="img/axx.gif" class="img-fluid" alt="Image 1" style="width:90%; cursor:pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">

<!-- Bootstrap Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style=" 
      
      background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );
">
        <h5 class="modal-title" id="exampleModalLabel">Account</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-left">
      




 
    <?php
   include "./php/db_conn.php";
   $name = $_SESSION['name'];

      $sql = "SELECT * FROM users where name = '$name'";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "Name<br><b> " . $row["name"] . "</b>";
          $expirationDate = strtotime($row["xp"] . ' +3 days');
          $currentDate = time();
          $timeLeft = $expirationDate - $currentDate;
          
          $hoursLeft = floor($timeLeft / 3600);
          $secondsLeft = $timeLeft % 60;
          
          echo "<hr>Account Created<br><b>" . $row["xp"] . "</b>";
          echo "<br>Account Expiring in:<br><b><span id='countdown'></span></b>";
          
          echo "<script>
              function updateCountdown() {
                  var expirationDate = new Date('" . date('Y-m-d H:i:s', $expirationDate) . "');
                  var currentDate = new Date();
                  var timeLeft = expirationDate.getTime() - currentDate.getTime();
          
                  var hoursLeft = Math.floor(timeLeft / (1000 * 60 * 60));
                  var secondsLeft = Math.floor((timeLeft % (1000 * 60)) / 1000);
          
                  document.getElementById('countdown').textContent = hoursLeft + ' hours and ' + secondsLeft + ' seconds';
          
                  if (timeLeft <= 0) {
                      clearInterval(countdownTimer);
                      document.getElementById('countdown').textContent = 'Expired';
                  }
              }
          
              var countdownTimer = setInterval(updateCountdown, 1000);
          </script>";
          
        }
      } else {
        echo "";
      }
    ?>





      </div>
      <div class="modal-footer">
    
      </div>
    </div>
    </div>
    </div>
    </div>
  

    <div class="col-md-6 mb-3">
        <img id="image1" class="about" src="img/terms.gif" class="img-fluid" alt="Image 1" style="width:90%; cursor:pointer;" data-bs-toggle="modal" data-bs-target="#guide">

<div class="modal fade " id="guide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" >
      <div class="modal-header" style="
      
       
      background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );

">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-start" >
      <b>TERMS AND CONDITIONS FOR USING THE 
        <br>MSU-MSAT HIGH SCHOOL GRADE REPORTING AND RECORDING SYSTEM</b>
<br>
<br>

<span clas="text-center">
By using the MSU-MSAT High School Grade Reporting and Recording System, you agree to be bound by the following terms and conditions:
<br>
<br>
<b> 1.&nbsp;&nbsp;</b> The MSU-MSAT High School Grade Reporting and Recording System is provided by MSU-MSAT for the sole purpose of recording and reporting grades for high school students.
<br>
<b> 2.&nbsp;&nbsp;</b> The MSU-MSAT High School Grade Reporting and Recording System is protected by copyright and other intellectual property laws. You may not copy, reproduce, distribute, or modify any part of the system without the prior written consent of MSU-MSAT.
<br>
<b> 3.&nbsp;&nbsp;</b> The MSU-MSAT High School Grade Reporting and Recording System is provided "as is" and without warranties of any kind, whether express or implied. MSU-MSAT does not guarantee that the system will be error-free or that it will meet your specific requirements.
<br>
<b> 4.&nbsp;&nbsp;</b> You are solely responsible for ensuring that your use of the MSU-MSAT High School Grade Reporting and Recording System complies with all applicable laws, rules, and regulations.
<br>
<b> 5.&nbsp;&nbsp;</b> MSU-MSAT reserves the right to modify, suspend, or discontinue the MSU-MSAT High School Grade Reporting and Recording System at any time, with or without notice to you.
<br>
<b> 6.&nbsp;&nbsp;</b> MSU-MSAT may terminate your access to the MSU-MSAT High School Grade Reporting and Recording System at any time if you violate these terms and conditions.
<br>
<b> 7.&nbsp;&nbsp;</b> MSU-MSAT will not be liable to you or any third party for any damages arising out of your use of or inability to use the MSU-MSAT High School Grade Reporting and Recording System.
<br>
<b> 8.&nbsp;&nbsp;</b> These terms and conditions constitute the entire agreement between you and MSU-MSAT with respect to your use of the MSU-MSAT High School Grade Reporting and Recording System and supersede all prior or contemporaneous communications and proposals, whether oral or written.
<br>
<b> 9.&nbsp;&nbsp;</b> These terms and conditions shall be governed by and construed in accordance with the laws of the jurisdiction in which MSU-MSAT is located, without giving effect to any principles of conflicts of law.
<br>
<b> 10.&nbsp;</b> By using the MSU-MSAT High School Grade Reporting and Recording System, you acknowledge that you have read, understood, and agree to be bound by these terms and conditions. 



<br>
<br> If you do not agree to these terms and conditions, you may not use the MSU-MSAT High School Grade Reporting and Recording System.

  </div>
  <div class="modal-footer">

  </div>
</div>
  </div>
</div>

    </div>
        <div class="col-md-6 mb-3">
        <a href="guide.php" target="_blank">
  <img class="about" src="img/gay.gif" class="img-fluid" alt="Image 2" style="width:90%;">
</a>

        </div>
        <div class="col-md-6 mb-3">
        <a href="about.php" target="_blank">
          <img class="about" src="img/ab.gif" class="img-fluid" alt="Image 4" style="width:90%;">
    </a>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php

}


