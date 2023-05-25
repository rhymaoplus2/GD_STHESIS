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
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
  


  .container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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




















