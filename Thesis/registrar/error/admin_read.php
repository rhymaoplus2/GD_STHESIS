<?php 
   include "./php/read.php";
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav ">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="masterlist.php">Male Student List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="records.php">Records</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="reports.php">Reports</a>
      </li>
  
	  <li class="nav-item">
        <a class="nav-link" href="users.php">Users</a>
      </li>
  
    </ul>

	
  </div>
</nav>








<!--  CRUD AREA -->


<div class="container">
		<div class="box">
			<br>
      

			<h1 class="display-10 text-center">
 Students Information</h1>
       <div class="row justify-content-center my-5">
	   
	   <div class="row justify-content-right  my-5">
          <a class="link-warning" href="admin_search.php" display-40>
          <button type="button-center" class="btn btn-warning">

      Search Students

          </button>
          </a>

			</div>
	






			
			<?php if (isset($_GET['success'])) { ?>
		    <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
				  <th scope="col">LRN no.</th>
				  <th scope="col">Adviser ID</th>
			      <th scope="col">First Name</th>
			      <th scope="col">Middle Name</th>
				  <th scope="col">Last Name</th>
				  <th scope="col">Suffix</th>
				  <th scope="col">Gender</th>
				  <th scope="col">Birth Place</th>
				  <th scope="col">Birth Date</th>
				  <th scope="col">Age</th>
				  <th scope="col">Address</th>
				  <th scope="col">Parent/Guardian</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
				  <td><?php echo $rows['lrnnumber']; ?></td>
				  <td><?php echo $rows['adviser_id']; ?></td>
			      <td><?php echo $rows['firstname']?></td>
			      <td><?php echo $rows['middlename']; ?></td>
				  <td><?php echo $rows['lastname']; ?></td>
				  <td><?php echo $rows['suffix']; ?></td>
				  <td><?php echo $rows['gender']; ?></td>
				  <td><?php echo $rows['birthplace']; ?></td>
				  <td><?php echo $rows['birthday']; ?></td>
				  <td><?php echo $rows['age']; ?></td>
				  <td><?php echo $rows['parent']; ?></td>
				  <td><?php echo $rows['address']; ?></td>
				
				
			      <td><a href="admin_update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success">Update</a>

			      	  <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-danger">Discard</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>



			<div class="link-center">
          <a class="link-primary" href="teacher_create.php" display-40>
          <button type="button" class="btn btn-dark">

      CREATE

          </button>
          </a>

			</div>



		

			
		</div>
	</div>
</body>
</html>
<?php }else{
	header("Location: studentlist.php");
} ?>