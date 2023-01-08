<?php 
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">

    <style>
    
      
      </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav ">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../home.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../masterlist.php">Master List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../records.php">Records</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="../reports.php">Reports</a>
      </li>
  
	  <li class="nav-item">
        <a class="nav-link" href="../users.php">Users</a>
      </li>
  
    </ul>

	
  </div>
</nav>







<!--  CRUD AREA -->
<br>
<br>

<div class="container">
<form action="./php/create.php"
      method="post">
  <h4 class="display-10 text-center" >Add New Student</h4>


 <?php if (isset($_GET['error'])) { 
  include "../male/php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>


<div class="form-group">
    <label for="" class="form-label warning" >LRN no.</label>
    <input 
    type="text" 
    class="form-control" 
    id="lrnnumber" 
    placeholder="ex: 12913937"
    name="lrnnumber">
  </div>


<!--
  <div class="form-group">
    <label for="" class="form-label">Adviser ID</label>
    <input 
    
    type="text" 
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: 12913937"
    name="adviser_id">
  </div>
 -->



 
 <div class="mb-3">
    <input
    type="hidden"
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: Science"
    name="adviser_id"
    value="<?php echo $_SESSION['id']?>"
    >
    
  </div>









  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input 
    type="text" 
    class="form-control" 
    id="firstname" 
    placeholder="ex: Reyris"
    name="firstname">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Middle Name</label>
    <input 
    type="middlename" 
    class="form-control" 
    id="middlename" 
    placeholder="ex: Perolino"
    name="middlename">

  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input 
    type="lastname" 
    class="form-control" 
    id="lastname" 
    placeholder="ex: Milmao"
    name="lastname">

  </div>



  <div class="from-group mb-3">
                                <label for="">Suffix</label>
                                <select name="suffix" id="suffix" class="form-control">
                                    <option value=" ">None</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                </select>
                            </div>



                       <div class="from-group mb-3">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Place</label>
    <input 
    type="text" 
    class="form-control" 
    id="birthplace" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="birthplace">

  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Date</label>
    <input 
    type="date" 
    class="form-control" 
    id="birthday" 
    placeholder="ex: August 17 2000"
    name="birthday">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input 
    type="age" 
    class="form-control" 
    id="age" 
    placeholder="ex: 22"
    name="age">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input 
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent/Guardian</label>
    <input 
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Reynato Milmao"
    name="parent">

  </div>





 
  <button type="submit" 
          class="btn btn-primary"
          name="create">Create</button>

          <a class="link-primary" href="teacher_read.php">
          <button type="button" class="btn btn-dark">

      
          Cancel

          </button>
          </a>
</form>
</div>












</body>
</html>
<?php }else{
	header("Location: admin_create.php");
} ?>