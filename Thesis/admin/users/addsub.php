


<?php include 'n-addsub.php'; 

session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
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





<br>
<br>
	<div class="container">
		<form action="n-addsub.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Add Subjects</h4><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>

      <hr>
 <h4 class="display-10 text-center">SLOT 1</h4><hr>


 <label for="" class="form-label"><i><b>Subject</b></i></label>
<select name="sub1" id="sub1" class="form-control">
 <option value="<?=$row['sub1']?>"><?=$row['sub1']?></option>
 <option value=""?></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['subjectname'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
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

<br>
 <div class="mb-3">
 <label for="" class="form-label"><i><b>Section</b></i></label>
 <select name="sec1" id="sec1" class="form-control">
 <option value="<?=$row['sec1']?>"><?=$row['sec1']?></option>
 <option value=""?></option>
    <?php 
    $query ="SELECT name FROM section ORDER BY id ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
  }
    ?>
</select>
<hr>


 </div>






<hr>

 <h4 class="display-10 text-center">SLOT 2</h4><hr>


<div class="mb-3">


<label for="" class="form-label"><i><b>Subject</b></i></label>
<select name="sub2" id="sub2" class="form-control">
<option value="<?=$row['sub2']?>"><?=$row['sub2']?></option>
<option value=""?></option>
   <?php 
   $query ="SELECT subjectname FROM subjects ORDER BY id ASC";
   $result = $conn->query($query);
   if($result->num_rows> 0){
       while($optionData=$result->fetch_assoc()){
       $option =$optionData['subjectname'];
   ?>
   <?php
   //selected option
   if(!empty($section) && $section== $option){
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

<br>

<label for="" class="form-label"><i><b>Section</b></i></label>
<select name="sec2" id="sec2" class="form-control">
<option value="<?=$row['sec1']?>"><?=$row['sec2']?></option>
<option value=""?></option>
   <?php 
   $query ="SELECT name FROM section ORDER BY id ASC";
   $result = $conn->query($query);
   if($result->num_rows> 0){
       while($optionData=$result->fetch_assoc()){
       $option =$optionData['name'];
   ?>
   <?php
   //selected option
   if(!empty($section) && $section== $option){
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
<hr>

<br>





</div>













	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">ADD</button>


				   <a class="link-primary" href="users.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>


	
	    </form>
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
