<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
    


.container {
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
  border-color: #f1f1f1;
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #f1f1f1;
}
.box {
	width: 750px;
}
.container table {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  background-color: #f1f1f1;
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

  .addbutton
  {
    margin-left:80%;
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











<!-- TITLE HERE    -->




        <div class=" container ">
       
        <div class="box">
        <div class="content">
			<br>
      



      <div class="container" >
		<div class="box">
    <div class="content">





















<!--

			<h1 class="display-10 text-center"> These are your Students Grades
      </h1>
      -->
      Dear : <?=$_SESSION['username']?> 
      <br>Please Click the create Button to add Subjects!

     <div class="row justify-content-center my-5">
                                                      
	   <div class="row justify-content-right  my-3">
       </div>
       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
           <audio controls autoplay  hidden>
<source src="../voice/success.mp3" type="audio/mpeg">
</audio>
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>

<!--

        <div class="link-center">
          <a class="link-primary" href="subject1.php" display-40>
          <button type="button" class="btn btn-dark">

      ADD GRADES

          </button>
          </a>


			</div>
      <br>
      <br>
      -->
            <table class="table table-bordered ">

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           




              <thead >
                  <tr>
                  <th scope="col">Student Name </th>
                  <th scope="col">Subject Name</th>
                  <th scope="col">Grade</th>
                  
                  <th scope="col" colspan="2">Actions </th>
                </tr>
              </thead>
        <tbody>    
          
       
        


<?php
 require "./php/db_conn.php";
                        $teacher = $_SESSION['username'];
                       
 $query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
 a.username,a.sub1 ,a.username,a.sec1, a.sgh1
 FROM grade b, users a WHERE  b.subjectname = a.sub1  
 AND b.section = a.sec1 AND a.username = b.teacher AND b.adviser = a.sgh1 
 AND teacher = '$teacher'
 ";
$result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) 

 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
           <tr>
           <td hidden><?php echo $Row["username"]; ?></td>
          <td><?php echo $Row["studentname"]; ?></td>
          <td><?php echo $Row["subjectname"]; ?></td>
          <td><?php echo $Row["grade"]; ?></td>
          <td><a href="update.php? id=<?=$Row['id']?>" 
			      	     class="btn btn-success ">Update</a>
 
     <td>
                   <script type="text/javascript">  

function openulr(newurl) {  

  if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $Row['id'] ?>');">
  DISCARD
</a>

			      </td>

			    </tr>
     












       
            <?php }
 }








}

}
 ?>



         </tbody>
      </table>
      <div class="addbutton mb-3">
          <a class="link-primary" href="subject1.php" display-40>
          <button type="button" class="btn btn-dark">

      ADD GRADES

          </button>
          </a>


			</div>
<BR>
<BR>
<BR>

      <form action="" method="GET">

                    <div class="input-group ">
                      <input
                        type="text"
                        name="search"
                        required
                        value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                        class="form-control"
                        placeholder="Search by Subject ID / Name / Subject Teacher Username"
                      />
                      
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">
                        Search
                      </button>
    
<br> <br>
<br>


                   
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Student Name</th>
                    <th>Subject Name</th>
                    <th>GRADE</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
    <?php
    $con = mysqli_connect("localhost", "root", "", "my_db");
    if (isset($_GET['search'])) {
        $subjectgrouphead = ($_SESSION["id"]);
        $filtervalues = $_GET['search'];
        $teacher=($_SESSION["id"]);
        $query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
 a.username,a.sub1 ,a.username,a.sec1, a.sgh1
 FROM grade b, users a WHERE  b.subjectname = a.sub1  
 AND b.section = a.sec1 AND a.username = b.teacher AND b.adviser = a.sgh1 
 AND teacher = '$teacher'
 ";
   $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) >
                  0) { foreach ($query_run as $items) { ?>
                  <tr>
                   <td><?= $items['studentname']; ?></td>
                    <td><?= $items['subjectname']; ?></td>
                    <td><?= $items['grade']; ?></td>
                    <td><a href="update.php? id=<?=$items['id']?>" 
			      	     class="btn btn-success ">Update</a>


                  </td>
                  <td>

                   <script type="text/javascript">  

function openulr(newurl) {  

if (confirm("Are you sure you want to Delete?")) {    

    document.location = newurl;  
  }}
    </script>
<strong><a class="btn btn-danger" href="javascript:openulr('php/delete.php?id=<?= $items['id'] ?>');">
  DISCARD
</a></strong>
			      </td>
                  </tr>
                  

                  <?php
            }
        } else {
                                                ?>
                  <tr>
                  <td colspan="4"><h1 style = "color:red"> No Data Found   </h1> 
                  <h5>
                    
                  </h5> </td>
                  </tr>
                  <?php
        }
    }
       }
       ?>
                </tbody>
                
              </table>
              </div>
     </div>
   </div>
  </div>


          
            </div>
      
      </div>
    </div>
      </div>
 
      </form>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
