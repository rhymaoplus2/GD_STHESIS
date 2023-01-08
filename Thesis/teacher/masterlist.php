<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
   rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
     crossorigin="anonymous">
  <link rel="stylesheet"  href="./css/style.css">
    <style>
/* VIDEO */







#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}

#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}



.top-container {
  background-color: #ffbb33;
  padding: 30px;
  text-align: center;
}

.header {
  padding: 10px 16px;
 background-color:  black ;
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


<!--


<div class=" mx-auto">MASTERLIST</div>
<div class="subjectlist">

<img src="../img/students.png" class="img-thumbnail" alt="...  " style="width: 20rem; height:20rem">
<br>
<div class="text1">
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati reyrus cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
    necessitatibus officia suscipit sint facilis, at, cumque nulla.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
    necessitatibus officia suscipit sint facilis, at, cumque nulla.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
</p>
</div>
<div class="button">
    <a href="./subject/subjectlist.php">
<button type="button" class="btn btn-warning btn-lg ">Subject List</button>
</a>
</div>
<br>
<br>
<br>
<img src="../img/students.png" class="img-thumbnail" alt="...  " style="width: 20rem; height:20rem">
<div class="text2">
<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
    necessitatibus officia suscipit sint facilis, at, cumque nulla.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
    necessitatibus officia suscipit sint facilis, at, cumque nulla.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores magni
    odit quibusdam alias eligendi enim eum, error porro vero quaerat facilis
    amet at obcaecati cupiditate dicta rem, quidem eius! Quasi?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem in quos 
    veniam amet iste optio eaque quas voluptas corporis odit, iusto inventore 
</p>
</div>
<br>
<div class="button1">
    <a href="./students/teacher_read.php">
<button type="button" class="btn btn-warning btn-lg ">Student List</button>
</a>


</div>
</div>


</button>

-->



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














<div class="container">
		<div class="box">
	<br>
  <br>
  <br>
  <br>
  <br>

      <div class="link-center ">
      <img src="../img/students.png" class="img-thumbnail" alt="...  " style="width: 20rem; height:20rem">
          <a class="link-primary"href="students/teacher_read.php" display-40>
          <button type="button" class="btn btn-dark btn-lg">

      Student List

          </button>
          </a>
          </div>
<br>
<br>
<br>
<br>
<br>
          <div class="link-center">
          <img src="../img/students.png" class="img-thumbnail" alt="...  " style="width: 20rem; height:20rem">
          <a class="link-primary" href="./subject/subjectlist.php" display-40>
          <button type="button" class="btn btn-dark btn-lg">

      Subject List

          </button>
          </a>
          </div>
     </div>
   </div>
  





<!-- BG V -->




<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>



















</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>