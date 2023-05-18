


<?php include 'php/update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Update GRADE</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>



a {
  text-decoration: none;
  font-size: 16px;
  transition: all 0.2s ease-in-out;
}

a:hover {
  font-weight: bold;
}

a img {
  transition: all 0.2s ease-in-out;
}

a:hover img {
  transform: scale(1.2); /* Increase the image size by 20% on hover */
}
html, body {
    height:100%;
  }
  
  
  body {
    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
    background-repeat: no-repeat;
  }
  
  
.b::-webkit-scrollbar {
  width: 10px; /* Width of the scrollbar */
}

.b::-webkit-scrollbar-track {
  background-color: #f1f1f1; /* Color of the scrollbar track */
}

.b::-webkit-scrollbar-thumb {
  background-color: #888; /* Color of the scrollbar thumb */
  border-radius: 5px; /* Rounded corners of the scrollbar thumb */
}

.b::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Color of the scrollbar thumb on hover */
}

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
  border-color: #f1f1f1;
}

.container form {
		padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;
  margin: 0 auto;
  width:500px;
  margin-top: 1cm;
}
.box {
	width: 100%;
  
}
.container table {
	padding: 20px;
	border-radius: 10px;
   
  background-color:white;
  border: 10px;
}
.border {
	padding: 15px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color:white;
 
  border: 10px;
}

.link-right {
	display: flex;
	justify-content: flex-end;
}


.link-center {
	display: flex;
	justify-content: flex-end;
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
  .red-text {
  color: red;
}

.cell-border {
  border: 1px solid black;
}


  td.disabled {
  pointer-events: none;
  color: black; /* Change color to something other than red */
}

.top-container {
    background-color: white;
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
  .text-center {
  text-align: center;
 /* default border color */
}

.failed {
  color: red;
}

.failed + .text-center {
  border-color: black; /* override border color for cells with red text */
}
  .sticky + .content {
    padding-top: 102px;
  }

  .addbutton
  {
    margin-left:80%;
  }
  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
  }
  
  .btn-primary:hover {
    background-color: #0062cc;
    border-color: #005cbf;
  }
  #rotate-btn:hover img {
  transform: scale(1.2);
  transition: all 0.2s ease-in-out;
}
.btn-transparent:active {
  outline: none;
  border: none;
}
.btn-transparent:focus, 
.btn-transparent:hover {
  box-shadow: none;
  border: none;
}
#rotate-btn {
  transition: transform 0.5s;
}

#rotate-btn.clicked {
  transform: rotate(360deg);
}
/* CSS */
#rotate-btn {
  position: relative;
}

#rotate-btn:active img {
  animation: rotate .3s linear infinite;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

input::placeholder {
  color: gray;
  font-style: italic;
}
.ff {

  max-width: 100%;
}
.bold {
  font-weight: bold;
}

.tooltip .tooltip-inner,
.tooltip.tooltip-black .tooltip-inner {
  background-color: #000;
  color: #fff;
}

.tooltip .tooltip-arrow,
.tooltip.tooltip-black .tooltip-arrow {
  border-bottom-color: #000;
}

  </style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>


<div class="text text-center">
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
          <h5 class="modal-title text-white" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-icon-color: white;"></button>
        </div>
        <div class="modal-body">
          <?php echo $_GET['success'];?>
        </div>
       
      </div>
    </div>
  </div>
<?php } ?>
	<div class="container">
		<form action="php/update10.php" 
		      method="post">
            
		 
           <h4 class="fs-6 ">Student Name: </h4> <b> <?=$row['studentname']?></b><br><br>
           <h4 class="fs-6 ">Subject: </h4> <b> <?=$row['subjectname']?></b> <hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>



           <div class="mb-3">
           <label for="exampleInputEmail1" class="form-label"><b> Grade </b></label>
<select name="grade" id="grade" class="form-control">
    <?php
    for ($i=50; $i<=100; $i++) {
        if (isset($row['grade']) && $row['grade'] == $i) {
            // If grade value is already set, select it in the dropdown
            echo '<option value="'.$i.'" selected>'.$i.'</option>';
        } else {
            // Otherwise, display the grade option
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
    }
    ?>
</select>



	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
                  <br>


<button type="submit" class="btn btn-primary" 
name="update" id="submit" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 
<button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="goBack()">
  <img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

<script>
function goBack() {
  window.history.back();
}
</script>



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