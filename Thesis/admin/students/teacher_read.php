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
	width: 750px;
	padding: 20px;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 750px;
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


<br> <br>
<div class="container" >
		<div class="box">
    <div class="content">

<!--
			<h1 class="display-10 text-center"> Student List of MSU-MSAT 
        <br>
        Junior and Senior High School
      </h1>
      <br>
      Dear : <?=$_SESSION['id']?>
      <br>
      Click the "ADD" Button Students! 
<div class="row justify-content-center my-5">
                                                      
	   <div class="row justify-content-right  my-3">
-->       

       </div>
       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border">
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
 if (mysqli_num_rows($result) > 0) 

 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
           <tr>
           <td><?php echo $Row["lastname"]; ?></td>
          <td><?php echo $Row["firstname"]; ?></td>
          <td><?php echo $Row["middlename"]; ?></td>
          <td><?php echo $Row["lrnnumber"]; ?></td>
          <!-- <td><?php echo $Row["suffix"]; ?></td>
          <td><?php echo $Row["gender"]; ?></td>
          <td><?php echo $Row["birthplace"]; ?></td>
          <td><?php echo $Row["birthday"]; ?></td>
          <td><?php echo $Row["age"]; ?></td>
          <td><?php echo $Row["address"]; ?></td>
          <td><?php echo $Row["parent"]; ?></td>
     -->
     <td><a href="view.php?id=<?=$Row['id']?>" 
			      	     class="btn btn-dark "><b>VIEW</b></a>
                   
              <a href="update.php?id=<?=$Row['id']?>" 
			      	     class="btn btn-primary "><b>UPDATE</b></a>
     
                   <script type="text/javascript">  

function openulr(newurl) {  

  if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $rows['id'] ?>');">
  <b>DELETE</b>
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


      
     
      <div class="center">
          <a class="link-primary" href="teacher_create.php" display-40>
          <button type="button" class="btn btn-dark">

      <b>ADD NEW STUDENT</b>

          </button>
          </a>
          </div>

</form>
</div>
<br>
<br>


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
                    <button type="submit" class="btn btn-dark">
                        <b>SEARCH </b>
                      </button>
                 

<br>
<br>
                   
              <table class="table table-bordered">
                <thead>
                  <tr>
                  <th>Last Name</th>
                  
                    <th>First Name</th>
                   
                    <th>Middle Name</th>
                    <th>LRN no.</th>
                    <th colspan="3">Actions</th>
                  </tr>
                </thead>
                <tbody>

           




    <?php
    $con = mysqli_connect("localhost", "root", "", "my_db");
    if (isset($_GET['search'])) {
        $adviser_id = ($_SESSION["id"]);
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM students WHERE CONCAT(lrnnumber,firstname,lastname,middlename)LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) >
                  0) { foreach ($query_run as $items) { ?>
                  <tr>
                  <td><?= $items['lastname']; ?></td>
                    <td><?= $items['firstname']; ?></td>
                    <td><?= $items['middlename']; ?></td> 
                    <td><?= $items['lrnnumber']; ?></td>
                    <td><a href="view.php?id=<?=$items['id']?>" 
			      	     class="btn btn-dark ">View</a>
                   
                  </td>
                    <td><a href="update.php?id=<?=$items['id']?>" 
			      	     class="btn btn-success ">Update</a>
                   
                  </td>
                  <td>
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

      </form>
      </div>
      </div>
      </div>

<!-- Search Area -->






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






  
</body>
</html>
<?php 

  

