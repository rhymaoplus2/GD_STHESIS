<nav class="navbar navbar-expand-lg navbar-dark shadow">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link text-dark" href="../home.php">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MasterList
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item text-dark" href="../students/teacher_read.php">Student List</a></li>
          <li><a class="dropdown-item text-dark" href="../subject/subjectlist.php">Subject List</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="records/records.php">Records</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="reports/reports.php">Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="users.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="../logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<style>
  .navbar-dark .navbar-nav .nav-link:hover {
    background-color: #dddddd;
    border-radius: 5px;
  }
</style>
