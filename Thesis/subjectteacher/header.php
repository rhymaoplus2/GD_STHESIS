<div class="position-">

<nav class="navbar navbar-expand-lg navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav ">
  <ul></ul>
  <ul class="navbar-nav">
   
  <div class = "logo">   <a class="nav-link text-white" href="home.php" ><img src="msu.gif" class="rounded mx-auto d-block" alt="..." style="width: 2.5rem;">
  </a>
  </div>
</ul>
    <ul class="navbar-nav">
      
      <li class="nav-item active">
        <a class="nav-link text-primary" href="home.php" ><b>Home</b></a>
      </li>
      <!--
      <button class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            MasterList
          </button>
          <ul class="dropdown-menu dropdown-menu-danger">
       <li><a class="dropdown-item" href="students/teacher_read.php">Student List</a></li>
           <li><a class="dropdown-item" href="subject/subjectlist.php">Subject List</a></li>

          </ul>
-->
      <li class="nav-item">
        <a class="nav-link text-dark" href="records/records.php"><b>Records</b></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link text-dark" href="reports/reports.php"><b>Reports</b></a>
      </li>
  
	  <li class="nav-item ">
        <a class="nav-link text-dark" href="logout.php"><b>Logout</b></a>
      </li>
  
    </ul>

	  <div class="mx-auto">
      <h3 class="text-dark">
     <b>Mabuhay
    <?=$_SESSION['username']?>!
</b>
</h3>
    </div>
  </div>
</nav>
</div>