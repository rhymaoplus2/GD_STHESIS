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
    $query = "SELECT * FROM grade WHERE 1=1";

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

  </style>
</head>
<body>
  <div class="header" id="myHeader">
    <?php include_once('header.php');?>
  </div>
  
  <br>

  <div class="container">
    <div class="border">
      <form method="post" class="formx text-center" style="">
        <div class="form-group row">
   
          <div class="col-sm-4">
            <select class="form-control" id="section" name="section" onchange="this.form.submit()">
              <option value="">Sections</option>
              <?php while ($row_sections = mysqli_fetch_assoc($result_sections)) { ?>
                <option value="<?php echo $row_sections["name"]; ?>" <?php if ($selected_section == $row_sections["name"]) {echo "selected";} ?>><?php echo $row_sections["name"]; ?></option>
              <?php } ?>
            </select>
          </div>

          <div class="col-sm-4">
            <select class="form-control" id="subject" name="subject" onchange="this.form.submit()">
              <option value="">Subject Name</option>
              <?php while ($row_subjects = mysqli_fetch_assoc($result_subjects)) { ?>
                <option value="<?php echo $row_subjects["subjectname"]; ?>" <?php if ($selected_subject == $row_subjects["subjectname"]) {echo "selected";} ?>><?php echo $row_subjects["subjectname"]; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <br>
        <div class="col-sm-3">
  <select class="form-control" id="schoolyear" name="schoolyear" onchange="this.form.submit()">
    <option value="">School Year</option>
    <?php while ($row_schoolyears = mysqli_fetch_assoc($result_schoolyears)) { ?>
      <option value="<?php echo $row_schoolyears["sy"]; ?>" <?php if ($selected_schoolyear == $row_schoolyears["sy"]) {echo "selected";} ?>><?php echo $row_schoolyears["sy"]; ?></option>
    <?php } ?>
  </select>
</div>

      </form>

      <br>

      <div class="fade-in">
        <div class="table-scrollable">
          <table class="table table-bordered" style="height:300px">
            <thead class="text-white" style="
            
            
            background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);">
              <tr>
            
                <th scope="col">Subject Teacher</th>
      
                <th class="text-center" scope="col">Subject Name</th>
                <th class="text-center" scope="col">Grade</th>
                <th class="text-center" scope="col">Section</th>
                <th class="text-center" scope="col">Quarter</th>
                <th class="text-center" scope="col">Semester</th>
                <th class="text-center" scope="col">SY</th>
                <th class="text-center" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($row = mysqli_fetch_assoc($result)) { 
              ?>
              <tr style="background: #f2f2f2;">
                <td><?php echo $row["teacher"]; ?></td>
                <td><?php echo $row["subjectname"]; ?></td>
                <td><?php echo $row["year"]; ?></td>
                <td><?php echo $row["section"]; ?></td>
                <td><?php echo $row["quarter"]; ?></td>
                <td class="text-center"><?php echo $row["semester"]; ?></td>
                <td class="text-center"><?php echo $row["sy"]; ?></td>
                
                <!-- ACTIONS -->
                <td class="text-center">-</td>
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