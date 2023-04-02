<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
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
  height: 100%;
}

body {
  background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);
  background-size: cover;
  background-repeat: no-repeat;
}


    .container {
 
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

}

.container form {
	width: 1030px;
	padding: 20px;
	border-radius: 10px;

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
    position: fixed;
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
  animation: fadeIn 0.20s ease-in-out;
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
  animation: slideIn 1s ease-in-out;
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


    </style>
</head>
<body>

<div class="header" id="myHeader">
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
              

</div>   <?php
require "./php/db_conn.php";

// Define number of results per page
$results_per_page = 4;

// Determine current page number
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// Calculate the starting row number for the current page
$start_row = ($page - 1) * $results_per_page;

// Construct the WHERE clause for the search query
$where_clause = "";
if (isset($_GET['submit']) && !empty($_GET['search_query'])) {
  $search_query = $_GET['search_query'];
  $where_clause = "WHERE name LIKE '%$search_query%' OR username LIKE '%$search_query%'";
}

// Query to retrieve the total number of rows
$count_query = "SELECT COUNT(*) FROM users $where_clause";
$count_result = mysqli_query($conn, $count_query);
$count_row = mysqli_fetch_row($count_result);
$total_results = $count_row[0];

// Query to retrieve the results for the current page
$query = "SELECT * FROM users $where_clause ORDER BY status DESC, name ASC LIMIT $start_row, $results_per_page";

$result = mysqli_query($conn, $query);

// Calculate total number of pages
$total_pages = ceil($total_results / $results_per_page);
?>
<div class="text text-center">
  
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php echo $_GET['success']; ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
      keyboard: false
    });
    successModal.show();
  </script>
<?php } ?>

<div class="d-flex text-start">
  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET" class="w-100" id="search-form">
<a class="link-primary" href="create.php" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Add new user" style="display: inline-block; margin-right: 10px;">
  <img src="img/user.png" alt="Description of image" style="width: 25px;" class="img-fluid">
</a>
<script>
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
tooltipTriggerList.map((tooltipTriggerEl) => {
  new bootstrap.Tooltip(tooltipTriggerEl, {
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    delay: { show: 100, hide: 100 }
  })
})

</script>

<input type="text" name="search_query" id="search_query" placeholder="Search User Name" class=" form-control-sm bg-white text-black border-1" style="display: inline-block; width: 200px; outline: none;" onfocus="this.style.boxShadow='0 0 0 0.25rem rgba(255, 255, 255, 0.25)';" onblur="this.style.boxShadow='none';">
<button type="submit" name="submit" class="btn btn-link">
<img src="img/find.png" alt="Description of image" style="width: 30px;" class="img-fluid">
</button>

</form>
<img style="width:50px;" src="img/msu.png" class="img-fluid rotate-on-hover" alt="MSU-MSAT LOGO">

&nbsp;&nbsp;

</div>
<br>
<table class="table table-bordered mb-25">
  
  <thead >
  <tr class="  text-white" style=" background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);">


      <th hidden>Username</th>

      <th colspan="" class=""></th>
      <th class="text-center">Name(s)</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody id="table-body">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>

<td hidden class=""><?php echo $row["username"]; ?></td>


          <td class="" style="background-color: ;">

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
        <div class="modal-header text-white"  style=" background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);">
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
         <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>"><div class="text text-center text-danger">WARNING! Actions cannot be undone! </div></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p> <b></b>
             
               <br> Are you sure you want to delete <br> <b> <?php echo $row['name']; ?> Account</b>

            </p>
            <form class="delete" action="delete_user.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
               <div class="mb-3">
                  <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
                  <input type="password" class="form-control" placeholder="input password" id="password" name="password" required>
               </div>
               <button type="submit" class="btn btn-danger" name="delete">Delete</button>
            </form>
         </div>
      </div>
   </div>
</div>
      </td>





      <td class="left-align " style="width: 60%;">      <a type="button" class="btn" data-bs-toggle="modal" 
     data-bs-target="#exampleModal<?php echo $row['id']; ?>"
     style="border: none; background-color:transparent; outline: none;" title="View Info">
<?php echo $row["name"]; ?>  </a></td>
    
      <td style="text-align: center; vertical-align: middle;">
      
            <?php
// Assume that $row is an associative array that contains a 'status' and an 'id' key
$status = $row['status'];
$color = ($status == 1) ? 'primary' : 'dark';


$id = $row['id'];
?>

<button type="button" class="btn btn-sm text-center btn-<?php echo $color ?> rounded-pill" data-bs-toggle="modal" data-bs-target="#statusModal<?php echo $id ?>" style="border-radius: 100%; width: 5px; height: 18px;"></button>

<!-- Add this modal at the end of the page -->
<div class="modal fade" id="statusModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="statusModalLabel<?php echo $row['id'] ?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-light text-black">
        <h5 class="modal-title text-center" id="statusModalLabel<?php echo $row['id'] ?>">Status Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="card">
        <div class="card-header bg-light">
          Set status for: <b><?php echo $row['name'] ?></b>
        </div>

        <form method="post" action="update_status.php">
          <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
          <div class="btn-group btn-group-custom" role="group" aria-label="Status">
            <button type="submit" name="status" value="1" class="btn btn-outline-success">Activate</button>
            <button type="submit" name="status" value="0" class="btn btn-outline-secondary">Deactivate</button>
            <p><br></p>
          </div>
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
    
<a href="users.php" class="btn">    <img style="width:30px;" src="img/refresh.png" class="img-fluid" alt="Description of image"><b>

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
<div class="text-center">
  <?php
  // Add "Previous" button if not on the first page
  if ($page > 1) {
    $prev_page = $page - 1;
    echo "<a href='?page=$prev_page' class='btn'>Previous</a>";
  }

  // Add page numbers
  for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
      echo "<a href='?page=$i' class='btn'><strong>$i</strong></a>"; // wrap the current page number in a strong tag
    } else {
      echo "<a href='?page=$i' class='btn'>$i</a>";
    }
  }

  // Add "Next" button if not on the last page
  if ($page < $total_pages) {
    $next_page = $page + 1;
    echo "<a href='?page=$next_page' class='btn'>Next</a>";
  }
  ?>
</div>



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