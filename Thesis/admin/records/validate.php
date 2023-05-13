<?php
session_start();
include "../php/db_conn.php";
include "../php/read.php";

if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    // Fetch section names from the section table
    $query_sections = "SELECT name FROM section";
    $result_sections = mysqli_query($conn, $query_sections);

    // Fetch subject names from the subject table
    $query_subjects = "SELECT subjectname FROM subjects";
    $result_subjects = mysqli_query($conn, $query_subjects);

    // Fetch school years from the schoolyear table
    $query_schoolyears = "SELECT sy FROM schoolyear";
    $result_schoolyears = mysqli_query($conn, $query_schoolyears);

    // Check for section and subject filters
    $selected_section = "";
    $selected_subject = "";
    if (isset($_POST['section'])) {
        $selected_section = $_POST['section'];
    }
    if (isset($_POST['subject'])) {
        $selected_subject = $_POST['subject'];
    }

    // Check for school year filter
    $selected_schoolyear = "";
    if (isset($_POST['schoolyear'])) {
        $selected_schoolyear = $_POST['schoolyear'];
    }

    // Build the SQL query with filters
    $query = "SELECT * FROM grade WHERE 1=1 AND status != '1'";

    if (!empty($selected_section)) {
        $query .= " AND section = '$selected_section'";
    }

    if (!empty($selected_subject)) {
        $query .= " AND subjectname = '$selected_subject'";
    }

    if (!empty($selected_schoolyear)) {
        $query .= " AND sy = '$selected_schoolyear'";
    }

    // Group the data by the desired column
    $query .= " GROUP BY session";

    $result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <style>

html, body {
    height:100%;
  }
  
  
  body {
    background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
    background-repeat: no-repeat;
  }
  
  
  
    .container {
    width: 1000px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: auto;
  
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
    width: auto;
  
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
  
  #refresh-img:hover {
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
  
  @keyframes fadeIn {
    0% {
      opacity: 0;
    }
    100% {
      opacity: 1;
    }
  }
  .table-bordered td {
    border: 1px solid black;
  }
  a{
  text-decoration: none;
}
.zoom-image img {
  transition: transform 0.3s;
}

.zoom-image:hover img {
  transform: scale(1.4);
}

  </style>
</head>
<body>
  <div class="header" id="myHeader">
    <?php include_once('header.php');?>
  </div>
  
  <br>
  <div class="text text-center">
<?php if (isset($_GET['success'])) { ?>
  <div class="modal fade show" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
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
</div>

  <div class="container">
    <div class="border">
    <a href="./" class="zoom-image" title="back">
  <img src="img/back.png" alt="Description of the image" style="width:30px;" class="mb-3 img-fluid">
</a>

      <br>

      <div class="fade-in">
        <div class="table-scrollable">
          <table class="table table-bordered" style="height:300px">
            <thead class="text-white" style="
            
            
            background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
              <tr>

              <th class="text-center" scope="col" style=" width:20%;">DATE</th>
              <th class="text-center" scope="col">TIME</th>
                <th class="text-center"scope="col">Teacher Name</th>
      
                <th class="text-center" scope="col">Description</th>
        
                <th class="text-center" scope="col">Quarter</th>
                <th class="text-center" scope="col">Semester</th>
                <th class="text-center" scope="col">School Year</th>
              
           
                <th class="text-center" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              
              <?php 
                while ($row = mysqli_fetch_assoc($result)) { 
              ?>
              <tr class="text-center" style="background: #f2f2f2;">
              <td class="text-center" style="text-align: center; vertical-align: middle;"><b> <?php echo $row["date"]; ?></b></td>
                <td class="text-center" style="text-align: center; vertical-align: middle;" ><b> <?php echo $row["time"]; ?></b></td>
                <td style="text-align: center; vertical-align: middle; width:15%;"><b> <?php echo $row["teacher"]; ?></b></td>
               <td style="text-align: center; vertical-align: middle; width:60%;"> <b><?php echo $row["subjectname"]; ?></b> - Grades for Grade:               <b> <?php echo $row["year"]; ?>
                <?php echo $row["section"]; ?> </b> </td> 
                <td style="text-align: center; vertical-align: middle;" ><b><?php echo $row["quarter"]; ?></b></td>
                <td class="text-center" style="text-align: center; vertical-align: middle;"><b><?php echo $row["semester"]; ?></b></td>
                <td class="text-center" style="text-align: center; vertical-align: middle; width:15%;" ><b><?php echo $row["sy"]; ?></b></td>
                <td class="text-center" style="text-align: center; vertical-align: middle;">


 

    <a class="zoom-image"href="check.php?session=<?php echo $row["session"]; ?>">
    <?php
    if ($row["status"] == 0) {
        echo '<img src="img/show.png" alt="Description of the image" style="width:30px;" class="mb-3 img-fluid">';
    } else {
        echo 'VALIDATED';
    }
    ?>
    </a>
</td>


              </tr>
              <?php 
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

<?php 
  }
?> 