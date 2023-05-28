<?php
session_start();
include "../php/db_conn.php";
include "../php/read.php";

$name = $_SESSION["name"];
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    // Fetch section names from the section table
    $query_sections = "SELECT name FROM section ORDER BY name";
    $result_sections = mysqli_query($conn, $query_sections);

// Fetch subject names from the subject table
$query_subjects = "SELECT *
                   FROM  grade  
                   WHERE sy = (SELECT schoolyear FROM users LIMIT 1)  AND teacher = '$name' GROUP BY subjectname
                   ORDER BY subjectname";


    $result_subjects = mysqli_query($conn, $query_subjects);

    // Fetch school years from the schoolyear table
    $query_schoolyears = "SELECT sy FROM schoolyear";
    $result_schoolyears = mysqli_query($conn, $query_schoolyears);

    // Check for section, subject, gender, and year level filters
    $selected_section = "";
    $selected_subject = "";
    $selected_gender = "";
    $selected_schoolyear = "";
    $selected_year = "";

    if (isset($_POST['section'])) {
        $selected_section = $_POST['section'];
    }
    if (isset($_POST['subject'])) {
        $selected_subject = $_POST['subject'];
    }
    if (isset($_POST['gender'])) {
        $selected_gender = $_POST['gender'];
    }
    if (isset($_POST['schoolyear'])) {
        $selected_schoolyear = $_POST['schoolyear'];
    }
    if (isset($_POST['year'])) {
        $selected_year = $_POST['year'];
    }

    // Check for section, subject, gender, year level, and search filters
    $search_query = "";

    if (isset($_POST['search'])) {
        $search_query = $_POST['search'];
    }

    $query = "SELECT * FROM grade WHERE teacher = '$name'";

    if (!empty($search_query)) {
        $query .= " AND (lastname LIKE '%$search_query%' OR firstname LIKE '%$search_query%')";
    }

    if (!empty($selected_section)) {
        $query .= " AND section = '$selected_section'";
    }

    if (!empty($selected_subject)) {
        $query .= " AND subjectname = '$selected_subject'";
    }

    if (!empty($selected_gender)) {
        $query .= " AND gender = '$selected_gender'";
    }

    if (!empty($selected_schoolyear)) {
        $query .= " AND sy = '$selected_schoolyear'";
    }

    if (!empty($selected_year)) {
        $query .= " AND year = '$selected_year'";
    }

    $selected_quarter = "";

    if (isset($_POST['quarter'])) {
        $selected_quarter = $_POST['quarter'];
    }

    if (!empty($selected_quarter)) {
        $query .= " AND quarter = '$selected_quarter'";
    }

    $selected_semester = "";

    if (isset($_POST['semester'])) {
        $selected_semester = $_POST['semester'];
    }

    if (!empty($selected_semester)) {
        $query .= " AND semester = '$selected_semester'";
    }

    $query .= " ORDER BY lastname";
    $result = mysqli_query($conn, $query);

    ?>



<!DOCTYPE html>
<html>
<head>
  <title>Records</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <style>

