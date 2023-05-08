<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
 html, body {
  height: 100%;
}


body {
  background-image: linear-gradient(-225deg, #9EFBD3 0%, #57E9F2 48%, #45D4FB 100%);
  background-repeat: no-repeat;
}

  .container {
  width: 1000px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.formx {
	width: auto;
	padding: 20px;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 900px;
  
}
.container table {
	padding: 20px;
	border-radius: 10px;
	
  border:10px;
  background-color: white;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  border-radius: 30px;
  background-color: white;

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

.img-fluid:hover {
  width: 40px; /* or any other desired size */
}
.modal
{
 border: 100px;
 background-color: ;
 
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
  .btn-transparent {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:hover {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:focus {
    background-color: transparent;
    border: none;
    box-shadow: none;
  }

  .btn img {
    width: 30px;
    height: 30px;
  }


  #refresh-img {
  transition: all 0.2s;
}
.btn:hover img {
    transform: scale(1.2);
}
#refresh-img:hover {
  transform: scale(1.2);
}
.zoom:hover img {
  transform: scale(1.2);
}
#search {
  border-width: 2px;
}
.page-item a.page-link {
  opacity: 0.5;
}
.page-item.active a.page-link {
  font-weight: bold;
  opacity: 1;
}
td a {
  text-decoration: none;
  color: black;
}


td a:hover {
  font-weight: bold;
  color: black;
}

.table-scrollable{
  height: 350px;
  overflow-y: auto;
  scroll-behavior: smooth;
}
.table-scrollable::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

.table-scrollable::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

.table-scrollable::-webkit-scrollbar-thumb {
  background: #888; /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}

.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}
.table-scrollable {
  overflow-y: scroll; /* Make the container scrollable */
}

.table-scrollable thead {
  position: sticky; /* Make the header sticky */
  top: 0; /* Position the header at the top */
  z-index: 1; /* Make the header stay on top of the rows */
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
a.btn:hover img {
    transform: scale(1.2);
}
#rolling-image {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  z-index: 9999; /* or any higher value than other elements on the page */
}


  </style>
</head>

<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>

<div class="container" >
		<div class="box">
      
    <div class="content">
   <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
        <audio controls autoplay  hidden>
<source src="../voice/success.mp3" type="audio/mpeg">
</audio>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border">
             
    <form method="get" id="my-form" class="">
    <div class="d-flex justify-content-between align-items-center">
<!-- Button trigger modal -->
<button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#print-modal">
  <img src="img/print.png" class="img-fluid" alt="Description of image" style="width:30px;">
</button>
      <h3 class="text-dark"><i>My Students</i></h3>
<!-- Modal -->
<div class="modal fade" id="print-modal" tabindex="-1" aria-labelledby="print-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content text-center">
      <div class="modal-header text-white" style="   background-image: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);">
        <h5 class="modal-title" id="print-modal-label">Print Masterlist</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
  

      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/masterlist3.gif" class="d-block w-100" alt="...">
    </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="modal-body text-center">
        <iframe src="advisory.php" id="print-frame" style="display:none;"></iframe>
      </div>
<div class="text-center">
      <a class="btn btn-primary text-center" 
style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;" onclick="printIframe();">
<img style="width:50px;" src="img/print.png" class="img-fluid rotate-on-hover" alt="submit" title="print">
      </a>

 
      </div>


    </div>
  </div>
</div>

<script>
function printIframe() {
  var iframe = document.getElementById("print-frame");
  iframe.contentWindow.print();
}
</script>


  <div class="text-center">
  <a class="zoom" href="#" id="modalLink"><img style="width:60px; margin-right: 10px;" src="img/msu.png" class="img-fluid" alt="Description of image"></a>
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GUIDE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img1.jpg" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="img2.jpg" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="img3.jpg" class="d-block w-100" alt="Image 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>


</div>
<script>
  var myModal = new bootstrap.Modal(document.getElementById('myModal'));
  document.getElementById('modalLink').addEventListener('click', function () {
    myModal.show();
  })
</script>
 
  </div>
</div>


<hr>
<script>
document.getElementById('gender').addEventListener('change', function() {
  document.getElementById('my-form').submit();
});

// Get the select element
const genderSelect = document.getElementById('gender');

// Check if there's a saved value in localStorage
const savedGender = localStorage.getItem('selectedGender');

if (savedGender) {
  // Set the select element's value to the saved value
  genderSelect.value = savedGender;
}

// Add an event listener to the select element
genderSelect.addEventListener('change', function() {
  // Save the selected value to localStorage
  localStorage.setItem('selectedGender', this.value);
});

</script>

        <div class="fade-in">
<div class="table-scrollable">

            <table class="table table-bordered ">
            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           
   

  <thead class="text-white" style="   background-image: linear-gradient(-225deg, #473B7B 0%, #3584A7 51%, #30D2BE 100%);">
    <tr>
      <th scope="col"><h5 >Student Name</h5></th>
      <th scope="col" class="text-center"><h5 >LRN No.</h5></th>
      <th scope="col" class="text-center"><h5 >ID No.</h5></th>
      <th scope="col" class="text-center"><h5>Gender</h5></th>

    </tr>
  </thead>
  <tbody>
    <?php
      require "./php/db_conn.php";
      $name = $_SESSION["name"];
      $gender = isset($_GET['gender']) ? $_GET['gender'] : '';
      $query = "SELECT * FROM students WHERE adviser_id = '$name' ORDER BY lastname";
      if ($gender) {
        $query .= " AND gender = '$gender'";
      }
      $result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) > 0) {
        while ($Row = mysqli_fetch_assoc($result)) {
          ?>
        <tr style="     background: #f2f2f2">
         <td style="width:50%; ">
         <a type="button" class="  mb-3" data-bs-toggle="modal" data-bs-target="#subject1Modal<?= $Row['lrnnumber'] ?>">
  <b><?= $Row["lastname"] ?>, <?= $Row["firstname"] ?> <?= substr($Row["middlename"], 0, 1) ?>.</b>
        </a>

<div class="modal fade" id="subject1Modal<?= $Row['lrnnumber'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-dark" style="  background-image: linear-gradient(-225deg, #9EFBD3 0%, #57E9F2 48%, #45D4FB 100%);">
        <h5 class="modal-title" id="exampleModalLabel"><?= $Row['fullname'] ?> - Personal Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="view.php?lrnnumber=<?= $Row['lrnnumber'] ?>" width="100%" height="500" frameborder="0"></iframe>
      </div>
    </div>
  </div>
</div>


  </td>


        </button>
            <td  class="text-center"><?php echo $Row["lrnnumber"]; ?></td>
            <td  class="text-center"><?php echo $Row["idnumber"]; ?></td>
            <td class="text-center"><?php echo $Row["gender"]; ?></td>
        
          </tr>
          <?php
        }
      }
    }
  }
}

    ?>
  </tbody>
</table>







</div>
   </div>
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
<?php 

  

