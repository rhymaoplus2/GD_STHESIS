<?php 
   session_start();
   include "../php/db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <style>


html, body {
  height: 100%;
}


body {
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
  background-repeat: no-repeat;
}


.container {

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
  background-color: white;
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
  height: 300px;
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
  background-color: #888;
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
      </style>
</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>



<video autoplay muted loop id="myVideo">
  <source src="../bg/students.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

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


<br>
<div class="fade-in">
<div class="container mb-3">
  
    <form action="./php/create.php" method="post" >
   
    <div class="text-center text-white p-2 mb-4" style="font-size:24px; background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%); border-radius: 10px;">
  <label class="mb-0"><?php echo isset($_GET['error']) ? 'RETRY' : 'ADD NEW STUDENT'; ?></label>
</div>


<?php if (isset($_GET['error'])) { ?>
  <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#errorModal">
    Open Error Modal
  </button>

  <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-modal="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="errorModalLabel">Oops!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  <div class="text-white alert alert-danger bg-transparent" role="alert">
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

<div class="skrol"style="height: 150px; overflow-y: auto;">
  <label for="" class="form-label warning"><b>ID no.</b></label>
  <input type="text" class="form-control mb-3" id="idnumber" placeholder="ex: 12913937" name="idnumber">

<div class="form-group mb-3">
    <label for="" class="form-label warning" ><b>LRN no.</b></label>
    <input 
    type="text" 
    class="form-control" 
    id="lrnnumber" 
    placeholder="ex: 12913937"
    name="lrnnumber">
  </div>




  <div class="mb-3">
  <label for="adviser_id" class="form-label warning"><b>ADVISER</b></label>
  <select class="form-select" id="adviser_id" name="adviser_id">
    <?php
      // Replace "your_database_name" and "your_table_name" with your actual database and table names
      require "./php/db_conn.php";

      $result = mysqli_query($conn, "SELECT name FROM users WHERE role='adviser' OR role2='adviser'");
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
      }
      mysqli_close($conn);
    ?>
  </select>
</div>





<div class="form-group">
  <label for="exampleInputEmail1" class="form-label"><b>First Name</b></label>
  <input 
    type="text" 
    class="form-control" 
    id="firstname" 
    placeholder="ex: Reyris"
    name="firstname"
    oninput="checkFullName()"
  >
</div>
<br>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"><b>Middle Name</b></label>
  <input 
    type="middlename" 
    class="form-control" 
    id="middlename" 
    placeholder="ex: Perolino"
    name="middlename"
    oninput="checkFullName()"
  >
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"><b>Last Name</b></label>
  <input 
    type="lastname" 
    class="form-control" 
    id="lastname" 
    placeholder="ex: Milmao"
    name="lastname"
    oninput="checkFullName()"
  >
</div>

<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label"><b>Full Name<b></label>
  <input 
    type="fullname" 
    class="form-control" 
    id="fullname" 
    placeholder="ex: Milmao Reyris Perolino"
    name="fullname"
    oninput="checkFullName()"
  >
  <small id="name-comment" class="text-danger d-none">Please input the same Name</small>
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




  <div class="from-group mb-3">
                                <label class=" mb-3"for=""><b>Suffix</b></label>
                                <select name="suffix" id="suffix" class="form-control">
                                    <option value=" "><b>None</b></option>
                                    <option value="Jr."><b>Jr.</b></option>
                                    <option value="Sr."><b>Sr.</b></option>
                                </select>
                            </div>



                       <div class="from-group mb-3">
                                <label class=" mb-3" for=""><b>Gender</b></label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male"><b>Male</b></option>
                                    <option value="Female"><b>Female</b></option>
                                </select>
                            </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Birth Place </b></label>
    <input 
    type="text" 
    class="form-control" 
    id="birthplace"
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="birthplace">

  </div>
  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label"><b>Birth Date</b></label>
    <input 
    type="date" 
    class="form-control" 
    id="birthday" 
    placeholder="ex: August 17 2000"
    name="birthday">

  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    <input 
    type="age" 
    class="form-control" 
    id="age" 
    placeholder="ex: 22"
    name="age">

  </div>


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input 
    type="address" 
    class="form-control" 
    id="address" 
    placeholder="ex: Sto. Nino, Kolambugan Lanao del Norte"
    name="address">

  </div>


  
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Parent/Guardian</label>
    <input 
    type="parent" 
    class="form-control" 
    id="parent" 
    placeholder="ex: Vergel Villagomez"
    name="parent">

  </div>
 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">School Year</label>
    <input 
    type="" 
    class="form-control" 
    id="syear" 
    placeholder="ex: 2022-2023"
    name="syear">
  </div>



  <div class="from-group mb-3">
                                <label class="mb-2" for="">Year Level</label>
                                
                                <select name="grade" id="grade" class="form-control">
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>



  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Section Name</label>
    <input 
    type="" 
    class="form-control" 
    id="section" 
    placeholder="ex: Lilac"
    name="section">
  </div>

  <script>
  // Get the input elements
  const idnumberInput = document.getElementById("idnumber");
  const lrnnumberInput = document.getElementById("lrnnumber");
  const adviserIdInput = document.getElementById("adviser_id");
  const firstnameInput = document.getElementById("firstname");
  const middlenameInput = document.getElementById("middlename");
  const lastnameInput = document.getElementById("lastname");
  const suffixInput = document.getElementById("suffix");
  const genderInput = document.getElementById("gender");
  const birthplaceInput = document.getElementById("birthplace");
  const birthdayInput = document.getElementById("birthday");

  // Load the saved values from Local Storage if they exist
  idnumberInput.value = localStorage.getItem("idnumber") || "";
  lrnnumberInput.value = localStorage.getItem("lrnnumber") || "";
  adviserIdInput.value = localStorage.getItem("adviser_id") || "";
  firstnameInput.value = localStorage.getItem("firstname") || "";
  middlenameInput.value = localStorage.getItem("middlename") || "";
  lastnameInput.value = localStorage.getItem("lastname") || "";
  suffixInput.value = localStorage.getItem("suffix") || "";
  genderInput.value = localStorage.getItem("gender") || "";
  birthplaceInput.value = localStorage.getItem("birthplace") || "";
  birthdayInput.value = localStorage.getItem("birthday") || "";

  // Save the input values to Local Storage when they change
  idnumberInput.addEventListener("input", () => {
    localStorage.setItem("idnumber", idnumberInput.value);
  });
  lrnnumberInput.addEventListener("input", () => {
    localStorage.setItem("lrnnumber", lrnnumberInput.value);
  });
  adviserIdInput.addEventListener("change", () => {
    localStorage.setItem("adviser_id", adviserIdInput.value);
  });
  firstnameInput.addEventListener("input", () => {
    localStorage.setItem("firstname", firstnameInput.value);
  });
  middlenameInput.addEventListener("input", () => {
    localStorage.setItem("middlename", middlenameInput.value);
  });
  lastnameInput.addEventListener("input", () => {
    localStorage.setItem("lastname", lastnameInput.value);
  });
  suffixInput.addEventListener("change", () => {
    localStorage.setItem("suffix", suffixInput.value);
  });
  genderInput.addEventListener("change", () => {
    localStorage.setItem("gender", genderInput.value);
  });
  birthplaceInput.addEventListener("input", () => {
    localStorage.setItem("birthplace", birthplaceInput.value);
  });
  birthdayInput.addEventListener("input", () => {
    localStorage.setItem("birthday", birthdayInput.value);
  });
</script>

<!--  
  <div class="mb-3 text-center">
  <label for="subjectteacher1" class="form-label text-danger mb-3"><b>Subject Teachers</b></label>
</div>

  <select class="form-control" id="subjectteacher1" name="subjectteacher1">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  
  
  <select class="form-control" id="subjectteacher2" name="subjectteacher2">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher3" name="subjectteacher3">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>


  <select class="form-control" id="subjectteacher4" name="subjectteacher4">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher5" name="subjectteacher5">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher6" name="subjectteacher6">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher7" name="subjectteacher7">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher8" name="subjectteacher8">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>

  <select class="form-control" id="subjectteacher9" name="subjectteacher9">
  <option value="">Select Subject Teacher</option>
    <?php
      // Assuming you have a database connection
      require "./php/db_conn.php";
      $result = mysqli_query($conn, "SELECT name FROM users WHERE role = 'subject teacher' OR role2 = 'subject teacher'");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
      }
    ?>
  </select>

  <br>


      
    -->
    </div>
    <hr>
    <div class="mb-2 text-center">
  <label for="subjectteacher1" class="form-label text-dark mb-3"><i>Subjects</i></label>
