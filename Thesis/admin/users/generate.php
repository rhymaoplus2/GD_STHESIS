


<?php include 'n-update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Generate</title>
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
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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





<br>
<br>
	<div class="container">
		<form action="gen.php" 
		      method="post">
            
		   <p class="display-10 text-center">Generate Username and Password <br> for : <b><?=$row['name']?> </b></p><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>


    <div class="form-group mb-3">
    <label for="username" class="form-label">Username</label>
    <div class="input-group">
      <input 
        value="<?= isset($username) ? $username : generateRandomString() ?>"
        type="text"
        class="form-control"
        id="username" 
        name="username"
      >
      <button 
        type="button"
        class="btn btn-outline-secondary"
        onclick="document.getElementById('username').value = '<?= generateRandomString() ?>'; document.getElementById('password').value = '<?= generateRandomString() ?>';"
      >
        Generate Account
      </button>
    </div>
  </div>
  <div class="form-group mb-3">
    <label for="password" class="form-label">Password</label>
    <input 
      value="<?= isset($password) ? $password : generateRandomString() ?>"
      type="text"
      class="form-control"
      id="password" 
      name="password"
    >
  </div>

    <?php

function generateRandomString($length = 8) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $index = rand(0, strlen($characters) - 1);
    $randomString .= $characters[$index];
  }
  return $randomString;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the submitted username and password values
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Handle form submission
  // ...
}

?>

	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Update</button>


				   <a class="link-primary" href="users.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>


	
	    </form>
	</div>
<br>
<br>
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
  
  

</body>
</html>