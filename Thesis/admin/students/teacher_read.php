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
  <a href="teacher_create.php" class="btn btn-dark mb-3"><b>ADD NEW </b></a>
</div>

        <form method="post">
  <label for="sort">Sort By:</label>
  <select id="sort" name="sort">
    <option value="lastname">Last Name</option>
    <option value="firstname">First Name</option>
    <option value="middlename">Middle Name</option>
    <option value="lrnnumber">LRN No.</option>
  </select>
  <button class="btn btn-dark" type="submit" name="submit">OK</button>
</form>

            <table class="table table-bordered ">







            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           
        

          
              <thead>
                  <tr>
                  <th scope="col">Last Name </th>
                  <th scope="col">First Name </th>
                  <th scope="col">Middle Name </th>
                  <th scope="col">LRN No. </th>
                  <th scope="col">Section</th>
                 <!--
                  
                 <th scope="col">Suffix</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Birth Place</th>
                  <th scope="col">Birth Day</th>
                  <th scope="col">Age</th>
                  <th scope="col">Address</th>
                  <th scope="col">Parent/Guardian</th>
             -->
                  
                  <th scope="col" colspan="3" class="text-center" >Actions</th>
                </tr>
              </thead>
        <tbody>    
          
       
        


<?php
 require "./php/db_conn.php";

 $query = "SELECT * FROM students";
$result = mysqli_query($conn, $query);









if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
  if (isset($_POST['submit'])) {
    $sort_by = $_POST['sort'];

    // Modify your SQL query to include ORDER BY clause
    $query = "SELECT * FROM students ORDER BY $sort_by";

    $result = mysqli_query($conn, $query);
  } else {
    $query = "SELECT * FROM students";
    $result = mysqli_query($conn, $query);
  }

  // rest of your code
}

 if (mysqli_num_rows($result) > 0) 

 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
           <tr>
           <td hidden><?php echo $Row["id"]; ?></td>
           <td><?php echo $Row["lastname"]; ?></td>
          <td><?php echo $Row["firstname"]; ?></td>
          <td><?php echo $Row["middlename"]; ?></td>
          <td><?php echo $Row["lrnnumber"]; ?></td>
          <td><?php echo $Row["section"]; ?></td>
  
     <td><a href="view.php?id=<?=$Row['id']?>" 
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

  
                                                          }
