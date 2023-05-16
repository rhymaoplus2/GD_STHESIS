<tbody>
        <?php
          require "./php/db_conn.php";
          $name = $_SESSION['name'];
          $query = "SELECT u.name, u.sec1, u.sec2, u.sec3, u.sec4, u.sec5, u.sub3
                    FROM users u
                    WHERE u.name = '$name';";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) > 0) {
            while ($Row = mysqli_fetch_assoc($result)) {
        ?>
              <tr>
                <?php if (empty($Row["sub3"])) { ?>
                  <td class="text-center"><b>-</b></td>
                  <td hidden class="text-center"></td>
                <?php } else { ?>
                  <td class="text-center" onclick="select3()">
  <a class="text-dark" style="background-color: white; border: none;">
    <b><?php echo $Row["sub3"]; ?></b>
  </a>
</td>
<!--- SELECT -->


<!-- Modal -->
<div class="modal fade" id="select3" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">SELECT FORMAT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <ul>

        <div class="fade-in1">
        <li>
        <button type="button" class="btn btn-secondary mb-3" onclick="showModal2jhs()" data-bs-dismiss="modal">  Junior High School
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" onclick="showModal2()" data-bs-dismiss="modal">
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
  function select3() {
    $('#select3').modal('show');
  }
</script>

<!--Pages Modals-->

<div class="modal fade" id="subject3Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Masterlist: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="sub3m.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<!-- JHS MODAL FRAME Quarter-->


<div class="modal fade" id="sub3q1jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 1: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter1jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>




<div class="modal fade" id="sub3q2jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 2: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter2jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub3q3jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 3: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter3jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<div class="modal fade" id="sub3q4jhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 4: Printable Data (JHS FORMAT )</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter4jhs.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="subject3quarter1Modaljhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 1: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- SHS MODAL FRAME -->
<div class="modal fade" id="subject3quarter1Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester1.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="subject3semester2Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Semester 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_semester2.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!--Quarter Modals -->
<div class="modal fade" id="sub3q1" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 1: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter1.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>

<div class="modal fade" id="sub3q2" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 2: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter2.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>



<div class="modal fade" id="sub3q3" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 3: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter3.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>
<div class="modal fade" id="sub3q4" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Quarter 4: Printable Data (SHS FORMAT)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="subject3_quarter4.php" width="100%" height="500"></iframe>
</div>
    </div>
  </div>
</div>


<!-- Conso -->
<div class="modal fade" id="consoModal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Consolidated Grades: Printable Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <iframe src="conso.php" width="100%" height="500"></iframe>
      </div>

    </div>
  </div>
</div>


<!-- Modal SHS-->
<div class="modal fade" id="example3Modal" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">SHS - Printable Data Formats</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3quarter1Modal" data-bs-dismiss="modal">
    1st Semester Grades
  </button>
</li>
</div>
<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3semester2Modal" data-bs-dismiss="modal">
    2nd Semester Grades
  </button>
</li>
</div>

<div class="fade-in3">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q1" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>

<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q2" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q3" data-bs-dismiss="modal">
      3rd Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q4" data-bs-dismiss="modal">
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
<div class="modal fade" id="example3Modaljhs" tabindex="-1" aria-labelledby="example3ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header text-white "style="  background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);">
        <h5 class="modal-title" id="example3ModalLabel">Jhs</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Add buttons for select3ing different options -->
        <ul>

        <div class="fade-in1">
        <li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#subject3Modal" data-bs-dismiss="modal">
   Masterlist
  </button>
</li>
</div>

<div class="fade-in2">
<li>
  <button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q1jhs" data-bs-dismiss="modal">
    1st Quarter Grades
  </button>
</li>
</div>
<div class="fade-in3">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q2jhs" data-bs-dismiss="modal">
      2nd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in4">
<li>
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q3jhs" data-bs-dismiss="modal">
    3rd Quarter Grades
  </button>
</li>
</div>

<div class="fade-in5">
<button type="button" class="btn btn-secondary mb-3" data-bs-toggle="modal" data-bs-target="#sub3q4jhs" data-bs-dismiss="modal">
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
  function showModal2() {
    $('#example3Modal').modal('show');
  }
</script>
<script>
  function showModal2jhs() {
    $('#example3Modaljhs').modal('show');
  }


</script>


                <?php } ?>
              </tr>
        <?php
            }
          }
        ?>
      </tbody>