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
  
</div>




















</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>