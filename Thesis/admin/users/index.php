<?php 

   session_start();
   include "../php/db_conn.php";
   include "php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <link  href="js/bootstrap.min.css" rel="stylesheet">

  <style>
html, body {
  height:100%;
}

body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-size: cover;
  background-repeat: no-repeat;
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
  background: #888; /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}
    .container {
 
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}
.koko {
    width: 1030px;
    padding: 20px;
    border-radius: 30px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    display: inline-block;
}

.box {
	width: auto;
  height: 700px;

}
.container table {
	padding: 20px;
	border-radius: 10px;
	background-color: white;
  border:30px;
}
.border{
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:30px;
  background-color: white;
  max-width:900px;

  margin: 0 auto;

}

.custom-cursor {
			cursor: pointer;
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





.blink {
    animation: blinker 5s linear infinite;
}
@keyframes blinker {
    50% {
        opacity: 0;
    }
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
    position: sticky;
    top: 0;
    width: 100%;
  }
  
  .sticky + .content {
    padding-top: 102px;
  }
  .btn-group-custom {
  width: 100%;
  display: flex;
  justify-content: center;
}

.btn-group-custom button {
  /* optional styles for the buttons inside the group */
}

.link-primary:hover img {
  transform: scale(1.1);
}
.tooltip {
  background-color: #000;
  color: #fff;
  font-size: 12px;
  border-radius: 3px;
  padding: 5px;
}

.tooltip-arrow {
  border-bottom-color: #000;
}
a.btn {
  border: none !important;
  box-shadow: none !important;
  text-decoration: none;
}

.btn img {
    transition: transform 0.3s ease-in-out;
}

.btn:hover img {
    transform: scale(1.2);
}
button.btn-link:focus,
a.btn-link:focus {
    outline: none;
    box-shadow: none;
}
button.btn-link:hover img,
a.btn-link:hover img {
    transform: scale(1.2);
}
input:focus,
input:active {
    border-color: #333;
    box-shadow: none;
}

.btn:active {
  outline: none;
}
.left-align {
  text-align: left;
}
.uppercase {
    text-transform: uppercase;
  }
  .rotate-on-hover:hover {
  animation: rotate 1s;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
td.left-align a:hover {
    font-weight: bold;
}


.fade-in {
 
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.slide-in {
  animation: slideIn 0.6s ease-in-out;
  animation-fill-mode: forwards;
  animation-play-state: running;
}

@keyframes slideIn {
  0% {
    transform: translateX(-100%);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}
.status {
  background: transparent;
  border: none;
  transition: font-size 0.3s ease-in-out;
}

.status:hover {
  font-size: 1.2em; /* Change to the desired larger text size */
}

.btn-transparent {
  background-color: transparent;
  border-color: transparent;
  opacity: 0.8;
  color: black;
}

.btn-transparent:hover {
  color: white;
}
input[type="text"]:hover {
    border-width: 2px;
  }
  .form-container {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .rolling-div:hover::before,
.rolling-div:hover::after {
  animation: roll 1s ease-in-out infinite; /* use the roll animation when hovered */
}

@keyframes roll {
  0% {
    transform: rotate(45deg) translate(-50%, -50%);
    animation-timing-function: ease-out;
  }
  30% {
    transform: rotate(45deg) translate(50%, -50%) scaleY(0.8);
    animation-timing-function: ease-in;
  }
  40% {
    transform: rotate(45deg) translate(50%, -50%) scaleY(1.2);
    animation-timing-function: ease-out;
  }
  50% {
    transform: rotate(45deg) translate(-50%, -50%) scaleY(0.6);
    animation-timing-function: ease-in;
  }
  60% {
    transform: rotate(45deg) translate(-50%, -50%) scaleY(1.1);
    animation-timing-function: ease-out;
  }
  70% {
    transform: rotate(45deg) translate(50%, -50%) scaleY(0.9);
    animation-timing-function: ease-in;
  }
  80% {
    transform: rotate(45deg) translate(-50%, -50%) scaleY(1.05);
    animation-timing-function: ease-out;
  }
  90% {
    transform: rotate(45deg) translate(50%, -50%) scaleY(0.95);
    animation-timing-function: ease-in;
  }
  100% {
    transform: rotate(45deg) translate(-50%, -50%);
    animation-timing-function: ease-out;
  }
}

    </style>
</head>
<body>
 <!-- Logout Modal -->
 <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
                <h5 class="modal-title text-white" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="../img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" onclick="openBackupWindow()">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="header sticky-top" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<div class="fade-in">
  <script>
    const slideInDiv = document.querySelector('.slide-in');
const animationState = localStorage.getItem('slideInAnimationState');

if (animationState === 'played') {
  slideInDiv.style.animationPlayState = 'paused';
} else {
  slideInDiv.addEventListener('animationend', () => {
    slideInDiv.style.animationPlayState = 'paused';
    localStorage.setItem('slideInAnimationState', 'played');
  }, { once: true });
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
<br>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border text-center">
        <div class="link text-center">
</div>

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;  
             ?>      
             <div class="text text-center">
              

</div>  <?php
require "./php/db_conn.php";

// Calculate the starting row number for the current page

// Construct the WHERE clause for the search query
$where_clause = "";
if (isset($_GET['submit']) && !empty($_GET['search_query'])) {
  $search_query = strtolower($_GET['search_query']); // convert to lowercase
  $where_clause = "WHERE LOWER(name) LIKE '%$search_query%' 
                   OR LOWER(username) LIKE '%$search_query%' 
                   OR LOWER(role) LIKE '%$search_query%' 
                   OR LOWER(role2) LIKE '%$search_query%' 
                   OR LOWER(role3) LIKE '%$search_query%'";
}

// Query to retrieve the total number of rows
$count_query = "SELECT COUNT(*) FROM users $where_clause";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_row($count_result);
$total_results = $count_row[0];

$query = "SELECT * FROM users WHERE (role != 'admin' OR role2 != 'admin' OR role3 != 'admin') AND id 
!= '1' ORDER BY 
          CASE 
            WHEN status = 1 THEN 0 
            WHEN status = 0 THEN 1 
            WHEN status = 2 THEN 2 
            ELSE 3 
          END, name ASC";


$result = mysqli_query($conn, $query);
?>


<div class="text text-center">
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
          <h5 class="modal-title text-white" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-icon-color: white;"></button>
        </div>
        <div class="modal-body">
          <?php echo $_GET['success'];?>
        </div>
       
      </div>
    </div>
  </div>
<?php ?>


  </div>
  <script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
      keyboard: false
    });
    successModal.show();
  </script>
<?php } ?>

<div class="d-flex text-start">

<form class="koko"action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" class="w-100 d-flex align-items-center" id="search-form" style="position: relative;">

<div class="d-flex flex-grow-1 align-items-center">
  <a class="link-primary me-2" href="create.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add new user">
  <img src="img/add.gif" alt="Description of image" style="width: 35px;" class="img-fluid">
</a>

<div class="input-group">
  <input type="text" name="search_query" id="search_query" placeholder="Search Name...." class="form-control-sm bg-white text-black border-1" 
         style="outline: none; border-image: black; margin-right: 1px; padding: 5px;" 
         onfocus="this.style.boxShadow='0 0 0 0.25rem rgba(255, 255, 255, 0.25)'; showSuggestions();"
         onblur="this.style.boxShadow='none'; hideSuggestions();">
  <div class="input-group-append">
    <div class="dropdown">
      <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Suggestions</button>
      <ul class="dropdown-menu" id="suggestion-menu" style="width:100%">
        <li><a class="dropdown-item" href="#" onclick="selectSuggestion('Adviser')">Adviser</a></li>
        <li><a class="dropdown-item" href="#" onclick="selectSuggestion('Subject Teacher')">Subject Teacher</a></li>
        <li><a class="dropdown-item" href="#" onclick="selectSuggestion('Registrar Staff')">Registrar Staff</a></li>
      </ul>
    </div>
  </div>
  <button type="submit" name="submit" class="btn btn-link" style="padding: 5px;">
    <img src="img/serts.png" alt="Description of image" style="width: 20px;" class="img-fluid">
  </button>
  
<div class="text-center">
  <h6>Showing results for: <span id="search-query"></span></h6>
</div>

<script>
  const searchQueryElement = document.getElementById('search-query');
  const searchParams = new URLSearchParams(window.location.search);
  const query = searchParams.get('search_query');
  searchQueryElement.textContent = query;
</script>
</div>

<script>
function showSuggestions() {
  document.getElementById("suggestion-menu").classList.add("show");
}

function hideSuggestions() {
  document.getElementById("suggestion-menu").classList.remove("show");
}

function selectSuggestion(value) {
  document.getElementById("search_query").value = value;
  document.getElementById("myform").submit(); // replace "myform" with the ID of your form
}

</script>


 
</div>
</form>

<script>
  const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.map((tooltipTriggerEl) => {
    new bootstrap.Tooltip(tooltipTriggerEl, {
      template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
      delay: { show: 100, hide: 100 }
    })
  })

  const searchInput = document.getElementById("search_query");

  // Add event listener to input field
  searchInput.addEventListener("input", function() {
    // Save input value to local storage
    localStorage.setItem("searchValue", searchInput.value);
  });

  // Retrieve value from local storage and set input field value
  const savedValue = localStorage.getItem("searchValue");
  if (savedValue) {
    searchInput.value = savedValue;
  }
</script>


</div>

<hr>
<div class="table-scrollable">
<script>
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
<table class="table table-bordered mb-25">
  
  <thead class="sticky">
  <tr class="  text-white" style="   background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">


      <th hidden>Username</th>

      <th colspan="" class=""></th>
      <th class="text-center">Name(s)</th>
      <th>
     <!--  <button type="button" class="statu text-white" data-bs-toggle="modal" data-bs-target="#activatePauseAllModal" disabled>
  </button>
-->
  Status


<!-- Activate/Pause All Modal -->
<div class="modal fade" id="activatePauseAllModal" tabindex="-1" role="dialog" aria-labelledby="activatePauseAllModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style=" 
      
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
        <h5 class="modal-title" id="activatePauseAllModalLabel">Status update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-dark">
        
        <p>
        <h4>Do you want to allow or disallow all users to use the system?</h4>
          <br>
         
    

        </p>
      </div>
      <div class="modal-footer justify-content-center">
<!-- HTML button elements -->
<button type="button" class="btn btn-primary btn-transparent" id="activateAllBtn">Allow All</button>
<button type="button" class="btn btn-secondary btn-transparent" id="pauseAllBtn">Disallow All</button>



</div>

  </div>
</div>

<script>
// Add event listeners for Activate All and Pause All buttons
document.getElementById('activateAllBtn').addEventListener('click', function() {
  updateStatusOfAllUsers(1); // Update status of all users to 1 (activated)
});

document.getElementById('pauseAllBtn').addEventListener('click', function() {
  updateStatusOfAllUsers(0); // Update status of all users to 0 (paused)
});

// Function to update status of all users in the database
// Function to update status of all users in the database
function updateStatusOfAllUsers(status) {
  // Make an AJAX request to update the status of all users
  $.ajax({
    url: 'statusall.php', // Replace with your server-side script URL
    method: 'POST',
    data: {status: status},
    success: function(response) {
      // Handle success response
      window.location.href = "index.php?success=Status updated successfully!";
    },
    error: function(error) {
      // Handle error response
      console.error('Error updating status: ', error);
    }
  });
}

</script>


      </th>

    
    </tr>
  </thead>
  <tbody id="table-body">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td hidden>
        <li><div class="text-start uppercase"> <b> <?= $row['role'] ? $row['role'] : 'none' ?> </b></div></li>
<li><div class="text-start uppercase"> <b> <?= $row['role2'] ? $row['role2'] : 'none' ?> </b></div></li>
<li><div class="text-start uppercase"> <b> <?= $row['role3'] ? $row['role3'] : 'none' ?> </b></div></li>
      </td>
<td hidden class=""><?php echo $row["username"]; ?></td>


          <td class="" style="     background: #f2f2f2" >

  <!-- VIEW
  <a type="button" class="btn" data-bs-toggle="modal" 
     data-bs-target="#exampleModal<?php echo $row['id']; ?>"
     style="border: none; background-color:transparent; outline: none;" title="View Info">
    <img style="width:30px;" src="img/show.png" class="img-fluid" alt="Description of image">
  </a>
 -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
  >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white"  style="
        
        
        background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
          <h5 class="modal-title" id="exampleModalLabel"><b><?=$row['name']?></b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="form-group mb-3">
  <div class="text-start uppercase"><h6 class="text-danger"> Roles</h6></div>
  <ul>
  <li><div class="text-start uppercase"> <b> <?= $row['role'] ? $row['role'] : 'none' ?> </b></div></li>
<li><div class="text-start uppercase"> <b> <?= $row['role2'] ? $row['role2'] : 'none' ?> </b></div></li>
<li><div class="text-start uppercase"> <b> <?= $row['role3'] ? $row['role3'] : 'none' ?> </b></div></li>

</ul>
</div>


          <hr>
          <form action="n-view.php" method="post">
            <input type="text" name="id" value="<?=$row['id']?>" hidden>
          </form>
        </div>
      </div>
    </div>
  </div>


  
  <a href="update.php?id=<?php echo $row['id'] ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">
  <b>
    <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
  </b>
</a>


              
              <a href="generate.php?id=<?php echo $row['id'] ?>" class="btn" title="Generate"><b>
               <img style="width:30px;" src="img/generate.png" class="img-fluid" alt="Description of image">
              </b></a>
            <a href="addsub.php?id=<?php echo $row['id'] ?>" class="btn" title="Assign Subjects"><b>
            <img style="width:35px;" src="img/connect.png" class="img-fluid" alt="Description of image">
            </b></a>
  
            <a type="button" class="btn" data-bs-toggle="modal" 
  data-bs-target="#deleteModal<?php echo $row['id']; ?>"
  style="border: none; background-color:transparent; outline: none;" title="Delete">

            <img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image">
      </a>
             <div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
            <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p> <b></b>
             
               <br> Are you sure you want to delete <br> <b> <?php echo $row['name']; ?> Account?</b>

            </p>
            <form class="delete" action="delete_user.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <div class="mb-3">
                  <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
                  <input type="password" class="form-control" placeholder="input password" id="password" name="password" required>
               </div>
               <button type="submit" class="btn" name="delete">
               <img style="width:40px;" src="img/discard.png" class="img-fluid" alt="Description of image">



               </button>
            </form>
         </div>
      </div>
   </div>
</div>
      </td>





      <td class="left-align " style="width: 60%; background: #f2f2f2;">      <a type="button" class="btn" data-bs-toggle="modal" 
     data-bs-target="#exampleModal<?php echo $row['id']; ?>"
     style="border: none; background-color:transparent; outline: none;" title="View Info">
<?php echo $row["name"]; ?>  </a></td>
    

      <td style="text-align: center; vertical-align: middle; background: #f2f2f2;">
    <?php
    // Assume that $row is an associative array that contains a 'status' and an 'id' key
    $status = $row['status'];
    if ($status == 0) {
        $color = 'secondary';
    } elseif ($status == 1) {
        $color = 'primary';
    } elseif ($status == 2) {
        $color = 'danger';
    } else {
        // If status is none of the expected values, set default color to 'dark'
        $color = 'dark';
    }

    $id = $row['id'];
    ?>

<button type="button" class="btn btn-sm text-center btn-<?php echo $color ?> rounded-pill" data-bs-toggle="modal" data-bs-target="#statusModal<?php echo $id ?>" style="border-radius: 100%; width: 5px; height: 18px;"></button>

<!-- Add this modal at the end of the page -->
<div class="modal fade" id="statusModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="statusModalLabel<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light text-white" style=" 
      
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
        <h5 class="modal-title text-center" id="statusModalLabel<?php echo $row['id'] ?>">Status Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="card">
        <div class="card-header bg-light">
          Set status for: <b><?php echo $row['name'] ?></b>
        </div>
        <form method="post" action="update_status.php">
  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
  <br>
  <div class="btn-group btn-group-custom" role="group" aria-label="Status">
    <button type="submit" name="status" value="1" class="btn btn-outline-primary">Activate</button>
   <button type="submit" name="status" value="0" class="btn btn-outline-secondary">Deactivate</button>
   <p><br></p>
  </div>
  <br>
</form>

      </div>
    </div>
  </div>
</div>



          </td>
        </tr>
    <?php
      }
    } else {
    ?>
    
<a href="index.php" class="btn">    <img style="width:30px;" src="img/refresh.png" class="img-fluid" alt="Description of image"><b>

      <tr>
      <td class="text-start"colspan="4" ><h3><b><span class="blink text-danger text-center">The system cannot locate the user in the database.</span></b></h3>
    <br>
  
  What are the things you need to do?
<br>
1. Make sure you inputted the <b>correct spelling</b> of the user's name.
<br>
2. Make sure that the user is <b>registered in the database.</b>
<br><br>
If none of this works, contact the developer at: <b>reyrismilmao@gmail.com </b></td>




      </tr>
    <?php
    }
  }
}

    ?>
  </tbody>
  
</table>
</div>
<hr>




</form>

</div>
</div>
<br>
<br>
</div>

     
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>