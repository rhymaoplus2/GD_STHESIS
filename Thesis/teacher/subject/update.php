


<?php include './php/update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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







	<div class="container">
		<form action="php/update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>


<div class="form-group">
    <label for="" class="form-label">Subject ID</label>
    <input 
	value="<?=$row['subjectid'] ?>" 

    type="text" 
    class="form-control" 
    id="subjectid" 
    placeholder="ex: 12913937"
    name="subjectid">
  </div>



  <div class="form-group">
 

    <label for="" class="form-label">Subject Name</label>
    <input 
	value="<?=$row['subjectname'] ?>" 
    type="text" 
    class="form-control" 
    id="subjectname" 
    placeholder="ex: 12913937"
    name="subjectname">
  </div>


  <div class="mb-3">
 <select name="teacherid" id="teacherid" class="form-control">
    <option value="">Subject Teacher Username</option>
    <?php 
    $query ="SELECT username FROM teacher";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['username'];
    ?>
    <?php
    //selected option
    if(!empty($username) && $id== $option){
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


		   
	


		   
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>


				   <a class="link-primary" href="subjectlist.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>


	
	    </form>
	</div>
</body>
</html>