<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
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
  </style>
</head>

<body>


<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<br>


<div class="container" >
<?php if (isset($_GET['success'])) { ?>
  <div class="modal" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white"  style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
          <h5 class="modal-title" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><?php echo $_GET['success']; ?></p>
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


        
        <div class="border">
      
<?php
require "./php/db_conn.php";

$comment = "";
$where_clause = "1";

if(isset($_POST['submit'])) {
  $section = $_POST['section'];
  $grade = $_POST['grade'];
  $trackstrand = $_POST['trackstrand'];
  $syear = $_POST['syear'];
  $comment = "Showing results for ";
  if(empty($section) && empty($grade) && empty($trackstrand) && empty($syear)) {
    $comment = "Showing results for All";
  }
  if(!empty($section) && !empty($grade) && !empty($trackstrand) && !empty($syear)) {
    $comment .= "Grade $grade - Section $section - Track/Strand $trackstrand - School Year $syear";
    $where_clause = "section = '$section' AND grade = '$grade' AND trackstrand = '$trackstrand' AND syear = '$syear'";
  } else {
    if(!empty($section)) {
      $comment .= "Section $section";
      $where_clause .= " AND section = '$section'";
    }
    if(!empty($grade)) {
      $comment .= !empty($comment) ? " - " : "";
      $comment .= "Grade $grade";
      $where_clause .= " AND grade = '$grade'";
    }
    if(!empty($trackstrand)) {
      $comment .= !empty($comment) ? " - " : "";
      $comment .= "Track/Strand $trackstrand";
      $where_clause .= " AND trackstrand = '$trackstrand'";
    }
    if(!empty($syear)) {
      $comment .= !empty($comment) ? " - " : "";
      $comment .= "School Year $syear";
      $where_clause .= " AND syear = '$syear'";
    }
    if(empty($comment)) {
      $comment .= "All";
    }

  }
}


$query = "SELECT * FROM students WHERE $where_clause";
$result = mysqli_query($conn, $query);
?>



<form method="post" class=" formx text-center" style="">
  <?php
    if(!empty($comment)) {
      echo "<p><b>$comment</b>  </p>";
    }
  ?>
<a href="teacher_create.php" class="btn btn-transparent p-0 mb-3">
  <b></b>
  <img src="img/add.gif" alt="Image" title="Add New Student" width="30" height="auto">
</a>


  &nbsp;&nbsp;&nbsp;
  <label for="section">Section:</label>
  <select id="section" name="section">
    <option value="">All</option>
    <?php
      require "./php/db_conn.php";
      $query = "SELECT DISTINCT section FROM students";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['section'] . "'>" . $row['section'] . "</option>";
      }
    ?>
  </select>
  &nbsp;&nbsp;&nbsp;  
  <label for="grade">Grade:</label>
  <select id="grade" name="grade">
    <option value="">All</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="11">11</option>
    <option value="12">12</option>
  </select>
  &nbsp;&nbsp;&nbsp;

  <label for="strand">Track/Strand:</label>
  <select id="trackstrand" name="trackstrand">
    <option value="">All</option>
    <?php
      require "./php/db_conn.php";
      $query = "SELECT DISTINCT name FROM trackstrand";
      $result = mysqli_query($conn, $query);

      while($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>
  &nbsp;&nbsp;&nbsp;  
  <label for="syear">School Years:</label>
<select id="syear" name="syear">
  <option value="">All</option>
  <?php
require "./php/db_conn.php";
$query = "SELECT syear FROM year ORDER BY syear";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
  echo "<option value='" . $row['syear'] . "'>" . $row['syear'] . "</option>";
}

  ?>
</select>
&nbsp;&nbsp;&nbsp;
  <button class="btn btn-transparent p-0 mb-3" type="submit" name="submit" title="Sort">
  <img id="refresh-img" src="img/eye2.gif" alt="Image" title="Add New Student" width="30" height="auto">
</a>

  </button>

  <script>
    var refreshImg = document.getElementById("refresh-img");

    refreshImg.addEventListener("click", function() {
      refreshImg.style.transform = "scale(1.2) rotate(360deg)";
      setTimeout(function() {
        refreshImg.style.transform = "";
      }, 2000);
    });
  </script>
  &nbsp;&nbsp;&nbsp;
  <input type="text" name="search" placeholder="Search...">
  &nbsp;&nbsp;
  <button type="submit" class="btn btn-transparent p-0">
  <img id="refresh-img" src="img/search.gif" alt="Image" title="Search" width="30" height="30">
