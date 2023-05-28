<?php
session_start();
include "../php/db_conn.php";
include "php/read.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    ?>

<!DOCTYPE html>
<html>
<head>
  <title>SUBJECT LIST</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  

  <style>
    
    .sticky {
    position: fixed;
    top: 0;
    width: 100%;
  }
  thead{
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );
 
     
            text-align: center;

            transition: 0.5s;
            background-size: 200% auto;
                 
            box-shadow: 0 0 20px #eee;
        
          }

       thead:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
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

html, body {
  height:100%;
}

body {
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% ); background-size: cover;
  background-repeat: no-repeat;
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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);/* color of the thumb on hover */
}

.container {
  width:auto;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
 margin-top: 1cm;
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

.container form {

	padding: 20px;
	border-radius: 10px;

  background-color: white;
  
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
  background-color:  white;
  width:100%;
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
    position: sticky;
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
button:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}

.img-fluid:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.btn-danger:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.link-primary {

  padding:10px;
}
.zoom-on-hover {
  transition: transform 0.3s ease;
}

.zoom-on-hover:hover {
  transform: scale(1.2); /* Increase the scale value for more zoom */
}
</style>
</head>
<body>

<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="
            
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
                <h5 class="modal-title text-white" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
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

      <?php if (mysqli_num_rows($result)) { ?>
        <form class="" method="get">

  <div  class="input-group mb-3">
  <a href="create.php" title="add new subject">
  <img src="img/user.png" alt="Image Description" class="img-fluid">
</a>

 &nbsp;&nbsp;<input type="text" class="form-control " placeholder="Search subjects" aria-label="Search subjects" aria-describedby="search-btn" name="search">
  </div>


  <?php
      require "./php/db_conn.php";
          $teacherid = $_SESSION['username'];

          // Check if a search query is present
          if(isset($_GET['search'])) {
              $search = $_GET['search'];
              $query = "SELECT * FROM subjects WHERE subjectname LIKE '%$search%' ORDER BY subjectname";
          } else {
              $query = "SELECT * FROM subjects ORDER BY subjectname";
          }

          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
              // Display the table
              ?>
    <div class="table-responsive">
      <div class="table-scrollable">
        <table class="table table-bordered" style="width:900px;">
          <thead class="tetxt-white sticky" style="color:white;
          
">
            <tr>
              <th hidden scope="col">Subject ID</th>
              <th scope="col">Subject Name</th>
              <th hidden scope="col">Subject Teacher Username</th>
              <th class="text-center" scope="col" colspan="2"></th>
            </tr>
          </thead>
          <tbody class="fade-in">
            <?php
                        while ($Row = mysqli_fetch_assoc($result)) {
                            ?>
              <tr>
                <td hidden><?php echo $Row["subjectid"]; ?></td>
                <td><?php echo $Row["subjectname"]; ?></td>
                <td hidden><?php echo $Row["teacherid"]; ?></td>
                <td class="text-center">
                  <a href="update.php?id=<?php echo $Row['id']; ?>" class="btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Subject Name">
                    <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
                  </a>
            







                          
             <div class="modal fade" id="deleteModal<?php echo $Row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $Rows['id']; ?>" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header " style=" 
         
         
         background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
            <h5 class="modal-title" id="deleteModalLabel<?php echo $Row['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p> <b></b>
             
               <br> Are you sure you want to delete <br> <b> <?php echo $Row['subjectname']; ?> Subject?</b>

            </p>
            <form class="delete" action="delete_sub.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $Row['id']; ?>">
               <div class="mb-3">
                  <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
                  <input type="password" class="form-control" placeholder="input password" id="password" name="password" required>
               </div>
               <button type="submit" class="btn" name="delete">
               <img style="width:40px;" src="img/discard.png" class="img-fluid" alt="Description of image">



               </button>
            </form>
         </div>
      </div>
   </div>
</div>
                </td>
              </tr>
            <?php
                        }
              ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php
          } else {
            echo "<td> <img style='width:900px;' src='img/noresult.png' alt='No Results'></td>";
        }
        
      }
}
  ?>
</form>

  </div>
  
  <?php if (isset($_GET['success'])) { ?>
  <div class="modal" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white"  style="  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
          <h5 class="modal-title" id="successModalLabel">Success!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><?php echo $_GET['success']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <script>
    var successModal = new bootstrap.Modal(document.getElementById('successModal'), {
      keyboard: false
    });
    successModal.show();
  </script>
<?php
}
?>

<?php if (isset($_GET['error'])) { ?>
  <div class="modal" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-white" style="
        
        
        background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
          <h5 class="modal-title" id="errorModalLabel">Oops!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><?php echo $_GET['error']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <script>
    var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {
      keyboard: false
    });
    errorModal.show();
  </script>
<?php } ?>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
