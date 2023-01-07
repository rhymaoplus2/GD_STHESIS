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
  <h4 class="display-10 text-center" >Add New Subject</h4>


 <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>



  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Subject ID</label>
    <input 
    type="text" 
    class="form-control" 
    id="subjectid" 
    placeholder="ex: 36162"
    name="subjectid">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject Name</label>
    <input 
    type="middlename" 
    class="form-control" 
    id="subjectname" 
    placeholder="ex: Science"
    name="subjectname">

  </div>

  <!--
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject Teacher ID</label>
    <input 
    type="lastname" 
    class="form-control" 
    id="teacherid" 
    placeholder="ex: 1271"
    name="teacherid">

  </div>
 -->

 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Subject Teacher Username</label>
 <select name="teacherid" id="teacherid" class="form-control">
  
    <?php 
    $query ="SELECT username FROM teacher";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['username'];
    ?>
    <?php
    //selected option
    if(!empty($username) && $username== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>



 </div>
 <div class="mb-3">
    <input
    type="hidden"
    class="form-control" 
    id="subjectgrouphead" 
    placeholder="ex: Science"
    name="subjectgrouphead"
    value="<?php echo $_SESSION['username']?>"
    >

    
  </div>























  <button type="submit" 
          class="btn btn-primary"
          name="create">Create</button>

          <a class="link-primary" href="subjectlist.php">
          <button type="button" class="btn btn-dark">

      
          Cancel

          </button>
          </a>
</form>
</div>












</body>
</html>
<?php }else{
	header("Location:create.php");
} ?>