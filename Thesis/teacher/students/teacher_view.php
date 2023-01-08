<?php 

   session_start();
   include "../php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet"  href="../css/style.css">
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>




<!-- TITLE HERE -->




        <div class=" container ">
       
        <div class="box">
        <div class="content">
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
                      
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">
                        Search
                      </button>
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
                    <th>Actions</th>
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

                   <script type="text/javascript">  

function openulr(newurl) {  

  if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<strong><a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $items['id'] ?>');">
  DISCARD
</a></strong>
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
      </div>
 

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