html, body {
    height:100%;
  }
  
  
  body {
    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
    background-repeat: no-repeat;
  }
  
  
  
    .container {
    width: auto;
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
  
  .img-fluid:hover {
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
  
  .zoom-img {
  transition: transform 0.3s;  /* Add smooth transition effect */
}

.zoom-img:hover {
  transform: scale(1.2);  /* Zoom in the image on hover */
}
  
.zoom-img {
  transition: transform 0.3s;  /* Add smooth transition effect */
}

.zoom-img:hover {
  transform: scale(1.2);  /* Zoom in the image on hover */
}

  td a:hover {
    font-weight: bold;
    color: black;
  }
  
  .table-scrollable{
    height: 250px;
    overflow-y: auto;
    scroll-behavior: smooth;
 
  }
  .table-scrollable::-webkit-scrollbar {
    width: 10px; /* width of the scrollbar */
  }
  
  .table-scrollable::-webkit-scrollbar-track {
  background-color: white;/* color of the track */
  }
  
  .table-scrollable::-webkit-scrollbar-thumb {
    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);/* color of the thumb */
    border-radius: 5px; /* roundness of the thumb */
  }
  
  .table-scrollable::-webkit-scrollbar-thumb:hover {
    background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);/* color of the thumb on hover */
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
  a {
    text-decoration: ;
  }
  .sticky-header {
  position: sticky;
  top: 0;
  z-index: 1;
}


  </style>
</head>
<body onload="updateSelectedOption()">



<div class="modal fade" id="logoutModal2" tabindex="-1" aria-labelledby="logoutModal2Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white" style="
  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="logoutModal2Label">Logout</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
 
      <div class="modal-body">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" >
                </a>
            </div>
  </div>

  </div> </div> 
  </div>
  <div class="header" id="myHeader">
    <?php include_once('header.php');?>
  </div>
  <?php
if (isset($_GET['error'])) {
    $errorMessage = $_GET['error'];
    echo <<<HTML
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#errorModal">
      Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="errorModalLabel">Already Submitted</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="alert alert-danger" role="alert">
              $errorMessage
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Trigger the modal popup onload -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
        errorModal.show();
      });
    </script>
HTML;
}

if (isset($_GET['success'])) {
    $successMessage = $_GET['success'];
    echo <<<HTML
    <div class="modal" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
            <h5 class="modal-title" id="successModalLabel">Success!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>$successMessage</p>
          </div>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      });
    </script>
HTML;
}
}
?>

  <br>

  <div class="container">
    <div class="border">
    <form method="post" class="formx text-center">
    <div class="row">
  <div class="col-md-1 mb-3">
     
  <?php
function generateNotification()
{
    include "../php/db_conn.php";

    // Assuming your database connection is stored in the $conn variable
    $name = $_SESSION['name'];

    // Prepare the SQL query
    $sql = "SELECT session, COUNT(DISTINCT status) AS count
            FROM grade";

    $count = 0;

    // Execute the query
    $result = $conn->query($sql);

    // Check if the query executed successfully
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            // Access the session and count values
            $session = $row['session'];
            $count += $row['count']; // Accumulate the counts instead of overwriting

            // Output the count
        }
       
    } else {

    }

    // Close the database connection
    $conn->close();
}

    // Call the function to generate the notification
    generateNotification();
    ?>

  
    </div>
    <div class="d-flex align-items-center">
  <div class="input-group mb-3">
  <a href="view.php" class="btn btn-transparent p-0" title="add grades">
      <img src="img/grade.png" class="img-fluid rotate-on-hover" alt="submit">
</a> &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" class="form-control" id="search" name="search" placeholder="Search" value="<?php echo $search_query; ?>">
  
  </div>