</div>
<hr>
    <div class="skrol"style="height: 100px; overflow-y: auto;">


  <select class="form-control" id="subject1" name="subject1">
  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>
<br>
  <select class="form-control" id="subject2" name="subject2">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>

  <br>
  <select class="form-control" id="subject3" name="subject3">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>

  <br>
  <select class="form-control" id="subject4" name="subject4">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>

  <br>
  <select class="form-control" id="subject5" name="subject5">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>

  <br>
  <select class="form-control" id="subject6" name="subject6">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>


  <br>
  <select class="form-control" id="subject7" name="subject7">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>

  <br>
  <select class="form-control" id="subject8" name="subject8">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>


  <br>
  <select class="form-control" id="subject9" name="subject9">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>


  <br>
  <select class="form-control" id="subject10" name="subject10">  <option value="">Select Subject</option>
    <?php
      // Assuming you have a database connection
      $result = mysqli_query($conn, "SELECT subjectname FROM subjects");
      while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['subjectname'] . "'>" . $row['subjectname'] . "</option>";
      }
    ?>
  </select>
  <script>
  // Get all select elements
  const selectElements = document.querySelectorAll('select.form-control');

  // Restore selected options from local storage on page load
  window.addEventListener('load', () => {
    selectElements.forEach(select => {
      const selectedOption = localStorage.getItem(select.id);
      if (selectedOption) {
        select.value = selectedOption;
      }
    });
  });

  // Save selected option to local storage on change
  selectElements.forEach(select => {
    select.addEventListener('change', () => {
      localStorage.setItem(select.id, select.value);
    });
  });
</script>


</div>



<hr>








<button type="submit" class="btn btn-primary" 
name="create" style="background-color: transparent; 
border: none; border-radius:100%; width:50px; height: 50px;">
<img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

 

          <button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" 
          onclick="location.href='teacher_read.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>


</form>
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
<?php }else{
	header("Location: admin_create.php");
} ?>