</button>

</form>

<br>
<div class="fade-in">
<div class="table-scrollable">
  <table class="table table-bordered">
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

  <thead class="text-white"style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);;">
    <tr>
      <th scope="col">Name</th>
  
      <th class="text-center" scope="col">Section</th>
      <th hidden class="text-center" scope="col">Section</th>
      <th scope="col" colspan="3" class="text-center"></th>
    </tr>
  </thead>
  <tbody>

  <?php
require "./php/db_conn.php";

// Set the number of resul
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
  $section = isset($_POST['section']) ? $_POST['section'] : '';
  $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
  $trackstrand = isset($_POST['trackstrand']) ? $_POST['trackstrand'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  $syear = isset($_POST['syear']) ? $_POST['syear'] : '';
  
  $where_clause = '';
  if (!empty($section)) {
    $where_clause .= "section = '$section'";
  }
  if (!empty($grade)) {
    if (!empty($where_clause)) {
      $where_clause .= ' AND ';
    }
    $where_clause .= "grade = '$grade'";
  }
  
  if (!empty($trackstrand)) {
    if (!empty($where_clause)) {
      $where_clause .= ' AND ';
    }
    $where_clause .= "trackstrand = '$trackstrand'";
  }

  if (!empty($syear)) {
    if (!empty($where_clause)) {
      $where_clause .= ' AND ';
    }
    $where_clause .= "syear = '$syear'";
  }

  if (!empty($search)) {
    if (!empty($where_clause)) {
      $where_clause .= ' AND ';
    }
    $where_clause .= "(lastname LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR section LIKE '%$search%' OR trackstrand LIKE '%$search%' OR lrnnumber LIKE '%$search%' OR id LIKE '%$search%')";
  }

  if (!empty($where_clause)) {
    $where_clause = "WHERE $where_clause";
  }

  // Get the total number of results
  $count_query = "SELECT COUNT(*) as count FROM students $where_clause";
  $count_result = mysqli_query($conn, $count_query);
  $count_row = mysqli_fetch_assoc($count_result);
  $total_results = $count_row['count'];


  // Get the results for the current page
  $query = "SELECT * FROM students $where_clause ORDER BY lastname ";
  $result = mysqli_query($conn, $query);

  while ($Row = mysqli_fetch_assoc($result)) {
?>

           <tr style="     background: #f2f2f2" >
           <td hidden><?php echo $Row["id"]; ?></td>
       
                
           <td style="width:50%;">    <a href="view.php?id=<?=$Row['id']?>" 
			      	     class=" "><?php echo $Row["lastname"].', '.$Row["firstname"].' '.substr($Row["middlename"], 0, 1).'.'; ?>
                   </a></td>
        
          <td class="text-center"><?php echo $Row["section"]; ?></td>
          <td hidden class="text-center"><?php echo $Row["section"]; ?></td>
          <td hidden><?php echo $Row["grade"]; ?></td>
          <td hidden><?php echo $Row["trackstrand"]; ?></td>
  
     <td class="text-center">
      
     <a href="update.php?id=<?php echo $Row['id'] ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">

                   <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
                   </b></a>
                   <a type="button" class="btn" data-bs-toggle="modal" 
  data-bs-target="#deleteModal<?php echo $Row['id']; ?>"
  style="border: none; background-color:transparent; outline: none;" title="Delete">

		    <img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image"><b>
  </a>
             
             <div class="modal fade" id="deleteModal<?php echo $Row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
            <h5 class="modal-title" id="deleteModalLabel<?php echo $Row['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p> <b></b>
             
               <br> Are you sure you want to delete <br> <b> <?php echo $Row['lastname']; ?> Account?</b>

  </p>
   <form class="delete-form" action="delete.php" method="POST">
  <input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
  <div class="mb-3">
    <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
    <input type="password" class="form-control" placeholder="input password" id="password" name="password" required>
  </div>
  <button type="submit" class="btns" name="delete" style="background-color: transparent; border: none;">
  <img style="height:40px;" src="img/discard.png" class="img-fluid" alt="Description of image">
</button>

</form>

      </div>
   </div>
</div>
     </td>
			    </tr>
     












       
            <?php }
 }







      }



 ?>




         </tbody>
  </table>
    </div>

         </div>
   </div>
         </div>
         

</div>
   </div>
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


<script>
  

</body>
</html>
<?php 

  
                                                          
