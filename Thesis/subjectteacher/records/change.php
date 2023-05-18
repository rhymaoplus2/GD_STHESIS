<thead class="text-dark" style="   border-color:black;  ">
                  <tr>
                  <th scope="col" colspan="3" class="w-50 text-start">MALE</th>


</th>

      
                  
                </tr>
              </thead>
          
         <tbody class="text-dark" style="  background-color:#e6e6e6; border-color:black;  ">
              <?php 
require "./php/db_conn.php";
$name = $_SESSION['name'];
// Add the section column to the SELECT statement
$query = "SELECT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser, b.gender, b.status,
    a.name AS user_name, a.sub1 AS user_sub1, a.sec1, a.sgh1, b.remarks, b.quarter, b.semester, b.sy
    FROM grade b, users a
    WHERE REPLACE(LOWER(b.subjectname), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')  
    AND REPLACE(LOWER(b.teacher), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND REPLACE(LOWER(a.sub1), ' ', '') = REPLACE(LOWER('{$_SESSION['sub1']}'), ' ', '')
    AND REPLACE(LOWER(a.name), ' ', '') = REPLACE(LOWER('$name'), ' ', '')
    AND b.gender = 'MALE'";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $semester = $_POST["semester"];
  $quarter = $_POST["quarter"];
  $section = $_POST["section"];
  $sy = $_POST["sy"];


  if (!empty($semester)) {
    $query .= " AND semester = '$semester'";
  }
  if (!empty($quarter)) {
    $query .= " AND quarter = '$quarter'";
  }
  if (!empty($section)) {
    $query .= " AND section = '$section'";
  }
  if (!empty($sy)) {
    $query .= " AND sy = '$sy'";
  }

  if (isset($_POST["gender"])) {
    $gender = $_POST["gender"];
    
    if (!empty($gender)) {
      $query .= " AND gender = '$gender'";
    }
  }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ...
  
    if (isset($_POST["status"])) {
      $status = $_POST["status"];
      
      if (!empty($status)) {
        $query .= " AND b.status = '$status'";
      }
    }
  }
}

$result = mysqli_query($conn, $query);
?>



    <?php 
      $i = 0;
      while($rows = mysqli_fetch_assoc($result)) {
        $i++;
    ?>
    <tr>

<td class="text-start"><?php echo $rows["studentname"]; ?></td>
<td class="text-center" style="width:30%;"> <?php echo $rows["grade"]; ?></td>


   
      <td hidden><?php echo $rows["subjectname"]; ?></td>
   
      <td class="text-center">

      <?php if ($rows['status'] != 1): ?>
  <a href="update.php?id=<?php echo $rows['id'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Update Data">
    <b>
      <img style="width:30px;" src="img/up.png" class="img-fluid" alt="Description of image">
    </b>
  </a>
  <a type="button" class="btn" data-bs-toggle="modal" 
    data-bs-target="#deleteModal<?php echo $rows['id']; ?>"
    style="border: none; background-color:transparent; outline: none;" title="Delete">

    <img style="width:30px;" src="img/del.png" class="img-fluid" alt="Description of image">
  </a>
<?php else: ?>
  <b> VALIDATED </b>
<?php endif; ?>


<div class="modal fade" id="deleteModal<?php echo $rows['id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $rows['id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header " style=" background: linear-gradient(to right, #ff9900 0%, #ff0066 100%);">
        <h5 class="modal-title" id="deleteModalLabel<?php echo $rows['id']; ?>"><div class="text text-center text-white">WARNING! Actions cannot be undone! </div></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p> <b></b>
          <br> Are you sure you want to delete <br> <b> <?php echo $rows['name']; ?> Account?</b>
        </p>
        <form class="delete" action="delete_grade1.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
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
     












       
            <?php }
 }



     }


 ?>



         </tbody>