<?php 

   session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    


.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}

.container form {
	width: 1030px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: auto;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	
  border:30px;
}
.border{
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:30px;
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


    </style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>


<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>


<!-- TITLE HERE -->

      <div class="container" >
		<div class="box">
      <br>
    <div class="link text-center">
		
    <a  class="link-primary" href="create.php" display-40>
    <button type="button" class="btn btn-dark ">

<b>ADD USERS </b>

    </button>
    </a>
    
</div>
<br>  
       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border">
            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;           
			  	 ?> 
<?php
require "./php/db_conn.php";

$query = "SELECT * FROM users ";
$result = mysqli_query($conn, $query);
?>
<div class="text text-center">
  <input type="text" id="search" placeholder="Search/Sort">
</div>
<br>
<table class="table table-bordered mb-25">
  <thead>
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th hidden>Role</th>
      <th colspan="4" class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody id="table-body">
    <?php
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["username"]; ?></td>
          <td hidden><?php echo $row["role"]; ?></td>
          <td hidden><?php echo $row["role2"]; ?></td>
          <td class="text-center">
            <a href="view.php?id=<?php echo $row['id'] ?>" class="btn btn-dark"><b>VIEW</b></a>
            <a href="update.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"><b>UPDATE</b></a>
            <a href="addsub.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"><b>+ SUBJECT</b></a>
          </td>
        </tr>
    <?php
      }
    } else {
    ?>
      <tr>
        <td colspan="4" class="text-center">No records found</td>
      </tr>
    <?php
    }
  }
}
   }
    ?>
  </tbody>
</table>

<script>
  const searchInput = document.querySelector('#search');
  const tableBody = document.querySelector('#table-body');
  const rows = tableBody.getElementsByTagName('tr');
  const resultText = document.querySelector('#result-text');

  searchInput.addEventListener('keyup', function(event) {
    const searchTerm = event.target.value.toLowerCase();
    let count = 0;

    for (let i = 0; i < rows.length; i++) {
      const name = rows[i].getElementsByTagName('td')[0].innerText.toLowerCase();
      const username = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();
      const role = rows[i].getElementsByTagName('td')[2].innerText.toLowerCase();
const role2 = rows[i].getElementsByTagName('td')[3].innerText.toLowerCase();
const match = name.includes(searchTerm) || username.includes(searchTerm) || role.includes(searchTerm) || role2.includes(searchTerm);

      rows[i].style.display = match || searchTerm === '' ? '' : 'none';
      
      if (match) {
        count++;
      }
    }

    if (searchTerm === '') {
      resultText.innerText = '';
    } else {
      resultText.innerHTML = '<strong>Showing Results for:</strong> ' + searchTerm + ' (' + count + ' results)';
    }
  });
</script>


</form>

</div>
</div>

     
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>