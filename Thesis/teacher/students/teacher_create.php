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
<div class="content">
<form action="./php/create.php"
      method="post">
  <h4 class="display-10 text-center" >Add New Student</h4>


 <?php if (isset($_GET['error'])) { 
  include "../male/php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>


<div class="form-group">
    <label for="" class="form-label warning" >LRN no.</label>
    <input 
    type="text" 
    class="form-control" 
    id="lrnnumber" 
    placeholder="ex: 12913937"
    name="lrnnumber">
  </div>


<!--
  <div class="form-group">
    <label for="" class="form-label">Adviser ID</label>
    <input 
    
    type="text" 
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: 12913937"
    name="adviser_id">
  </div>
 -->



 
 <div class="mb-3">
    <input
    type="hidden"
    class="form-control" 
    id="adviser_id" 
    placeholder="ex: Science"
    name="adviser_id"
    value="<?php echo $_SESSION['id']?>"
    >
    
  </div>









  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">First Name</label>
    <input 
    type="text" 
    class="form-control" 
    id="firstname" 
    placeholder="ex: Reyris"
    name="firstname">
  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Middle Name</label>
    <input 
    type="middlename" 
    class="form-control" 
    id="middlename" 
    placeholder="ex: Perolino"
    name="middlename">

  </div>

  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last Name</label>
    <input 
    type="lastname" 
    class="form-control" 
    id="lastname" 
    placeholder="ex: Milmao"
    name="lastname">

  </div>



  <div class="from-group mb-3">
                                <label for="">Suffix</label>
                                <select name="suffix" id="suffix" class="form-control">
                                    <option value=" ">None</option>
                                    <option value="Jr.">Jr.</option>
                                    <option value="Sr.">Sr.</option>
                                </select>
                            </div>



                       <div class="from-group mb-3">
                                <label for="">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Place</label>
    <input 
    type="text" 
    class="form-control" 
    id="birthplace" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="birthplace">

  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth Date</label>
    <input 
    type="date" 
    class="form-control" 
    id="birthday" 
    placeholder="ex: August 17 2000"
    name="birthday">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input 
    type="age" 
    class="form-control" 
    id="age" 
    placeholder="ex: 22"
    name="age">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input 
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent/Guardian</label>
    <input 
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Reynato Milmao"
    name="parent">

  </div>





 
  <button type="submit" 
          class="btn btn-primary"
          name="create">Create</button>

          <a class="link-primary" href="teacher_read.php">
          <button type="button" class="btn btn-dark">

      
          Cancel

          </button>
          </a>
</form>
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
<?php }else{
	header("Location: admin_create.php");
} ?>