<?php 
   include "./php/read.php";
   session_start();
   include "db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <style>
  

  <style>
     

.top-container {
  background-color: #ffbb33;
  padding: 30px;
  text-align: center;
}

.header {
 
 
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>




















