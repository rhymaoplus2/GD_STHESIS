


<?php include 'n-update.php'; ?>






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
		<form action="n-update.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Update</h4><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>


<div class="form-group mb-3">
    <label for="" class="form-label"><b>Subject Name</b></label>
    <input 
    value="<?=$row['subjectname']?>"
	  type="text"
    class="form-control"
    id="subjectname" 
    name="subjectname">
    </div>


    <br>
<!-- SUBJECT TEACHERS -->

<div class="form-group mb-3">
    
    <input 
    type="hidden"
    value="<?=$row['subjectid']?>"
	  disabled="disabled"
    class="form-control"
    id="subjectid" 
    name="subjectname">
    </div>
    <b>--------------------------------------------------------------------------------------</b>
    <p class="text-start"><b>Subject Teachers</b></p>
    <div class="form-group mb-3">
  
  <select name="teacher1"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher1']?>"><?=$row['teacher1']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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





    



    <div class="form-group mb-3">
  
  <select name="teacher2" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher2']?>"> <?=$row['teacher2']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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





    <div class="form-group mb-3">
  
  <select name="teacher3" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher3']?>"><?=$row['teacher3']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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






    <div class="form-group mb-3">
  
  <select name="teacher4" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher4']?>"><?=$row['teacher4']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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





    <div class="form-group mb-3">
  
  <select name="teacher5" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher5']?>"><?=$row['teacher5']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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








    <div class="form-group mb-3">
  
  <select name="teacher6" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher6']?>"><?=$row['teacher6']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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
















    <div class="form-group mb-3">
  
  <select name="teacher7" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher7']?>"><?=$row['teacher7']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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






    <div class="form-group mb-3">
  
  <select name="teacher8" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher8']?>"><?=$row['teacher8']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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












    <div class="form-group mb-3">
  
  <select name="teacher9" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher9']?>"><?=$row['teacher9']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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






    <div class="form-group mb-3">
  
  <select name="teacher10" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['teacher10']?>"><?=$row['teacher10']?></option>
    <?php 
    $query ="SELECT name FROM users";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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




<br>

    <b>--------------------------------------------------------------------------------------</b>
    <p class="text-start"><b>For Section:</b></p>
    <div class="form-group mb-3">
  
  <select name="section"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['section']?>"><?=$row['section']?></option>
  <option value=""></option>
   <?php 
    $query ="SELECT name FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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









    <div class="form-group mb-3">
  
  <select name="section2"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['section2']?>"><?=$row['section2']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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


    <div class="form-group mb-3">
  
  <select name="section3"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['section3']?>"><?=$row['section3']?></option>
  <option value=""></option>
   <?php 
    $query ="SELECT name FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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


    <div class="form-group mb-3">
  
  <select name="section4"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"> <option value="<?=$row['section4']?>"><?=$row['section4']?></option>
  <option value=""></option>
   <?php 
    $query ="SELECT name FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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


    <div class="form-group mb-3">
  
  <select name="section5"  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
     <option value="<?=$row['section5']?>"><?=$row['section5']?></option>
     <option value=""></option>
    <?php 
    $query ="SELECT name FROM section";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($name) && $name== $option){
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








	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
<br>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>


				   <a class="link-primary" href="subjectlist.php" display-40>
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