<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet"  href="../css/style.css">
  <header>

</header>

<style>
  
.top-container {
    background-color: #f1f1f1;
    padding: 30px;
    text-align: center;
  }
  
  .header {
    padding: 10px 16px;
    
    color: #f1f1f1;
  }
  s
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

    <!--
			<br>
			<h1 class="display-10 text-center"> These are your Students 
      <?=$_SESSION['name']?></h1>

      <br>
      <h5>No List? Click the create Button to add Your Students! </h5>
     <div class="row justify-content-center my-5">
                                                          -->
	   <div class="row justify-content-right  my-5">
          <a class="link-warning" href="teacher_view.php" display-40>
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
            <table class="table table-bordered ">







            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           




              <thead class="thead">
                  <tr>
                  <th scope="col">LRN No. </th>
                  <th scope="col">First Name </th>
                  <th scope="col">Middle Name </th>
                  <th scope="col">Last Name </th>
                 <!--
                  
                 <th scope="col">Suffix</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Birth Place</th>
                  <th scope="col">Birth Day</th>
                  <th scope="col">Age</th>
                  <th scope="col">Address</th>
                  <th scope="col">Parent/Guardian</th>
             -->
                  
                  <th scope="col" colspan="2">Action </th>
                </tr>
              </thead>
        <tbody>    
          
       
        


<?php
 require "./php/db_conn.php";
 $adviser_id = $_SESSION["id"] ;
 $query = "SELECT * FROM students  WHERE  adviser_id = '$adviser_id'";
$result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) 

 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
           <tr>
          <td><?php echo $Row["lrnnumber"]; ?></td>
          <td><?php echo $Row["firstname"]; ?></td>
          <td><?php echo $Row["middlename"]; ?></td>
          <td><?php echo $Row["lastname"]; ?></td>
          <!-- <td><?php echo $Row["suffix"]; ?></td>
          <td><?php echo $Row["gender"]; ?></td>
          <td><?php echo $Row["birthplace"]; ?></td>
          <td><?php echo $Row["birthday"]; ?></td>
          <td><?php echo $Row["age"]; ?></td>
          <td><?php echo $Row["address"]; ?></td>
          <td><?php echo $Row["parent"]; ?></td>
     -->
             <td><a href="update.php?id=<?=$rows['id']?>" 
			      	     class="btn btn-success ">Update</a>
     </td>
     <td>
                   <script type="text/javascript">  

function openulr(newurl) {  

  if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $rows['id'] ?>');">
  DISCARD
</a>

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


  
</body>
</html>
<?php 

}








else{
	header("Location: teacher_read.php");
} ?>

