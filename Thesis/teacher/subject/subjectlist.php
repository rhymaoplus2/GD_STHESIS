<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>





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






<div class="container">
		<div class="box">
			<br>
      

			<h1 class="display-10 text-center"> 
      <?= $_SESSION['name'] ?> Subjects</h1>

      <br>
      <h5>No List? Click the create Button to add Subjects!</h5>
       <div class="row justify-content-center my-5">
	   

       
       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
            <table class="table table-bordered">







            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;

              ?> 
           




              <thead class="thead">
                  <tr>
                  <th scope="col">ID </th>
                  <th scope="col">Subject ID </th>
                  <th scope="col">Subject Name </th>
                  <th scope="col">Subject Teacher Username </th>
                  
                  <th scope="col">Action </th>
                </tr>
              </thead>
        <tbody>    
          
        

        
        <?php
 require "db_conn.php";
 $subjectgrouphead = $_SESSION["id"];
 $query = "SELECT * FROM subjects WHERE subjectgrouphead= '$subjectgrouphead';";
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) {

          if (mysqli_num_rows($result) > 0) {

            while ($Row = mysqli_fetch_assoc($result)) {

              ?>
           
           <tr>
           <td><?php echo $Row["id"]; ?></td>
          <td><?php echo $Row["subjectid"]; ?></td>
          <td><?php echo $Row["subjectname"]; ?></td>
          <td><?php echo $Row["teacherid"]; ?></td>
      
             <td><a href="update.php?id=<?= $rows['id'] ?>" 
			      	     class="btn btn-success ">Update</a>


        
          </head>


          <!--     DELETE FUNCTION -->
          <script type="text/javascript">  
          function openulr(newurl) {  
          if (confirm("Are you sure you want to Delete?")) {    
          document.location = newurl;  
                                                           }
                                    }
          </script>
<strong><a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $rows['id'] ?>');">
  DISCARD
</a></strong>

			      </td>
   
			    </tr>
     
       
            <?php }
          }








        }

            }
            ?>



         </tbody>
      </table>
      <div class="link-center">
          <a class="link-primary" href="create.php" display-40>
          <button type="button" class="btn btn-dark">

      CREATE

          </button>
          </a>
          </div>
     </div>
   </div>
  </div>







  
</body>
</html>

<?php } else {
        header("Location: subjectlist.php");
      }
}

?>




