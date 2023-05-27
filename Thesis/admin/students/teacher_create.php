<?php 
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>ADD NEW STUDENT</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <style>
html, body {
  height: 100%;
}

body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-repeat: no-repeat;
  background-size: cover;
}

.container {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	background-color: white;
	width: 1000px;
}

.form-control {
	width: 200px;
}

.box {
	width: 750px;
}

.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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

.thead {
	font-size: 10px;
}

.nav-item {
	color: black;
}

.subjectlist {
	margin-left: 5rem;
	margin-top: 5rem;
}

.studentlist {
	margin-left: 20rem;
	margin-top: 5rem;
}

.button {
	margin-left: 5rem;
	margin-top: 11rem;
}

.button1 {
	margin-left: 5rem;
	margin-top: 9.5rem;
}

.title {
	margin-left: 40rem;
	margin-top: 1rem;
	font-size: 3.5rem;
}

.text1 {
	margin-left: 23rem;
	margin-top: -20rem;
	width: 45rem;
	height: 10rem;
}

.text2 {
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

#myVideo {
	width: 100vw;
	height: 100vh;
	object-fit: cover;
	position: fixed;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	z-index: -1;
}

.skrol {
	height: 150px;
	overflow-y: auto;
	padding-right: 20px; /* Add padding to the right side of the element */
}

/* For webkit-based browsers */
.skrol::-webkit-scrollbar {
	width: 10px;
}

.skrol::-webkit-scrollbar-track {
	background-color: #f1f1f1;
}

.skrol::-webkit-scrollbar-thumb {
	background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
	border-radius: 5px;
}

/* For other browsers */
.skrol {
	scrollbar-width: thin;
}

.skrol::-webkit-scrollbar-track {
	background-color: #f1f1f1;
}

.skrol::-webkit-scrollbar-thumb {
	background-color: #888;
	border-radius: 5px;
}

.btn-primary:hover img,
.btn-danger:hover img {
	transform: scale(1.2);
	transition: transform 0.5s ease;
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

label {
	text-align: left !important;
}

/* Responsive Styles */

@media screen and (max-width: 1200px) {
	.container form {
		width: 90%;
	}
	.box {
		width: 90%;
	}
	.title {
		margin-left: 2rem;
	}
	.text1,
	.text2 {
		margin-left: 2rem;
	}
}

@media screen and (max-width: 768px) {
	.container form {
		width: 80%;
	}
	.box {
		width: 80%;
	}
	.title {
		margin-left: 1rem;
	}
	.text1,
	.text2 {
		margin-left: 1rem;
	}
}

@media screen and (max-width: 576px) {
	.container form {
		width: 95%;
	}
	.box {
		width: 95%;
	}
	.title {
		margin-left: 0.5rem;
		font-size: 2rem;
	}
	.text1,
	.text2 {
		margin-left: 0.5rem;
		width: 90%;
	}
}
</style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





<!--  CRUD AREA -->
<br>
<div class="fade-in text-left">

<div class="container text-left">

<form action="php/create.php"
      method="post">

<div class=" text-white   text-center p-2 mb-4" style="font-size:24px;
border-radius:20px;
background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
">
    <label class="mb-0" style="">
  <?php echo isset($_GET['error']) ? 'RETRY' : '<b>ADD NEW STUDENT </b>' ?>
</label>


</div>


<?php if (isset($_GET['error'])) { ?>
  <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#errorModal">
    Open Error Modal
  </button>

  <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content" >
        <div class="modal-header" style="
      
      background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
          <h5 class="modal-title text-white" id="errorModalLabel">Oops!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark">
  <div class="text-dark alert alert-danger bg-transparent" role="alert">
    <?php echo $_GET['error']; ?>!
  </div>
</div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
      errorModal.show();
    });
  </script>
<?php } ?>

