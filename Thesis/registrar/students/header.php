<div class="position-relative">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="../home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="index.php">Student List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../subject">Subject List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../sections">Section List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../records">Records</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../reports">Reports</a>
          </li>
      
        </ul>
        <ul class="navbar-nav ms-auto">
       
          <li class="nav-item">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a>
          </li>
          <li>

</li>
        </ul>
      </div>
    </nav>
  </div>

  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="
            
            background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );">
                <h5 class="modal-title text-white" id="logoutModalLabel">Logout</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-dark">
                <p>Are you sure you want to log out?</p>
            </div>
            <div class="modal-footer d-flex justify-content-end"> <!-- Updated class -->
                <a class="ms-auto" href="logout.php"> <!-- Added ms-auto class -->
                    <img src="../img/logout.png" class="img-fluid" alt="Image 1" style="width: 30%;" onclick="openBackupWindow()">
                </a>
            </div>
        </div>
    </div>
</div>