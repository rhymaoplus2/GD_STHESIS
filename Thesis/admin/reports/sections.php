<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sections Grades</title>
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


.container {
	min-height: auto;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width:auto;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  background-color: white;
}
.box {
  width:auto;

}
.box2 {
  width:500px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  border-radius: 10px;
  height: 6 0px; 
  margin: 20px 0;
}
.container table {
  width:500px;
	padding: 20px;
	border-radius: 10px;
  border:10px;  

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
  .btn-icon {
  width: 2rem; /* or whatever size you want */
  height: auto; /* or whatever size you want */
  object-fit: contain;
  vertical-align: middle;
  margin-right: 0.5rem; /* or whatever margin you want */
}

#search-button {
  border: none;
  box-shadow: none;
  background-color: transparent;
}

#search-button:hover img {
  transform: scale(1.2);
}

#search-button img {
  transition: transform 0.2s ease-in-out;
}

#create-button {
  background-color: transparent;
  color: #343a40;
  font-weight: bold;
  transition: transform 0.2s ease-in-out;
}

#create-button:hover {
  background-color: transparent;
  color: #007bff;
  transform: scale(1.05);
}

#create-button .btn-icon {
  max-height: 5rem;
  vertical-align: middle;
  transition: transform 0.2s ease-in-out;
}

#create-button:hover .btn-icon {
  transform: scale(1.2);
}

a {
  text-decoration: none;
  color:black
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


<!-- TITLE HERE -->



<br>
        <div class=" container ">
       

<form>

<?php if (mysqli_num_rows($result)) { ?>
          

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           


           <div class="container mt-4">
     
           <div class="container text-center">
           <form method="get">
  <br>
  <div class="input-group mb-3 form text-center">
    <input type="text" class="form-control" name="search" placeholder="Search Section Name">
    <button class="btn btn-outline-secondary border-0 p-0" type="submit" id="search-button">
      <img src="img/search.gif" alt="search-icon" class="btn-icon">
    </button>
  </div>
</form>
</div>
<?php
require "./php/db_conn.php";

$search_keyword = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
$query = "SELECT * FROM section";

if (!empty($search_keyword)) {
  $query .= " WHERE name LIKE '%" . mysqli_real_escape_string($conn, $search_keyword) . "%'";
}

$query .= " ORDER BY grade";

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
    <table class="table table-bordered">
      <thead class="text-white"style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <tr>
    
          <th scope="col">Section Name</th>

        </tr>
      </thead>
      <tbody>
  <?php
  while ($Row = mysqli_fetch_assoc($result)) {
  ?>
    <tr>
    <td>
  <a href="#" data-bs-toggle="modal" data-bs-target="<?php 
    if($Row['grade'] >= 11) { 
      echo '#SHSmodal'.$Row['id']; 
    } else { 
      echo '#JHSmodal'.$Row['id']; 
    } ?>">
    <?php 
      $grade = sprintf("%02d", $Row["grade"]); // add leading zero for numbers less than 10
      echo $grade . " - " . $Row["name"]; // display grade and name separated by a space
    ?>
  </a>
</td>

<!-- Modal -->
<div class="modal fade" id="SHSmodal<?php echo $Row['id']; ?>" tabindex="-1" aria-labelledby="semesterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="semesterModalLabel">SHS Grades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">Select Semester to print for Grade: <b><?php echo $Row["grade"]; ?> - <?php echo $Row["name"]; ?></b></div>
        <ul class="list-group">
        <a href="sectiongradeshs1.php?name=<?php echo $Row['name']; ?>" class="list-group-item" target="_blank">FIRST</a>


          <li class="list-group-item">SECOND</li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="JHSmodal<?php echo $Row['id']; ?>" tabindex="-1" aria-labelledby="semesterModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="semesterModalLabel">JHS Grades</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">Select Quarter to print for Grade: <b><?php echo $Row["grade"]; ?> - <?php echo $Row["name"]; ?></b></div>
        <ul class="list-group">
          <li class="list-group-item">FIRST</li>
          <li class="list-group-item">SECOND</li>
          <li class="list-group-item">THIRD</li>
          <li class="list-group-item">FOURTH</li>
        </ul>
      </div>
    </div>
  </div>
</div>

    </tr>
  <?php
  }
  ?>
</tbody>

    </table>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
