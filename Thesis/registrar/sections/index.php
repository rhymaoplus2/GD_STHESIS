<?php 
   include "./php/read.php";
   session_start();
   include "./php/db_conn.php";

   if (isset($_SESSION['username']) && isset($_SESSION['id'])) 
                                                          {   ?>





<!DOCTYPE html>
<html>
<head><title>Section List</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

  <header>

</header>

<style>
  

  html, body {
  height: 100%;
  
}
body {
 background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );
  background-repeat: no-repeat;

}

.btn{

  background-color: transparent;
  border: none;
}

  .container {
width:600px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  background-color: white;

  margin-top:1cm;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius:20px;
}

.container form {

 
}
.box {
	width:100px;
}
.container table {
  width: 1900px;
	border-radius: 10px;
  border:10px;
  background-color: white;
  width : 550px;
}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  background-color: white;
  border-radius: 30px;
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
  .pagination .page-link {
  color: #fff !important;
  background-color: #333 !important;
  border-color: #333 !important;
}

.pagination .page-item.active .page-link {
  background-color: #000 !important;
  border-color: #000 !important;
}

  .btn img {
    width: 30px;
    height: 30px;
  }
  #refresh-img {
  transition: all 0.2s;
}

.sticky {
    position: sticky;
    top: 0;

  }
  
.img-fluid:hover {
  transform: scale(1.2);
}
#search {
  border-width: 2px;
}
.table-scrollable{
  height: 300px;
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
.zoom-button {
 
}

.zoom-image {
  transition: transform 0s ease;
}

.zoom-button:hover .zoom-image {
  transform: scale(1.5);
}


.zoom-image {
  transition: transform 0.3s ease;
}

.zoom-link:hover .zoom-image {
  transform: scale(1.2);
}


  </style>
</head>

<body>

 <!-- Logout Modal -->
 <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="
            
            
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
                <h5 class="modal-title text-white" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="../img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" onclick="openBackupWindow()">
                </a>
            </div>
        </div>
    </div>
</div>

<div class="header" id="myHeader">
<?php include_once('header.php');?>
</div>



    <div class="container ">
<div class="text text-center">
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="
        
        
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% ); rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
          <h5 class="modal-title text-white" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="--bs-icon-color: white;"></button>
        </div>
        <div class="modal-body">
          <?php echo $_GET['success'];?>
        </div>
       
      </div>
    </div>
  </div>
<?php ?>


  </div>
  <script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
      keyboard: false
    });
    successModal.show();
  </script>
<?php }
 ?>
    <?php if (mysqli_num_rows($result)) { ?>
    
 


<br>
        <div class=" text-start">

<div class="text-start mb-3">
<a class="link-primary me-2 zoom-link" data-bs-toggle="modal" data-bs-target="#sectionModal">
  <img src="img/add.gif" alt="Description of image" style="width: 35px;" class="img-fluid zoom-image">
</a>
    </div>
  <div class="modal fade" id="sectionModal" tabindex="-1" aria-labelledby="sectionModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white" style="
 background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% ); rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
          <h5 class="modal-title" id="sectionModalLabel">Add New Section</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="POST" action="submit.php">
            <div class="mb-3">
              <label for="gradeInput" class="form-label">Grade Level</label>
              <input type="text" class="form-control" name="grade" required>
            </div>
            <div class="mb-3">
              <label for="sectionInput" class="form-label">Section Name</label>
              <input type="text" class="form-control" name="section" required>
            </div>
            <button type="submit" name="submit" class="btn btn-link zoom-link" style="padding: 5px;">
            <img src="img/ok.png" alt="Description of image" style="width: 30px;" class="img-fluid zoom-image">
  </button>
          </form>
        </div>
     
      </div>
    </div>
  </div>


  <div class="table-scrollable">
        <?php
require "./php/db_conn.php";


        // Query to get results for the current page
        $query = "SELECT id, grade, name FROM section ORDER BY grade,name";
        $result = mysqli_query($conn, $query);

        // Display results in table
        ?>

<table class="table table-bordered">
  <thead class="sticky">
    <tr class="text-white text-center" style="
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
      <th scope="col" colspan="2">GRADE AND SECTIONS</th>
    </tr>
  </thead>
  <tbody>
    <?php
            while ($row = mysqli_fetch_assoc($result)) {
                $section_id = $row['id'];
                ?>
      <tr>
        <td class=""><b>Grade <?php echo $row["grade"]; ?> - <?php echo $row["name"]; ?></b></td>
        <td class="text-center">
         
        <a href="update.php?name=<?php echo $row['name']; ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Subject Teachers">

        <img src="img/teacher.png" class="zoom-image" alt="Image">
            </a>
                   
        <a href="subject.php?name=<?php echo $row['name']; ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Subjects">

<img src="img/subjects.png" class="zoom-image" alt="Image">
    </a>

    <a href="adviser.php?name=<?php echo $row['name']; ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Assign Adviser">

<img src="img/adviser.png" class="zoom-image" alt="Image">
    </a>
          <script>
            function filterTeachers(input) {
              // Get all teacher items
              var teacherItems = document.querySelectorAll(".teacher-item");

              // Loop through all teacher items and show/hide based on search input
              for (var i = 0; i < teacherItems.length; i++) {
                var teacherId = teacherItems[i].querySelector("a").getAttribute("data-teacher-id");
                var searchValue = input.value.toLowerCase();
                if (teacherId.includes(searchValue)) {
                  teacherItems[i].style.display = "";
                } else {
                  teacherItems[i].style.display = "none";
                }
              }
            }
          </script>

        </td>
      </tr>
    <?php
            }
        ?>
  </tbody>
</table>

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

</script>
</body>
<?php
    }
}
?>
</html>

  
                                                          
