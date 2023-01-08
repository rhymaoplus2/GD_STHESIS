<?php 
   include "./php/read.php";
   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>




<!DOCTYPE html>
<html>
<head>
	<title>HOME

  </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet"  href="../css/style.css">
  <style>
  

  <style>
     

.top-container {
  background-color: #ffbb33;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
 
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

.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}



    </style>
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


  
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>




