<hr>
<div class="skrol "style="height: 320px; overflow-y: auto;" >
<div class="form-group ">
<div class="row">
  <div class="col-md-4">
    <label hidden for="adviser_id" class="form-label warning text-left"><b>ID Number</b></label>
    <input hidden style="width:100%;" type="text" class="form-control mb-3" id="id" placeholder="ex: 12913937" name="id">
    
    <label for="adviser_id" class="form-label warning text-left"><b>ID Number</b></label>
    <input style="width:100%;" type="text" class="form-control mb-3" id="idnumber" placeholder="ex: 12913937" name="idnumber">
  </div>

  <div class="col-md-4">
    <div class="form-group mb-3">
      <label for="lrnnumber" class="form-label warning text-left"><b>LRN no.</b></label>
      <input style="width:100%;" type="text" class="form-control" id="lrnnumber" placeholder="ex: 12913937" name="lrnnumber">
    </div>
  </div>
</div>





<div class="row">
  <div class="col-md-4">
    <div class="form-group">
      <label for="firstname" class="form-label text-left"><b>First Name</b></label>
      <input style="width:100%;" type="text" class="form-control" id="firstname" placeholder="ex: Reyris" name="firstname" oninput="checkFullName()">
    </div>
  </div>

  <div class="col-md-4">
    <div class="mb-3">
      <label for="middlename" class="form-label text-left"><b>Middle Name</b></label>
      <input style="width:100%;" type="text" class="form-control" id="middlename" placeholder="ex: Perolino" name="middlename" oninput="checkFullName()">
    </div>
  </div>

  <div class="col-md-4">
    <div class="mb-3">
      <label for="lastname" class="form-label text-left"><b>Last Name</b></label>
      <input style="width:100%;" type="text" class="form-control" id="lastname" placeholder="ex: Milmao" name="lastname" oninput="checkFullName()">
    </div>
  </div>
</div>


<div class="mb-3   1">
  <label for="exampleInputEmail1" class="form-label text-left"><b>Full Name</b></label>
  <input style="width:100%;"
    type="fullname" 
    class="form-control" 
    id="fullname" 
    placeholder="ex: Milmao Reyris Perolino"
    name="fullname"
    oninput="checkFullName()"
  >
  <small id="name-comment" class="text-danger d-none">Please input the same value</small>
</div>

<script>
  function checkFullName() {
    const firstName = document.getElementById("firstname").value.trim();
    const middleName = document.getElementById("middlename").value.trim();
    const lastName = document.getElementById("lastname").value.trim();
    const fullName = document.getElementById("fullname").value.trim();
    const fullNameWithoutSpaces = `${firstName} ${middleName} ${lastName}`.trim();

    const comment = document.getElementById("name-comment");
    const isFullNameEqual = fullNameWithoutSpaces === fullName;

    if (fullName && fullNameWithoutSpaces && !isFullNameEqual) {
      comment.classList.remove("d-none");
    } else {
      comment.classList.add("d-none");
    }
  }
</script>


<div class="row">
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="suffix" class="text-left"><b>Suffix</b></label>
      <select style="width:100%" name="suffix" id="suffix" class="form-control">
        <option value=""><b>None</b></option>
        <option value="Jr."><b>Jr.</b></option>
        <option value="Sr."><b>Sr.</b></option>
      </select>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="gender" class="text-left"><b>Gender</b></label>
      <select style="width:100%" name="gender" id="gender" class="form-control">
        <option value="Male"><b>Male</b></option>
        <option value="Female"><b>Female</b></option>
      </select>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="mb-3">
      <label for="birthplace" class="form-label text-left"><b>Birth Place</b></label>
      <input style="width:100%;" type="text" class="form-control" id="birthplace" placeholder="Sto. Nino, Kolambugan Lanao del Norte" name="birthplace">
    </div>
  </div>

  <div class="col-md-4">
  <div class="mb-3">
    <label for="birthday" class="form-label text-left"><b>Birth Date</b></label>
    <input style="width:100%;" type="date" class="form-control" id="birthday" placeholder="ex: August 17, 2000" name="birthday" onchange="calculateAge()">
  </div>
</div>

