<?php 

   session_start();
   include "../php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet"  href="./css/style.css">
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







<!-- TITLE HERE -->




        <div class=" container ">
       
        <div class="box">
			<br>
      

			<h1 class="display-10 text-center">
 Students Information</h1>
 <br>
  

			</div>
<form action="" method="GET">
                    <div class="input-group ">
                      <input
                        type="text"
                        name="search"
                        required
                        value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                        class="form-control"
                        placeholder="Search by First Name/Middle Name/Last Name"
                      />
                      <button type="submit" class="btn btn-warning">
                        Search
                      </button>
                    </div>
                    </form>
<br> <br>
<br>


                   
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>LRN no.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                  </tr>
                </thead>
                <tbody>

           




    <?php
    $con = mysqli_connect("localhost", "root", "", "my_db");
    if (isset($_GET['search'])) {
        $adviser_id = ($_SESSION["id"]);
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM students WHERE adviser_id = '$adviser_id' AND CONCAT(lrnnumber,firstname,lastname,middlename)LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) >
                  0) { foreach ($query_run as $items) { ?>
                  <tr>
                   <td><?= $items['lrnnumber']; ?></td>
                    <td><?= $items['firstname']; ?></td>
                    <td><?= $items['middlename']; ?></td>
                    <td><?= $items['lastname']; ?></td>
                    <td><a href="update.php?id=<?=$items['id']?>" 
			      	     class="btn btn-success ">Update</a>

			      	  <a href="php/delete.php?id=<?=$items['id']?>" 
			      	     class="btn btn-danger ">Discard</a>
			      </td>
                  </tr>
                  

                  <?php
            }
        } else {
                                                ?>
                  <tr>
                  <td colspan="4"><h1 style = "color:red"> No Data Found   </h1> 
                  <h5>
                    
                  </h5> </td>
                  </tr>
                  <?php
        }
    }
       }
       ?>
                </tbody>
                
              </table>
              <div class="link-center">
          <a class="link-primary" href="teacher_create.php" display-40>
          <button type="button" class="btn btn-dark">

      CREATE

          </button>
          </a>
          </div>
          
            </div>
      
      </div>
    </div>

 

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
