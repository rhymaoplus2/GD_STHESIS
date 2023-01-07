<?php 
   include "./php/teacherlist.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





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
   TEACHERS ID LIST</h1>

      <br>
      <h6 class="text">ONLY ADMINS CAN ADD TEACHERS</h6>
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
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           




              <thead class="thead">
                  <tr>
                  <th scope="col">TEACHER NAME</th>
                  <th scope="col">Teacher ID </th>
                </tr>
              </thead>
        <tbody>    
          
        

	<?php
 require "./php/db_conn.php";
 $adviser_id = $_SESSION["id"];
 $query = "SELECT * FROM teacher ";
 //WHERE adviser_id = $adviser_id;
 $result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) {

     while ($Row = mysqli_fetch_assoc($result)) {
      
      ?>
           
           <tr>
           <td><?php echo $Row["name"]; ?></td>
           <td>
        <input 
        disabled="disabled" id ="copy" 
        value=" <?=$Row['username'] ?>"
        class="display-10"
        
       > 
        </input>
        <button onclick="myFunction()" class="btn btn-warning">Copy ID</button></td>
        
      
        




         <script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("copy");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

   // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
            </script>








          











       
            <?php }
 }








}

}
 ?>



         </tbody>
      </table>
      <!--
      <div class="link-center">
          <a class="link-primary" href="create.php" display-40>
          <button type="button" class="btn btn-dark">

      CREATE

          </button>
          </a>
          </div>
-->
     </div>
   </div>
  </div>







  
</body>
</html>
<?php }else{
	header("Location: teacherlist.php");
} ?>




















