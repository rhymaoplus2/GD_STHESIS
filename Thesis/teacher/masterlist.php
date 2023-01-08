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
      body {

}

 
</style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav ">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php" >Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="masterlist.php">Master List</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="records.php">Records</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="reports.php">Reports</a>
      </li>
  
	  <li class="nav-item">
        <a class="nav-link" href="users.php"><?=$_SESSION['name']?></a>
      </li>
  
    </ul>

	
  </div>
</nav>


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






</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>