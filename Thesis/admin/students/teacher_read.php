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
  


  .container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
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
    <div class="content">

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
        
        <div class="border">
       


        <div class="d-flex justify-content-center">

</div>
<?php
require "./php/db_conn.php";

$comment = "";
$where_clause = "1";

if(isset($_POST['submit'])) {
  $section = $_POST['section'];
  $grade = $_POST['grade'];
  $trackstrand = $_POST['trackstrand'];
  $comment = "Showing results for ";

  if(!empty($section) && !empty($grade) && !empty($trackstrand)) {
    $comment .= "Grade $grade - Section $section - Track/Strand $trackstrand";
    $where_clause = "section = '$section' AND grade = '$grade' AND trackstrand = '$trackstrand'";
  } elseif(!empty($section) && !empty($grade)) {
    $comment .= "Grade $grade - Section $section";
    $where_clause = "section = '$section' AND grade = '$grade'";
  } elseif(!empty($section) && !empty($trackstrand)) {
    $comment .= "Section $section - Track/Strand $trackstrand";
    $where_clause = "section = '$section' AND trackstrand = '$trackstrand'";
  } elseif(!empty($grade) && !empty($trackstrand)) {
    $comment .= "Grade $grade - Track/Strand $trackstrand";
    $where_clause = "grade = '$grade' AND trackstrand = '$trackstrand'";
  } elseif(!empty($section)) {
    $comment .= "Section $section";
    $where_clause = "section = '$section'";
  } elseif(!empty($grade)) {
    $comment .= "Grade $grade";
    $where_clause = "grade = '$grade'";
  } elseif(!empty($trackstrand)) {
    $comment .= "Track/Strand $trackstrand";
    $where_clause = "trackstrand = '$trackstrand'";
  } else {
    $comment .= "All";
    $where_clause = "1";
  }
}


$query = "SELECT * FROM students WHERE $where_clause";
$result = mysqli_query($conn, $query);
?>

<form method="post" class="text-center">
  <?php
    if(!empty($comment)) {
      echo "<p><b>$comment</b>  </p>";
    }
  ?>
<a href="teacher_create.php" class="btn btn-transparent p-0 mb-3">
  <b></b>
  <img id="refresh-img" src="img/add.gif" alt="Image" title="Add New Student" width="30" height="auto">
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

  <button class="btn btn-transparent p-0" type="submit" name="submit" title="Sort">
    <img id="refresh-img" src="img/refresh.png" alt="Image" width="50" height="50">
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



<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th class="text-center" scope="col">M.I.</th>
      <th class="text-center" scope="col">LRN No.</th>
      <th hidden class="text-center" scope="col">Section</th>
      <th scope="col" colspan="3" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php
 require "./php/db_conn.php";

 if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
  $section = isset($_POST['section']) ? $_POST['section'] : '';
  $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
  $trackstrand = isset($_POST['trackstrand']) ? $_POST['trackstrand'] : '';
  $search = isset($_POST['search']) ? $_POST['search'] : '';
  
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

  if (!empty($search)) {
    if (!empty($where_clause)) {
      $where_clause .= ' AND ';
    }
    $where_clause .= "(lastname LIKE '%$search%' OR firstname LIKE '%$search%' OR middlename LIKE '%$search%' OR section LIKE '%$search%' OR trackstrand LIKE '%$search%' OR lrnnumber LIKE '%$search%' OR id LIKE '%$search%')";
  }

  if (!empty($where_clause)) {
    $where_clause = "WHERE $where_clause";
  }

  $query = "SELECT * FROM students $where_clause ORDER BY lastname";
  $result = mysqli_query($conn, $query);

  while ($Row = mysqli_fetch_assoc($result)) {
?>

           <tr>
           <td hidden><?php echo $Row["id"]; ?></td>
           <td><?php echo $Row["lastname"]; ?></td>
          <td><?php echo $Row["firstname"]; ?></td>
          <td class="text-center"><?php echo substr($Row["middlename"], 0, 1); ?>.</td>
          <td class="text-center"><?php echo $Row["lrnnumber"]; ?></td>
          <td hidden class="text-center"><?php echo $Row["section"]; ?></td>
          <td hidden><?php echo $Row["grade"]; ?></td>
          <td hidden><?php echo $Row["trackstrand"]; ?></td>
  
     <td class="text-center">
      
     <a href="view.php?id=<?=$Row['id']?>" 
			      	     class="btn btn-dark "><b>VIEW</b></a>
                   
              <a href="update.php?id=<?=$Row['id']?>" 
			      	     class="btn btn-primary "><b>UPDATE</b></a>
              
			       <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $Row['id']; ?>"><b>DELETE</b></button>
             <div class="modal fade" id="deleteModal<?php echo $Row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel<?php echo $Row['id']; ?>"><div class="text text-danger">WARNING! You are about to Delete a Student</div></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p> <b>Actions cannot be undone! </b>
                <br>All data will be lost.
               <br> Are you sure you want to delete this student?

            </p>
            <form class="delete" action="delete_student.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
               <div class="mb-3">
                  <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
                  <input type="password" class="form-control" id="password" name="password" required>
               </div>
               <button type="submit" class="btn btn-danger" name="delete">Delete</button>
            </form>
         </div>
      </div>
   </div>
</div>
     </td>
			    </tr>
     












       
            <?php }
 }







      }
    }



 ?>






         </tbody>

</div>
   </div>
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

  
                                                          
