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
    
    $query = "SELECT * FROM grade WHERE 1=1";
    
    if (!empty($selected_section)) {
      $query .= " AND section = '$selected_section'";
    }

    if (!empty($selected_subject)) {
      $query .= " AND subjectname = '$selected_subject'";
    }
    $selected_schoolyear = "";
if (isset($_POST['schoolyear'])) {
  $selected_schoolyear = $_POST['schoolyear'];
}

if (!empty($selected_schoolyear)) {
  $query .= " AND sy = '$selected_schoolyear'";
}


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
            <thead class="text-white" style="background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
              <tr>
                <th scope="col">Student Name</th>
                <th class="text-center" scope="col">Grade</th>
                <th class="text-center" scope="col">Subject Name</th>
                <th class="text-center" scope="col">Semester</th>
                <th class="text-center" scope="col">Quarter</th>
                <th class="text-center" scope="col">Section</th>
                <th class="text-center" scope="col">SY</th>
                <th class="text-center" scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($row = mysqli_fetch_assoc($result)) { 
              ?>
              <tr style="background: #f2f2f2;">
                <td><?php echo $row["studentname"]; ?></td>
                <td><?php echo $row["grade"]; ?></td>
                <td><?php echo $row["subjectname"]; ?></td>
                <td><?php echo $row["semester"]; ?></td>
                <td><?php echo $row["quarter"]; ?></td>
                <td class="text-center"><?php echo $row["section"]; ?></td>
                <td class="text-center"><?php echo $row["sy"]; ?></td>
                
                <!-- ACTIONS -->
                <td class="text-center">Here</td>
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