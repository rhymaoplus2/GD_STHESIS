<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head><title>Section List</title>
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
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  
}

.container form {
	width:auto;
	padding: 20px;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
}
.box {
	width: auto;
}
.container table {
	padding: 20px;
	border-radius: 10px;
  border:10px;
  background-color: white;
  width : auto;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  background-color: white;
  border-radius: 30px;
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
  .pagination .page-link {
  color: #fff !important;
  background-color: #333 !important;
  border-color: #333 !important;
}

.pagination .page-item.active .page-link {
  background-color: #000 !important;
  border-color: #000 !important;
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


  </style>
</head>

<body>


<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<div class="container" >
  
		<div class="box">
      
    <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
       </div>
    
  
 
    <?php if (isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
        <?php echo $_GET['success']; ?>
      </div>
    <?php } ?>
    <?php if (mysqli_num_rows($result)) { ?>
    <div class="content">

  
 
      <div class="border text-center">
      <div class="head text-center" style="box-shadow: 2px 2px 4px  width: 105%;">
  <b>Assign a subject teacher for each <br> "Section"</b>
</div>

<br>
        <div class="d-flex justify-content-center">
          
   
          <table class="table table-bordered">
            
       

            <?php
require "./php/db_conn.php";

// Number of results to show per page
$results_per_page = 5;

// Query to get total number of results
$query = "SELECT COUNT(*) AS total_results FROM section";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$total_results = $row['total_results'];

// Calculate total number of pages
$total_pages = ceil($total_results / $results_per_page);

// Check if current page is set, otherwise set it to the first page
if (!isset($_GET['page'])) {
  $current_page = 1;
} else {
  $current_page = $_GET['page'];
}

// Calculate the starting and ending indices of the results to display on the current page
$start_index = ($current_page - 1) * $results_per_page;
$end_index = $start_index + $results_per_page;

// Query to get results for the current page
$query = "SELECT name FROM section LIMIT $start_index, $results_per_page";
$result = mysqli_query($conn, $query);

// Display results in table
?>

<table class="table table-bordered">

  <thead>
    <tr>

      <th scope="col">Section Name</th>
      <th scope="col">Assign To</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      ?>
      <tr>
        <td class="text-center"><b><?php echo $row["name"]; ?></b></td>
        <td>
        <button type="button" class="btn btn-dark text-truncate" data-bs-toggle="modal" data-bs-target="#assignModal-<?php echo $row['name']; ?>">
  Assign To
</button>


          <div class="modal fade" id="assignModal-<?php echo $row['name']; ?>" tabindex="-1" aria-labelledby="assignModalLabel-<?php echo $row['name']; ?>" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="assignModalLabel-<?php echo $row['name']; ?>">Assign a Subject Teacher to - <?php echo $row["name"]; ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <ul class="list-group">
                    <?php
                    $query2 = "SELECT name FROM users";
                    $result2 = mysqli_query($conn, $query2);

                    while ($row2 = mysqli_fetch_assoc($result2)) {
                      ?>
                      <li class="list-group-item">
                        <a href="assign_section.php?section_name=<?php echo $row['name']; ?>&user_name=<?php echo $row2['name']; ?>"><?php echo $row2["name"]; ?></a>
                      </li>
                    <?php
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </td>
      </tr>
    <?php
    }
  }
}

    ?>
  </tbody>
  
</table>




</div>

<div class="d-flex justify-content-center mt-3">
  &nbsp;
  &nbsp;&nbsp;
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <?php if ($current_page > 1): ?>
        <li class="page-item">
          <a class="page-link btn-dark" href="?page=<?php echo $current_page - 1; ?>" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
          </a>
        </li>
      <?php endif; ?>

      <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <?php if ($i == $current_page): ?>
          <li class="page-item active" aria-current="page">
            <span class="page-link"><?php echo $i; ?><span class="visually-hidden">(current)</span></span>
          </li>
        <?php else: ?>
          <li class="page-item"><a class="page-link btn-dark" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endif; ?>
      <?php endfor; ?>

      <?php if ($current_page < $total_pages): ?>
        <li class="page-item">
          <a class="page-link btn-dark" href="?page=<?php echo $current_page + 1; ?>" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
          </a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>
</div>


</div>



<br>
<br>




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

</script>
</body>
</html>
<?php 

  
                                                          