<div class="col-md-4">
  <div class="mb-3">
    <label for="age" class="form-label text-left"><b>Age</b></label>
    <input disabled style="width:100%;" type="text" class="form-control" id="age" placeholder="ex: 22" name="age">
  </div>
</div>

<script>
  function calculateAge() {
    var birthdayInput = document.getElementById('birthday');
    var ageInput = document.getElementById('age');
  
    // Get the selected birth date
    var birthDate = new Date(birthdayInput.value);
  
    // Calculate the age
    var today = new Date();
    var age = today.getFullYear() - birthDate.getFullYear();
  
    // Adjust the age based on the month and day
    if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
      age--;
    }
  
    // Set the calculated age in the age input field
    ageInput.value = age;
  }
</script>

</div>



  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Address</b></label>
    <input style="width:100%;"
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3   1">
    <label for="exampleInputEmail1" class="form-label text-left"><b>Parent/Guardian</b></label>
    <input style="width:100%;"
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Vergel Villagomez"
    name="parent">

  </div>
 
  <?php
include "../php/db_conn.php";

// Assuming you have an active database connection.

// Retrieve the school year value from the database
$query = "SELECT schoolyear FROM users  LIMIT 1";
$result = mysqli_query($conn, $query);

// Check if the query executed successfully
if ($result) {
    // Fetch the row from the result set
    $row = mysqli_fetch_assoc($result);

    // Get the value of the 'sy' column
    $schoolYear = $row['schoolyear'];

    // Display the value in the input field
    echo '<div class="form-group mb-3">
            <label hidden for="" class="form-label warning text-left" ><b>School Year</b></label>
            <input  hidden style="width:100%;" type="text" class=" form-control" id="syear" placeholder="ex: 12913937" name="syear" value="' . $schoolYear . '">
          </div>';
} else {
    // Handle the case when the query fails
    echo "Error retrieving school year from the database.";
}

// Close the database connection
mysqli_close($conn);
?>

<div class="row">
  <div class="col-md-4">
    <div class="form-group mb-3">
      <label class="mb-2 text-left" for="grade"><b>Year Level</b></label>
      <select style="width:100%" name="grade" id="grade" class="form-control">
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group mb-3">
      <label class="mb-2 text-left" for="section"><b>Section</b></label>
      <select class="form-control" id="section" name="section">
        <option value="">Select Section</option>
        <?php
          // Assuming you have a database connection
          require "./php/db_conn.php";
          $result = mysqli_query($conn, "SELECT name FROM section ORDER BY name");
          while ($row = mysqli_fetch_array($result)) {
            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
          }
        ?>
      </select>
    </div>
  </div>
</div>




<script>
  // Get all select elements with class "form-control"
const selectElements = document.querySelectorAll('.form-control');

// Loop through each select element and add an event listener for when the value changes
selectElements.forEach(select => {
  select.addEventListener('change', () => {
    // Store the selected value in local storage using the select element's id as the key
    localStorage.setItem(select.id, select.value);
  });

  // Retrieve the previously selected value from local storage and set it as the selected value
  const selectedValue = localStorage.getItem(select.id);
  if (selectedValue) {
    select.value = selectedValue;
  }
});

</script>











</div>


</div>
<span style="font-size:10.5px;"> "To ensure successful submission, take a moment to verify the accuracy of the details you've provided." </span>

<br>

<button title="submit" type="submit" class="btn btn-primary" 
name="create" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button title="cancel" type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='index.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>


</div>











 

</form>

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



<script>
  // Get all select elements with class "form-control"
const selectElements = document.querySelectorAll('.form-control');

// Loop through each select element and add an event listener for when the value changes
selectElements.forEach(select => {
  select.addEventListener('change', () => {
    // Store the selected value in local storage using the select element's id as the key
    localStorage.setItem(select.id, select.value);
  });

  // Retrieve the previously selected value from local storage and set it as the selected value
  const selectedValue = localStorage.getItem(select.id);
  if (selectedValue) {
    select.value = selectedValue;
  }
});

</script>


</body>
</html>
<?php }else{
	header("Location: admin_create.php");
} ?>