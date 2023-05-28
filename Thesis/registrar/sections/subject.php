


<?php include 'updatesubject.php'; ?>






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


body {
  height: 100%;
  margin: 0;
  padding: 0;
}

.table-scrollable{
  height: 300px;
  overflow-y: auto;
  scroll-behavior: smooth;
}
.table-scrollable::-webkit-scrollbar {
  width: 10px; /* width of the scrollbar */
}

.table-scrollable::-webkit-scrollbar-track {
  background: #f1f1f1; /* color of the track */
}

.table-scrollable::-webkit-scrollbar-thumb {
  background: #888; /* color of the thumb */
  border-radius: 5px; /* roundness of the thumb */
}

.table-scrollable::-webkit-scrollbar-thumb:hover {
  background: #555; /* color of the thumb on hover */
}
.zoom-button {
 
}

.zoom-image {
  transition: transform 0s ease;
}

.zoom-button:hover .zoom-image {
  transform: scale(1.5);
}


.zoom-image {
  transition: transform 0.3s ease;
}

.zoom-link:hover .zoom-image {
  transform: scale(1.2);
}

.wave::before,
.wave::after {
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 20%;
  background-color: #fff;
  transform-origin: bottom center;
  transform: skewY(-12deg);
  z-index: -1;
}

.wave::before {
  top: -10%;
}

.wave::after {
  bottom: -10%;
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
html, body {
  height:100%;
}

body {
 background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );
  background-size: cover;
  background-repeat: no-repeat;
}
form{

    background-color: white;
}
button:hover {
  transform: scale(1.2);
}
  </style>

</head>

<body >
<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





	<div class="container" style="margin-top:1cm;">
    <form method="POST" action="updatesubject.php">
    <div class="mb-3 text-center text-white" style="	
    
    
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
    
    border-radius:20px; 
    
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.87) 20.8%, rgba(242,121,1,0.84) 74.4% );"> <h3> SELECT SUBJECTS</h3></div>

    <div class="table-scrollable mb-3">
    <input type="hidden" name="name" value="<?php echo $name; ?>">
    <div class="form-group">
        <?php for ($i = 1; $i <= 10; $i++) { ?>

            <select class="mb-3 form-select" id="subject<?php echo $i; ?>" name="subject<?php echo $i; ?>">
                <option value="">Select Subject</option>
                <!-- Fetch subjects from the subjects table based on subjectname -->
                <?php
                $sqlSubjects = "SELECT subjectname FROM subjects";
                $resultSubjects = mysqli_query($conn, $sqlSubjects);
                $subjects = mysqli_fetch_all($resultSubjects, MYSQLI_ASSOC);
                foreach ($subjects as $subject) {
                    $selected = ($subject['subjectname'] === $rows[0]['subject' . $i]) ? 'selected' : '';
                    echo "<option value='{$subject['subjectname']}' $selected>{$subject['subjectname']}</option>";
                }
                ?>
            </select>
        <?php } ?>
    </div>
    </div>
   
    <button type="submit" name="update" style="border:none; background-color:transparent  ;"><img src="img/assign.gif" class="zoom-image" 
    title="proceed" alt="Image" style="width:70%;"></button>
</form>

	</div>
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