</div>



    </div>
    <div class="row d-flex">
  <div class="col">
    <select class="form-select fw-bold" id="gender" name="gender" onchange="this.form.submit()">
      <option value="" selected>Gender</option>
      <option value="MALE" <?php if ($selected_gender == "MALE") {
          echo "selected";
      } ?>>MALE</option>
      <option value="FEMALE" <?php if ($selected_gender == "FEMALE") {
          echo "selected";
      } ?>>FEMALE</option>
    </select>
  </div>

  <div class="col">
    <select class="form-select fw-bold" id="quarter" name="quarter" onchange="this.form.submit()">
      <option value="" selected>Quarter</option>
      <option value="FIRST" <?php if ($selected_quarter == "FIRST") {
          echo "selected";
      } ?>>FIRST</option>
      <option value="SECOND" <?php if ($selected_quarter == "SECOND") {
          echo "selected";
      } ?>>SECOND</option>
      <option value="THIRD" <?php if ($selected_quarter == "THIRD") {
          echo "selected";
      } ?>>THIRD</option>
      <option value="FOURTH" <?php if ($selected_quarter == "FOURTH") {
          echo "selected";
      } ?>>FOURTH</option>
    </select>
  </div>

  <div class="col">
    <select class="form-select fw-bold" id="semester" name="semester" onchange="this.form.submit()">
      <option value="" selected>Semester</option>
      <option value="FIRST" <?php if ($selected_semester == "FIRST") {
          echo "selected";
      } ?>>FIRST</option>
      <option value="SECOND" <?php if ($selected_semester == "SECOND") {
          echo "selected";
      } ?>>SECOND</option>
    </select>
  </div>

  <div class="col">
    <select class="form-select fw-bold" id="year" name="year" onchange="this.form.submit()">
      <option class="text-center" value="" selected>Grade</option>
      <option class="text-center" value="7" <?php if ($selected_year == "7") {
          echo "selected";
      } ?>>7</option>
      <option class="text-center" value="8" <?php if ($selected_year == "8") {
          echo "selected";
      } ?>>8</option>
      <option class="text-center" value="9" <?php if ($selected_year == "9") {
          echo "selected";
      } ?>>9</option>
      <option class="text-center" value="10" <?php if ($selected_year == "10") {
          echo "selected";
      } ?>>10</option>
      <option class="text-center" value="11" <?php if ($selected_year == "11") {
          echo "selected";
      } ?>>11</option>
      <option class="text-center" value="12" <?php if ($selected_year == "12") {
          echo "selected";
      } ?>>12</option>
    </select>
  </div>

  <div class="col">
    <select class="form-select fw-bold" id="section" name="section" onchange="this.form.submit()">
      <option value="" selected>Section</option>
      <?php while ($row_sections = mysqli_fetch_assoc($result_sections)) { ?>
        <option value="<?php echo $row_sections["name"]; ?>" <?php if ($selected_section == $row_sections["name"]) {
            echo "selected";
        } ?>><?php echo $row_sections["name"]; ?></option>
      <?php } ?>
    </select>
  </div>

<div class="col">
  <select class="form-select fw-bold" id="subject" name="subject" onchange="this.form.submit()">
    <option value="" selected>Subject</option>
    <?php while ($row_subjects = mysqli_fetch_assoc($result_subjects)) { ?>
      <option value="<?php echo $row_subjects["subjectname"]; ?>" <?php if ($selected_subject == $row_subjects["subjectname"]) {
          echo "selected";
      } ?>><?php echo $row_subjects["subjectname"]; ?></option>
    <?php } ?>
  </select>
</div>
<div class="col">
  <select class="form-select fw-bold" id="schoolyear" name="schoolyear" onchange="this.form.submit()">
    <option value="" selected>SY</option>
    <?php
      $startYear = 2017;
    $endYear = 2030;
    for ($year = $startYear; $year <= $endYear; $year++) {
        $optionValue = $year . " - " . ($year + 1);
        $optionText = $year . " - " . ($year + 1);

        if ($selected_schoolyear == $optionValue) {
            $selectedAttribute = "selected";
        } else {
            $selectedAttribute = "";
        }

        echo '<option value="' . $optionValue . '" ' . $selectedAttribute . '>' . $optionText . '</option>';
    }
    ?>
  </select>
  </div>
</div>

</form>


