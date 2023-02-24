<?php 



      
   session_start();
   include "../php/db_conn.php";
   include "php/subject1.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
  <script>
		function printPage() {
			window.location.href = "printsubject1.php";
		}
	</script>

  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    .no {border:0;outline:0;}



.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  margin-top: -10rem;
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white ;
  
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
  background-color: white;
  border: 10px;

}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: white;

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
  #myVideo {

width: 100vw;
height: 100vh;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
  }

    </style>
</head>
<body>

<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>





<video autoplay muted loop id="myVideo">
  <source src="../bg/records.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<script>
var video = document.getElementById("myVideo");
var btn = document.getElementById("myBtn");

function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>




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


<form action="./php/subject1create.php"
      method="post" >



    <?php if (isset($_GET['error'])) { 
  include "./php/db_conn.php";
  ?>
  

  <div class="alert alert-danger" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>



<!--- DISPLAYING SUBJECT NAME -->






       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
           

            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
              $i++;

              ?> 
           



     <div class="container" >

   <div class="content">
               
   <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="border">
            
      <table class="table table-bordered ">
      <div class="row">
  <div class="col-md-6">
    <label for="semester" class="form-label text-center"><b>Semester</b></label>
    <select class="form-select" id="semester" name="semester">
    <option value="">NONE</option>
      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="quarter" class="form-label text-center"><b>Quarter</b></label>
    <select class="form-select" id="quarter" name="quarter">
    <option value="">NONE</option>
      <option value="First">FIRST</option>
      <option value="Second">SECOND</option>
      <option value="Third">THIRD</option>
      <option value="Fourth">FOURTH</option>
    </select>
  </div>
</div>
<br>
              <thead >
                  <tr>
                  
              
          
                  <th scope="col">Student Name</th>
                  <th hidden  scope="col">Subject Name </th>
                  <th scope="col">Grade </th>
      
                </tr>
              </thead>
          
        <tbody>    
          
        <tr>
           



        


          
       



         
<?php
                    require "php/db_conn.php";
            $name = $_SESSION["name"];
                    $query =
                    "SELECT students.fullname, students.adviser_id, users.sub1, subjects.subjectname ,
                    students.section, students.firstname,students.middlename,students.lastname,students.gender
                    FROM students
                    JOIN users ON users.sgh1 = students.adviser_id OR users.sgh2 = students.adviser_id OR users.sgh3 = students.adviser_id OR users.sgh4 = students.adviser_id OR users.sgh5 = students.adviser_id
                    JOIN subjects ON subjects.subjectname = users.sub1 AND users.sec1 = students.section AND (subjects.teacher1 = '".$_SESSION["name"]."' OR subjects.teacher2 = '".$_SESSION["name"]."' 
                    OR subjects.teacher3 = '".$_SESSION["name"]."' OR subjects.teacher4 = '".$_SESSION["name"]."'
                     OR subjects.teacher5 = '".$_SESSION["name"]."' OR subjects.teacher6 = '".$_SESSION["name"]."' 
                     OR subjects.teacher7 = '".$_SESSION["name"]."' OR subjects.teacher8 = '".$_SESSION["name"]."' 
                     OR subjects.teacher9 = '".$_SESSION["name"]."' OR subjects.teacher10 = '".$_SESSION["name"]."')
                    WHERE (students.subject1 = users.sub1 OR students.subject2 = users.sub1 OR students.subject3 = users.sub1 OR students.subject4 = users.sub1 OR students.subject5 = users.sub1 OR students.subject6 = users.sub1 OR students.subject7 = users.sub1 OR students.subject8 = users.sub1 OR students.subject9 = users.sub1 OR students.subject10 = users.sub1)
                    
                    ";
                  
                    // $query = "SELECT students.fullname,students.adviser_id,students.firstname
                    //FROM students 
                    //INNER JOIN subjects   ON subjects.subjectgrouphead = adviser_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

                      while ($Row = mysqli_fetch_assoc($result)) {

                        ?>
   
               
<td   colspan="">
<input class="no" id="studentname" name="studentname[]" value="<?= $Row['fullname'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="firstname" name="firstname[]" value="<?= $Row['firstname'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="middlename" name="middlename[]" value="<?= $Row['middlename'] ?>">
</input>
</td>

<td  hidden colspan="">
<input class="no" id="lastname" name="lastname[]" value="<?= $Row['lastname'] ?>">
</input>
</td>


<td  hidden colspan="">
<input class="no" id="gender" name="gender[]" value="<?= $Row['gender'] ?>">
</input>
</td>




           
               
           
            <td hidden >
            <input hidden class="no" id="subjectname" name="subjectname[]" 
            value="<?= $Row['sub1'] ?>">
             </input>
          <b class="text-danger"><?= $Row['sub1'] ?></b>
        </td>
          
          
          
          
          
          
         
        

        


   
          <td>
            
          
          
       <select id="grade" name="grade[]" class="form-control">
       <option value=" "> </option>
                                <?php
    for ($i=50; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
                                </select>



         </td>

          <td hidden><input value="<?= $_SESSION['name']?>" id="teacher"name="teacher[]">
       




          



  
        </td>
        <td hidden>
        <input hidden class="no" id="section" name="section[]" 
            value="<?= $Row['section'] ?>">
        </td>
        <td hidden>          

        </input> 
          <input hidden class="no" id="adviser" name="adviser[]" 
            value="<?= $Row['adviser_id'] ?>">
          </input> 
                      </td> 
			    </tr>
     










       
            <?php }
                    }

            }
      }
            }
    

  
      ?>



         </tbody>
         
      </table>
      <button type="submit"
        class="btn btn-primary"
        name="submit"><b>ADD<b></button>
      
          <a class="link-primary" href="subject1view.php" display-40>
          <button type="button" class="btn btn-dark">

      <b>CANCEL</b>

          </button>
          </a>
          
          </div>
          <br>
    




    
</form>

      <br>



      
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
