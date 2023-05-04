


<?php include 'n-update.php'; ?>






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


body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.wave {
  position: relative;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-size: cover;
  background-repeat: no-repeat;
}

.wave::before,
.wave::after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 20%;
  background-color: #fff;
  transform-origin: bottom center;
  transform: skewY(-12deg);
  z-index: -1;
}

.wave::before {
  top: -10%;
}

.wave::after {
  bottom: -10%;
}


.container {

  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  /* other styles */
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
  .btn-primary:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.btn-danger:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
  </style>

</head>

<body >
<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>




<br>
<br>
<div class="wave">
<div class="fade-in">

	<div class="container">


	<form action="n-update.php" method="post">
  <header class="text-center text-white" style="font-size:30px; background: linear-gradient(to right, #0099ff 0%, #9933ff 100%); width:auto; height:60px; line-height:60px; border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Update';
        } ?>
    </b>
</header>

    <hr>
 <script>
  if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(function(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;
    console.log(`Latitude: ${latitude}, Longitude: ${longitude}`);
  });
} else {
  console.log("Geolocation is not supported by this browser.");
}
</script>
 
        <label for="" class="form-label"><strong>Name</strong></label>
        <input value="<?=$row['name']?>" type="text" class="form-control" id="name" name="name">
    

    <div class="form-group">
   
        <hr>   
        <label for="exampleInputEmail1" class="form-label text-dark"><b>Roles</b></label>
        <br>
        <!-- HTML code for the select elements -->
        <select class="form-select mb-3" id="role" name="role">
  <option value="none" <?= $row['role'] === 'none' ? 'selected' : '' ?>>None</option>
  <option value="subject teacher" <?= $row['role'] === 'subject teacher' ? 'selected' : '' ?>>Subject Teacher</option>
  <option value="adviser" <?= $row['role'] === 'adviser' ? 'selected' : '' ?>>Adviser</option>
  <option value="registrar staff" <?= $row['role'] === 'registrar staff' ? 'selected' : '' ?>>Registrar Staff</option>
</select>


<select class="form-select mb-3" id="role2" name="role2">
<option value="none" <?= $row['role2'] === 'none' ? 'selected' : '' ?>>None</option>
  <option value="subject teacher" <?= $row['role2'] === 'subject teacher' ? 'selected' : '' ?>>Subject Teacher</option>
  <option value="adviser" <?= $row['role2'] === 'adviser' ? 'selected' : '' ?>>Adviser</option>
  <option value="registrar staff" <?= $row['role2'] === 'registrar staff' ? 'selected' : '' ?>>Registrar Staff</option>
</select>
<select class="form-select mb-3" id="role3" name="role3">
<option value="none" <?= $row['role3'] === 'none' ? 'selected' : '' ?>>None</option>
  <option value="subject teacher" <?= $row['role3'] === 'subject teacher' ? 'selected' : '' ?>>Subject Teacher</option>
  <option value="adviser" <?= $row['role3'] === 'adviser' ? 'selected' : '' ?>>Adviser</option>
  <option value="registrar staff" <?= $row['role3'] === 'registrar staff' ? 'selected' : '' ?>>Registrar Staff</option>
</select>

    </div>

    <hr>

    <input type="text" name="id" value="<?=$row['id']?>" hidden >
		
    <button type="submit" class="btn btn-primary" name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

    <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='index.php'">
  <img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>


</form>

	</div>
  </div>
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