<script>
function updateSelectedOption() {
  var selectedOptions = [];

  // Get the selected option from the gender select element
  var genderSelect = document.getElementById("gender");
  if (genderSelect.selectedIndex !== -1 && genderSelect.options[genderSelect.selectedIndex].value !== "") {
    var selectedGender = 'Gender : <strong>' + genderSelect.options[genderSelect.selectedIndex].value + '</strong>';
    selectedOptions.push(selectedGender);
  }

  // Get the selected option from the year select element
  var yearSelect = document.getElementById("year");
  if (yearSelect.selectedIndex !== -1 && yearSelect.options[yearSelect.selectedIndex].value !== "") {
    var selectedYear = 'Year : <strong>' + yearSelect.options[yearSelect.selectedIndex].value + '</strong>';
    selectedOptions.push(selectedYear);
  }

  // Get the selected option from the section select element
  var sectionSelect = document.getElementById("section");
  if (sectionSelect.selectedIndex !== -1 && sectionSelect.options[sectionSelect.selectedIndex].value !== "") {
    var selectedSection = 'Section : <strong>' + sectionSelect.options[sectionSelect.selectedIndex].value + '</strong>';
    selectedOptions.push(selectedSection);
  }

  // Get the selected option from the subject select element
  var subjectSelect = document.getElementById("subject");
  if (subjectSelect.selectedIndex !== -1 && subjectSelect.options[subjectSelect.selectedIndex].value !== "") {
    var selectedSubject = 'Subject : <strong>' + subjectSelect.options[subjectSelect.selectedIndex].value + '</strong>';
    selectedOptions.push(selectedSubject);
  }

  // Get the selected option from the schoolyear select element
  var schoolYearSelect = document.getElementById("schoolyear");
  if (schoolYearSelect.selectedIndex !== -1 && schoolYearSelect.options[schoolYearSelect.selectedIndex].value !== "") {
    var selectedSchoolYear = 'SY : <strong>' + schoolYearSelect.options[schoolYearSelect.selectedIndex].value + '</strong>';
    selectedOptions.push(selectedSchoolYear);
  }
// Get the selected option from the semester select element
var semesterSelect = document.getElementById("semester");
if (semesterSelect.selectedIndex !== -1 && semesterSelect.options[semesterSelect.selectedIndex].value !== "") {
  var selectedSemester = 'Semester: <strong>' + semesterSelect.options[semesterSelect.selectedIndex].value + '</strong>';
  selectedOptions.push(selectedSemester);
}
// Get the selected option from the quarter select element
var quarterSelect = document.getElementById("quarter");
if (quarterSelect.selectedIndex !== -1 && quarterSelect.options[quarterSelect.selectedIndex].value !== "") {
  var selectedQuarter = 'Quarter: <strong>' + quarterSelect.options[quarterSelect.selectedIndex].value + '</strong>';
  selectedOptions.push(selectedQuarter);
}


  // Update the content of the selectedOption paragraph with the selected options
  document.getElementById("selectedOption").innerHTML = " " + selectedOptions.join(" - ");
}
</script>


<div class="mt-3 text-center">
      <p id="selectedOption"></p>
    </div>

      <br>

      <div class="fade-in">
        <div class="table-scrollable">
          <table class="table table-bordered" style="height:300px">
            <thead class="text-white sticky-header" style="
            
            
            background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
              <tr>
                <th scope="col">Student Name</th>
                <th class="text-center" scope="col">Grade</th>
        
                <th class="text-center" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
              <tr style="background: #f2f2f2;">
                <td><?php echo $row["studentname"]; ?></td>
                <td class="text-center"><?php echo $row["grade"]; ?></td>
             
                <td class="text-center"> 
                <?php
if ($row['status'] == 1) {
    echo "VALIDATED";
} else {
    echo '<a href="update.php?id=' . $row['id'] . '" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Grade">';
    echo '<b><img style="width:30px;" src="img/up.png" class="img-fluid zoom-img" alt="Description of image"></b>';
    echo '</a>';

    echo '<a type="button" class="btn img-fluid zoom-img" data-bs-toggle="modal" data-bs-target="#deleteModal' . $row['id'] . '"';
    echo 'style="border: none; background-color:transparent; outline: none;" title="Delete">';
    echo '<img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image">';
    echo '</a>';
}
                    ?>


<div class="modal fade" id="deleteModal<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $row['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
        <h5 class="modal-title" id="deleteModalLabel<?php echo $row['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> <b></b>
          <br> Are you sure you want to delete <br> <b> <?php echo $row['studentname']; ?></b>
          <br>
          GRADE in <b> <?php echo $row['subjectname']; ?>?</b>
        </p>
        <form class="delete" action="delete_grade1.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          <div class="mb-3">
            <label for="password" class="form-label "><div class="text text-danger"><b>Password Required!</b></div></label>
            <input type="password" class="form-control" placeholder="input password" id="password" name="password" required>
          </div>
          <button type="submit" class="btn btn-danger" name="delete">
       PROCEED
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
    </div>
  </div>


</body>
</html>
