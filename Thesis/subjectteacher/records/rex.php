<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/records.php";
if (isset($_SESSION['username']) && isset($_SESSION['id'])) { ?>
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
}

.container form {
	width: 600px;
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
}
.box {
	width: 800px;
  
}
.container table {
	padding: 20px;
	
	
  background-color: white;
  border:10px;
}
.border {
	padding: 15px;

  background-color: white;
border-radius: 20px;
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
<?PHP include_once('header.php'); ?>
</div>


<div class="header" id="myHeader">
<?PHP include_once('header.php'); ?>
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






      <div class="container" >
		<div class="box">
    <div class="content">


       <?php if (isset($_GET['success'])) { ?>
           <div class="alert alert-success" role="alert">
           <audio controls autoplay  hidden>
<source src="../voice/success.mp3" type="audio/mpeg">
</audio>
			  <?php echo $_GET['success']; ?>
		    </div>
		    <?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
        <div class="border">
            <table class="table table-bordered ">

            <?php
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
                $i++;

                ?> 
           




              <thead >
                  <tr>
                  <th scope="col">Subject Name </th>
                  <th scope="col">Adviser Name</th>
                  <th scope="col">Section</th>
                  
                  <th scope="col" colspan="2">Actions </th>
                </tr>
              </thead>
        <tbody>    

<?php
                        require "./php/db_conn.php";
                        $name = $_SESSION['name'];

                        $query = "SELECT a.subjectname ,a.teacher1,a.subjectgrouphead, a.section,
                         b.sub1,b.id,b.sgh1,b.sec1 FROM subjects a, users b
                        WHERE a.teacher1=b.name  AND name='$name'
 ";

                        $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {

              while ($Row = mysqli_fetch_assoc($result)) {

                ?>
           <tr>
           <td><?php echo $Row["subjectname"]; ?></td>
           <td><?php echo $Row["sgh1"]; ?></td>
          <td><?php echo $Row["sec1"]; ?></td>
          <td><a href="subject1view.php" 
			      	     class="btn btn-dark "><b>VIEW / ADD GRADES</b></a>

			    </tr>
           


<?php
                    require "./php/db_conn.php";
                    $name = $_SESSION['name'];

                    $query = "SELECT a.subjectname ,a.teacher1,a.section,a.subjectgrouphead, b.sub2,b.id,b.sgh2,b.sec2 FROM subjects a, users b
                        WHERE a.teacher1=b.name  AND a.subjectgrouphead=b.sgh2 
                        AND a.section = b.sec2
 ";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

                      while ($Row = mysqli_fetch_assoc($result)) {

                        ?>
           <tr>
           <td><?php echo $Row["subjectname"]; ?></td>
          <td><?php echo $Row["sgh2"]; ?></td>
          <td><?php echo $Row["sec2"]; ?></td>
        
          <td><a href="subject1view.php" 
			      	     class="btn btn-dark ">VIEW / ADD GRADES</a>

    
			    </tr>
     









       
            <?php }
                    }

              }
            }

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
      </div>
 
      </form>

          
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
