<?php 

   session_start();
   include "../php/db_conn.php";
   include "php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    

    .fade-in {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

html, body {
  height:100%;
}

body {
  background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);
  background-size: cover;
  background-repeat: no-repeat;
}


.table-scrollable{
  height: 250px;
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
  width:400px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  /* other styles */
}


.container form {
	width: 800px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
  background-color:  white;
  width:100%;
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
  .btn-primary:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.btn-danger:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.link-primary {

  padding:10px;
}
input{


  border-radius: 10px;
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

<br>
<br>
<!-- TITLE HERE -->
<div class="container">



       


<form>

<?php if (mysqli_num_rows($result)) { ?>
          

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           
  <form class="" method="get">
  <br>
    <div class="input-group mb-3 form text-center" >

      <a class="link-primary" href="create.php" display-40>
     
        <button type="button" class="btn btn-outline-secondary border-0 p-0 text-center" id="create-button">
          <img src="img/add.gif" alt="search-icon" class="btn-icon" style="width:25px;">
        </button>
      </a>

 
 
  <input type="text" class="form-control" name="search"  placeholder="subjectname" aria-label="Username" aria-describedby="basic-addon1" >

<!--
      <input type="text" class="form-control" name="search" placeholder="Search subjects..." >
             -->
      &nbsp;&nbsp;
      <a class="link-primary btn-outline-secondary border-0 p-0" type="submit" id="search-button text-center">
        <img src="img/search.gif" alt="search-icon" class="btn-icon" style="width:25px;">
             </a>
    </div>



    
    <?php
require "./php/db_conn.php";
$teacherid = $_SESSION['username'];
$subjectgrouphead = $_SESSION["id"];
$search_keyword = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT *FROM subjects ";
if (!empty($search_keyword)) {
  $query .= " WHERE subjectname LIKE '%" . mysqli_real_escape_string($conn, $search_keyword) . "%'";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  $results_per_page = 5;
  $total_results = mysqli_num_rows($result);
  $total_pages = ceil($total_results / $results_per_page);

  $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
  if ($current_page < 1 || $current_page > $total_pages) {
    $current_page = 1;
  }

  $offset = ($current_page - 1) * $results_per_page;
  $query .= " LIMIT $offset, $results_per_page";
  $result = mysqli_query($conn, $query);

  // Display the table
  ?>
  <div class="table-responsive">
<div class="table-scrollable">
    <table class="table table-bordered">
      <thead class="tetxt-white" style="  color:white;
      
      background-image: linear-gradient(to right, #f83600 0%,  #f83600 100%);">
        <tr>
          <th hidden scope="col">Subject ID</th>
          <th scope="col">Subject Name</th>
          <th hidden scope="col">Subject Teacher Username</th>
          <th class="text-center" scope="col" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($Row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td hidden><?php echo $Row["subjectid"]; ?></td>
            <td><?php echo $Row["subjectname"]; ?></td>
            <td hidden><?php echo $Row["teacherid"]; ?></td>
            <td class="text-center">
     

              <a href="update.php?id=<?php echo $Row['id']; ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">

<img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
</b></a>

<a hidden type="button" class="btn" data-bs-toggle="modal" 
data-bs-target="#deleteModal<?php echo $Row['id']; ?>"
style="border: none; background-color:transparent; outline: none;" title="Delete">

<img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image"><b>
</a>

















<!--

              <a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?php echo $Row['id']; ?>');">DISCARD</a>
            
        -->
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </div>
  <?php
  // Add the page buttons for all the available pages
  if ($total_pages > 1) {
  ?>
    <div class="d-flex justify-content-center">
      <nav aria-label="Page navigation example">
        <ul class="pagination">

          <?php
          $pages_to_show = 5;
          $pages_start = max($current_page - floor($pages_to_show / 2), 1);
          $pages_end = min($pages_start + $pages_to_show - 1, $total_pages);

          if ($current_page > 1) {
          ?>
            <li class="page-item">
              <a class="page-link" href="?page=<?php echo ($current_page - 1); ?>&search=<?php echo $search_keyword; ?>" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
          <?php
          }

          for ($i = $pages_start; $i <= $pages_end; $i++) {
          ?>
            <li class="page-item <?php echo ($i ==$current_page) ? 'active' : ''; ?>">
<a class="page-link" href="?page=<?php echo $i; ?>&search=<?php echo $search_keyword; ?>"><?php echo $i; ?></a>
</li>
<?php
}
if ($current_page < $total_pages) {
  ?>
    <li class="page-item">
      <a class="page-link" href="?page=<?php echo ($current_page + 1); ?>&search=<?php echo $search_keyword; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  <?php
  }
  ?>
</ul>
</nav>
</div>
<?php
  }
} else {
  echo "<p>No subjects found</p>";
}
             }
            }
          }
?>
  </form>



 

</div>

       







    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
