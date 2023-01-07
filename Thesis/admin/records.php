<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
body {
  /*background-image: url('../img/back.jpg');*/
             /* Full height */
  height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
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
        <a class="nav-link" href="users.php">Users</a>
      </li>
  
    </ul>

	
  </div>
</nav>
<div class="title">RECORDS</div>
<div class="subjectlist">










</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>