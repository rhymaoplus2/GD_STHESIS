


<?php include 'n-update.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Pass for <?=$row['name']?></title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>


.container {

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
  background-color: white;
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
  html, body {
  height: 100%;
}

body {
  background: linear-gradient(to right, #0099ff 0%, #9933ff 100%);
  background-repeat: no-repeat;
}
.fade-in {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.btn-primary:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.btn-danger:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
@media print {
  body {
    font-size: 12pt;
    margin: 0;
  }
  h1 {
    font-size: 18pt;
    margin: 0 0 0.5em;
  }
  p {
    margin: 0;
  }
  @page {
    size: letter;
  }
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
  <div class="fade-in">

		<form action="gen.php" 
		      method="post">
          <header class="text-center text-white" style="font-size:30px; background: linear-gradient(to right, #0099ff 0%, #9933ff 100%); width:auto; height:60px; line-height:60px; border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Genarate';
        } ?>
    </b>
</header>

<br>
<hr>
<div class="text-center ">
  <br>  <span >For: <b><i><?=$row['name']?></i></b></span>
  <span hidden id="name"><b><i><?=$row['name']?></i></b></span>

</div>


  
<br>

    <div class="form-group mb-3">
    <label for="username" class="form-label"><strong>Username</strong></label>
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
  class="btn btn-outline-primary text-white"
  onclick="document.getElementById('username').value = '<?= generateRandomString() ?>'; document.getElementById('password').value = '<?= generateRandomString() ?>';"
  style="background: linear-gradient(to right, #0099ff 0%, #9933ff 100%); "
>
  Generate Account
</button>

    </div>
  </div>
  <div class="form-group mb-3">
    <label for="password" class="form-label"><strong>Password</strong></label>
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
             <button type="submit" class="btn btn-primary" name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;" onclick="validateInputs()"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

<button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='users.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>
<!--
<button type="button" class="btn btn-dark" style="background-color: transparent; border: none; border-radius: 100%; width: 60px; height: 50px;" onclick="printForm()">
  <img style="width:50px;" src="img/prix.gif" class="img-fluid" alt="Description of image">
</button>
-->
<script>
function validateInputs() {
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;
  
  if (username === "" || password === "") {
    // inputs are empty, do nothing
    return;
  } else {
    printForm();
  }
}

function printForm() {
  let name = document.getElementById('name').innerText;
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;

  let printContents = `<h1>${name}</h1><p><strong>Username:</strong> ${username}</p><p><strong>Password:</strong> ${password}</p>`;

  let printWindow = window.open('', '', 'width=800,height=600');
  printWindow.document.write(`<html><head><title>Print</title></head><body>${printContents}</body></html>`);
  printWindow.document.close();
  printWindow.focus();
  printWindow.print();
  printWindow.close();
}
</script>

	
	    </form>
</div>
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