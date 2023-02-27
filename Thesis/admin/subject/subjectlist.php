<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    


.container {
	min-height: auto;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width:auto;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  
}
.box {
  width:auto;

}
.box2 {
  width:500px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); 
  border-radius: 10px;
  height: 6 0px; 
  margin: 20px 0;
}
.container table {
  width:500px;
	padding: 20px;
	border-radius: 10px;
  border:10px;  

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
  .btn-icon {
  width: 2rem; /* or whatever size you want */
  height: auto; /* or whatever size you want */
  object-fit: contain;
  vertical-align: middle;
  margin-right: 0.5rem; /* or whatever margin you want */
}

#search-button {
  border: none;
  box-shadow: none;
  background-color: transparent;
}

#search-button:hover img {
  transform: scale(1.2);
}

#search-button img {
  transition: transform 0.2s ease-in-out;
}

#create-button {
  background-color: transparent;
  color: #343a40;
  font-weight: bold;
  transition: transform 0.2s ease-in-out;
}

#create-button:hover {
  background-color: transparent;
  color: #007bff;
  transform: scale(1.05);
}

#create-button .btn-icon {
  max-height: 5rem;
  vertical-align: middle;
  transition: transform 0.2s ease-in-out;
}

#create-button:hover .btn-icon {
  transform: scale(1.2);
}</style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
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


<!-- TITLE HERE -->




        <div class=" container ">
       
      
      <div class=" text-center mb-3">
     

			</div>

<form>

<?php if (mysqli_num_rows($result)) { ?>
          

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           


           <div class="container mt-4">
           <div class="box2">
           <div class="container text-center">
  <form class="" method="get">
  <br>
    <div class="input-group mb-3 form text-center">
   
      <a class="link-primary" href="create.php" display-40>
     
        <button type="button" class="btn btn-outline-secondary border-0 p-0 text-center" id="create-button">
          <img src="img/add.gif" alt="search-icon" class="btn-icon">
        </button>
      </a>
      <input type="text" class="form-control" name="search" placeholder="Search subjects...">
      <button class="btn btn-outline-secondary border-0 p-0" type="submit" id="search-button text-center">
        <img src="img/search.gif" alt="search-icon" class="btn-icon">
      </button>
    </div>
  </form>
</div>


           </div>
  <table class="table table-bordered ">
              <thead >
                  <tr>
                  <th hidden scope="col">Subject ID </th>
                  <th scope="col">Subject Name </th>
                  <th hidden scope="col">Subject Teacher Username</th>
                  
                  <th class="text-center"scope="col" colspan="2">Actions </th>
                </tr>
              </thead>
        <tbody>    
          
       
        

        <?php
require "./php/db_conn.php";
$teacherid = $_SESSION['username'];
$subjectgrouphead = $_SESSION["id"];
$search_keyword = isset($_GET['search']) ? $_GET['search'] : '';
$query = "SELECT * FROM subjects";
if (!empty($search_keyword)) {
  $query .= " WHERE subjectname LIKE '%" . mysqli_real_escape_string($conn, $search_keyword) . "%'";
}
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
  while ($Row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td hidden><?php echo $Row["subjectid"]; ?></td>
      <td><?php echo $Row["subjectname"]; ?></td>
      <td hidden><?php echo $Row["teacherid"]; ?></td>
      <td class="text-center">
        <a href="update.php?id=<?php echo $Row['id']; ?>" class="btn btn-dark">+</a>
        <a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?php echo $Row['id']; ?>');">DISCARD</a>
      </td>
    </tr>
    <?php
  }
} else {
  echo "<tr><td colspan='4'>No subjects found</td></tr>";
}
?>






       
            <?php }
 }


             }

 ?>



         </tbody>
      </table>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
