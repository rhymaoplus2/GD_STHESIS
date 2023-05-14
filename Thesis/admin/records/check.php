

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
   
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border:10px;
    border-radius: 10px;
    background-color: white;
    width: 900px;
  
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

  <div class="container">
    <div class="border">

    <a href="validate.php" class="zoom-image" title="back">
  <img src="img/back.png" alt="Description of the image" style="width:30px;" class="mb-3 img-fluid">
</a>

<br>

    <?php
    // Include the database connection file
    include "../php/db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    // Retrieve the session value from the query parameter
    $session = $_GET["session"];

    // Prepare the SQL query
    $query = "SELECT * FROM grade WHERE session = '$session' ORDER BY lastname LIMIT 1";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any results were returned
    if (mysqli_num_rows($result) > 0) {
        // Store the results in an array
        $grades = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $grades[] = $row;
        }
    } else {
        echo "No results found.";
    }

    // Close the database connection (assuming it's handled in db_conn.php)
    mysqli_close($conn);
?>
<!-- HTML code for table rendering -->
<style>
    .section {
        display: block;
        margin-bottom: 0;
    }
</style>

<span style="font-size:15px;">
    <span class="section">
        Subject Name:
        <?php foreach ($grades as $row): ?>
            <b><?php echo $row["subjectname"]; ?></b>
        <?php endforeach; ?>
    </span>

    <span class="section">
        Subject Teacher:
        <?php foreach ($grades as $row): ?>
            <b><?php echo $row["teacher"]; ?></b>
        <?php endforeach; ?>
    </span>

    <span class="section">
        Grade / Section:
        <?php foreach ($grades as $row): ?>
            <b><?php echo $row["year"]; ?> - <?php echo $row["section"]; ?></b>
        <?php endforeach; ?>
    </span>

    <span class="section">
        Semester:
        <?php foreach ($grades as $row): ?>
            <b><?php echo $row["semester"]; ?></b>
        <?php endforeach; ?>
    </span>

    <span class="section">
        Quarter:
        <?php foreach ($grades as $row): ?>
            <b><?php echo $row["quarter"]; ?></b>
        <?php endforeach; ?>
    </span>
</span>

    <?php
    // Include the database connection file
    include "../php/db_conn.php";

    // Retrieve the session value from the query parameter
    $session = $_GET["session"];

    // Prepare the SQL query for male students
    $query_male = "SELECT * FROM grade WHERE session = '$session' AND gender = 'MALE' ORDER BY lastname";

    // Execute the query for male students
    $result_male = mysqli_query($conn, $query_male);

    // Check if any results were returned for male students
    if (mysqli_num_rows($result_male) > 0) {
        // Store the results for male students in an array
        $grades_male = mysqli_fetch_all($result_male, MYSQLI_ASSOC);
    } else {
        $grades_male = array(); // Initialize an empty array
        echo "<b class='text-center' style='color: red;'>! No grades have been submitted for Male students.</b>";

    }

    // Prepare the SQL query for female students
    $query_female = "SELECT * FROM grade WHERE session = '$session' AND gender = 'FEMALE' ORDER BY lastname";

    // Execute the query for female students
    $result_female = mysqli_query($conn, $query_female);

    // Check if any results were returned for female students
    if (mysqli_num_rows($result_female) > 0) {
        // Store the results for female students in an array
        $grades_female = mysqli_fetch_all($result_female, MYSQLI_ASSOC);
    } else {
        $grades_female = array(); // Initialize an empty array
        echo "<b class='text-center' style='color: red;'>No grades have been submitted for Female students.</b>";

    }

    // Close the database connection
    mysqli_close($conn);
?>
<div class="mb-3">
</div>
<!-- HTML code for table rendering -->
<div class="table-scrollable">
<table class="table">


    <tbody>
    <thead style=" position: sticky;
    top: 0;
    background-color: #fff; /* adjust the background color as needed */
    z-index: 1;">
        <tr>
            <th colspan="">Male</th>
            <th colspan="" class="text-center">Grade</th>
        </tr>
    </thead>
        <?php foreach ($grades_male as $row): ?>
   
            <tr>
                <td><?php echo $row["lastname"]; ?>&nbsp;<?php echo $row["firstname"]; ?>&nbsp;<?php echo $row["middlename"]; ?></td>
                <td class="text-center"><?php echo $row["grade"]; ?></td>
            </tr>
        <?php endforeach; ?>
        <thead style=" position: sticky;
    top: 0;
    background-color: #fff; /* adjust the background color as needed */
    z-index: 1;">
        <tr>
            <th colspan="">Female</th>
            <th colspan="" class="text-center">Grade</th>
         
        </tr>
    </thead>
        <?php foreach ($grades_female as $row): ?>
            <tr>
                <td><?php echo $row["lastname"]; ?>&nbsp;<?php echo $row["firstname"]; ?>&nbsp;<?php echo $row["middlename"]; ?></td>
                <td class="text-center"><?php echo $row["grade"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php
    // Include the database connection file
    include "../php/db_conn.php";

    // Retrieve the session value from the query parameter
    $session = $_GET["session"];

    // Prepare the SQL query
    $query = "SELECT * FROM grade WHERE session = '$session' ORDER BY lastname LIMIT 1";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if any results were returned
    if (mysqli_num_rows($result) > 0) {
        // Store the results in an array
        $grades = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $grades[] = $row;
        }
    } else {
        echo "NO GRADES , HINDI MAAARING MA VALIDATE";
    }

    // Close the database connection (assuming it's handled in db_conn.php)
    mysqli_close($conn);
?>

<!-- HTML code for table rendering -->
<br>
      <div class="text-center">   
        
        <?php foreach ($grades as $row): ?>
          
            <button type="button" class="btn btn-dark " data-bs-toggle="modal" data-bs-target="#myModal">
    <b> VALIDATE  </b>
  </button>
        </div>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to proceed?
        </div>
        <div class="modal-footer">
        <?php
if ($row["status"] != 1) {
    echo '<a href="go.php?session=' . $row["session"] . '" class="btn btn-dark">VALIDATE</a>';
} else {
    echo '<a href="nos.php?session=' . $row["session"] . '" class="btn btn-success">Undo Validation</a>';
}
?>

        </div>
      </div>
    </div>
  </div><!-- Success Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModalLabel">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Status updated successfully!</p>
            </div>
        </div>
    </div>
</div>

<!-- Error Modal -->
<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Error updating status: <?php echo htmlspecialchars($_GET['error']); ?></p>
            </div>
        </div>
    </div>
</div>

          
        <?php endforeach; ?>

  </div>
  </div>

</body>
</html>

