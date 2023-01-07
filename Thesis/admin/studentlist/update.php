


<?php include './php/admin_update.php'; ?>






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
    <label for="" class="form-label">LRN no.</label>
    <input 
	value="<?=$row['lrnnumber'] ?>" 

    type="text" 
    class="form-control" 
    id="lrnnumber" 
    placeholder="ex: 12913937"
    name="lrnnumber">
  </div>



  <div class="form-group">
 

    <label for="" class="form-label">Adviser ID</label>
    <input 
	value="<?=$row['adviser_id'] ?>" 
    type="text" 
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: 12913937"
    name="adviser_id">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input 
	value="<?=$row['firstname'] ?>" 

    type="text" 
    class="form-control" 
    id="firstname" 
    placeholder="ex: Reyris"
    name="firstname">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Middle Name</label>
    <input 
	value="<?=$row['middlename'] ?>" 

    type="middlename" 
    class="form-control" 
    id="middlename" 
    placeholder="ex: Perolino"
    name="middlename">

  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input
	value="<?=$row['lastname'] ?>" 
	
    type="lastname" 
    class="form-control" 
    id="lastname" 
    placeholder="ex: Milmao"
    name="lastname">

  </div>



  <div class="from-group mb-3">
                                <label for="">Suffix</label>
                                <select name="suffix" id="suffix" class="form-control"
	value="<?=$row['suffix'] ?>" 
								>
                                    <option value=" ">None</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                </select>
                            </div>



                       <div class="from-group mb-3">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control" 
	value="<?=$row['gender'] ?>" 
								>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Place</label>
    <input 
	value="<?=$row['birthplace'] ?>" 

    type="text" 
    class="form-control" 
    id="birthplace" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="birthplace">

  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Date</label>
    <input 
	value="<?=$row['birthday'] ?>" 

    type="date" 
    class="form-control" 
    id="birthday" 
    placeholder="ex: August 17 2000"
    name="birthday">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input 
	value="<?=$row['age'] ?>" 

    type="age" 
    class="form-control" 
    id="age" 
    placeholder="ex: 22"
    name="age">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input 
	value="<?=$row['address'] ?>" 
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent/Guardian</label>
    <input 
	value="<?=$row['parent'] ?>" 
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Reynato Milmao"
    name="parent">

  </div>





		   
	


		   
		   <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>


				   <a class="link-primary" href="read.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>


	
	    </form>
	</div>
</body>
</html>