<tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub5
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub5"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center" onclick="select7()">
  <a class="text-dark" style="background-color: white; border: none;">
    <b><?php echo $Row["sub5"]; ?></b>
  </a>
</td>
<!--- SELECT -->


<!-- Modal -->
<div class="modal fade" id="select7" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">SELECT FORMAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showjhs()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="show()" data-bs-dismiss="modal">
    Senior High School
  </button>
</li>
</div>

</ul>
      </div>
    </div>
  </div>
</div>


<script>
  function select7() {
    $('#select7').modal('show');
  }
</script>

<!--Pages Modals-->

<div class="modal fade" id="subject5Modal" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Masterlist: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="sub5m.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- JHS MODAL FRAME Quarter-->


<div class="modal fade" id="sub5q1jhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 1: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter1jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>




<div class="modal fade" id="sub5q2jhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 2: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter2jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub5q3jhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 3: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter3jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<div class="modal fade" id="sub5q4jhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 4: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter4jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="subject5quarter1Modaljhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Semester 1: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- SHS MODAL FRAME -->
<div class="modal fade" id="subject5quarter1Modal" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Semester 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="subject5semester2Modal" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Semester 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_semester2.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!--Quarter Modals -->
<div class="modal fade" id="sub5q1" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter1.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub5q2" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter2.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="sub5q3" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 3: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter3.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub5q4" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Quarter 4: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject5_quarter4.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<!-- Conso -->
<div class="modal fade" id="consoModal" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Consolidated Grades: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="conso.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- Modal SHS-->
<div class="modal fade" id="example6Modal" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">SHS - Printable Data Formats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select7ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject5Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject5quarter1Modal" data-bs-dismiss="modal">
    1st Semester Grades
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject5semester2Modal" data-bs-dismiss="modal">
    2nd Semester Grades
  </button>
</li>
</div>

<div class="fade-in3">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q1" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>

<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q2" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q3" data-bs-dismiss="modal">
      3rd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q4" data-bs-dismiss="modal">
      4th Quarter Grades
  </button>
</li>
</div>
</ul>
      </div>
    </div>
  </div>
</div>
<!-- JHS -->
<div class="modal fade" id="example6Modaljhs" tabindex="-1" aria-labelledby="example6ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example6ModalLabel">Jhs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select7ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject5Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q1jhs" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q2jhs" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in4">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q3jhs" data-bs-dismiss="modal">
    3rd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in5">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub5q4jhs" data-bs-dismiss="modal">
    4th Quarter Grades
  </button>
</li>
</div>
<!-- 
<div class="fade-in6">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#consoModal" data-bs-dismiss="modal">
   Consolidated Grades
  </button>
</li>
</div>
-->
</ul>
      </div>
    </div>
  </div>
</div>
<script>
  function show() {
    $('#example6Modal').modal('show');
  }
</script>
<script>
  function showjhs() {
    $('#example6Modaljhs').modal('show');
  }


</script>


                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>



