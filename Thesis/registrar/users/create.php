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


.fade-in {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

.container {
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
  background-color: white;
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;;
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

  html, body {
  height: 100%;
}

body {
  background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);
  background-repeat: no-repeat;
}

      </style>
</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<br>
<br>

<div class="fade-in">
<div class="container">
<div class="content">
<form action="php/create.php"
      method="post">
      <header class="text-center text-white" style="font-size:30px; background: linear-gradient(to right, #0099ff 0%, #9933ff 100%); width:auto; height:60px; line-height:60px; border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'ADD NEW USER';
        } ?>
    </b>
</header>
<br>  
<hr>
 <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
 }  
  ?>
  



  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label "><b>Name</b></label>
    <input 
    type="text" 
    class="form-control" 
    id="name" 
    placeholder="reyris milmao"
    name="name">
  </div>



<br>

<hr>
		
<button type="submit" class="btn btn-primary" name="create" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

<button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='index.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>




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



</div>


</body>
</html>
<?php }else{
	header("Location: admin_create.php");
} ?>