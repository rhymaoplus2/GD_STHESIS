


<?php include 'n-update.php'; ?>






<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>

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

html, body {
  height:100%;
}
header {
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );      margin: 10px;
     
            text-align: center;
            text-transform: uppercase;
            transition: 0.5s;
            background-size: 200% auto;
            color: white;            
            box-shadow: 0 0 20px #eee;
            border-radius: 10px;
            display: block;
          }

          header:hover {
            background-position: right center; /* change the direction of the change here */
            color: #fff;
            text-decoration: none;
          }

body {
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );
  background-size: cover;
  background-repeat: no-repeat;
}
.container {

  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  /* other styles */
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
  .btn-primary:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
.btn-danger:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
button:hover {
  transform: scale(1.2);
  transition: transform 0.5s ease;
}
  </style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>
<br>
<br>
<br>
<br>
<div class="fade-in">
	<div class="container">
		<form action="n-update.php" 
		      method="post">
            
          <header class="text-center text-white" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          font-size:30px; 
          
          
">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Update';
        } ?>
    </b>
</header>

<br>
<div class="form-group mb-3">
    <label for="" class="form-label"><b>Subject Name</b></label>
    <input 
    value="<?=$row['subjectname']?>"
	  type="text"
    class="form-control"
    id="subjectname" 
    name="subjectname">
    </div>


    <br>
<!-- SUBJECT TEACHERS -->

<div class="form-group mb-3">
    
    <input 
    type="hidden"
    value="<?=$row['subjectid']?>"
	  disabled="disabled"
    class="form-control"
    id="subjectid" 
    name="subjectname">
    </div>
  






	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
	
<button title="update" type="submit" class="btn btn-primary" name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

<button title="cancel"  type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='index.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>

	
	    </form>
	</div>
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
  
  

</body>
</html>