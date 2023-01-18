<?php 
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
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



<!--  CRUD AREA -->
<br>
<br>

<div class="container">
<form action="./php/create.php"
      method="post">
  <h4 class="display-10 text-center" >Add New Subject</h4>


 <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>



  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Subject ID</label>
    <input 
    type="text" 
    class="form-control" 
    id="subjectid" 
    placeholder="ex: 36162"
    name="subjectid">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject Name</label>
    <input 
    type="middlename" 
    class="form-control" 
    id="subjectname" 
    placeholder="ex: Science"
    name="subjectname">

  </div>

  <!--
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Subject Teacher ID</label>
    <input 
    type="lastname" 
    class="form-control" 
    id="teacherid" 
    placeholder="ex: 1271"
    name="teacherid">

  </div>
 -->

 <div class="mb-3">
 <label for="exampleInputEmail1" class="form-label">Subject Teacher Username</label>
 <select name="teacherid" id="teacherid" class="form-control">
  
    <?php 
    $query ="SELECT username FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['username'];
    ?>
    <?php
    //selected option
    if(!empty($username) && $username== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>



 </div>
 <div class="mb-3">
    <input
    type="hidden"
    class="form-control" 
    id="subjectgrouphead" 
    placeholder="ex: Science"
    name="subjectgrouphead"
    value="<?php echo $_SESSION['username']?>"
    >

    
  </div>























  <button type="submit" 
          class="btn btn-primary"
          name="create">Create</button>

          <a class="link-primary" href="subjectlist.php">
          <button type="button" class="btn btn-dark">

      
          Cancel

          </button>
          </a>
</form>
</div>












</body>
</html>
<?php }else{
	header("Location:create.php");
} ?>