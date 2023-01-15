<?php 

   session_start();
   include "../php/db_conn.php";
   include "php/rec.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])&& isset($_SESSION['name'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>RECORDS</title>
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


<form action="./php/create.php"
      method="post">



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
           
<!--
         
           <?php
                    require "php/db_conn.php";
                    
                    $id = $_SESSION["id"];
                    $query =
                      "SELECT * FROM users WHERE id='$id';
                    ";
                    // $query = "SELECT students.fullname,students.adviser_id,students.firstname
                    //FROM students 
                    //INNER JOIN subjects   ON subjects.subjectgrouphead = adviser_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

      while ($Row = mysqli_fetch_assoc($result)) {

        ?>
   
   <br>
   <br>
   <br>

    <h1 class="text-center">       
 
  <?= $Row['st1'] ?>   GRADES 
   
      </h1>
 		
      -->


     <div class="container" >

   <div class="content">
               
  
      <table class="table table-bordered ">
              <thead >
                  <tr>
                  
                  <th scope="col">Student ID</th>
          
                  <th scope="col">Student Name</th>
                  <th  scope="col">Subject Name </th>
                  <th scope="col">Grade </th>
          
                </tr>
              </thead>
        <tbody>    
          
        <tr>
           



        




         
<?php
                    require "php/db_conn.php";
                    $teacherid = $_SESSION["id"];
                    $subt1 = $_SESSION["id"];
                    $query =
                      "SELECT a.firstname, a.middlename, a.lastname, a.adviser_id,a.lrnnumber, a.fullname,a.section, a.subject1,b.st1,b.sub1,a.id,
                      c.subjectgrouphead, c.subjectname,c.teacherid, c.section,c.teacherid
                     FROM students a, users b , subjects c where 
                      b.st1=c.subjectname    AND a.subt1=b.id AND a.subject1=b.st1 AND a.adviser_id=b.sgh1
                      AND b.sgh1=c.subjectgrouphead  ORDER BY lastname ASC

                    ";
                    // $query = "SELECT students.fullname,students.adviser_id,students.firstname
                    //FROM students 
                    //INNER JOIN subjects   ON subjects.subjectgrouphead = adviser_id";
                    $result = mysqli_query($conn, $query);
                    if (mysqli_num_rows($result) > 0) {

                      while ($Row = mysqli_fetch_assoc($result)) {

                        ?>
   

 
            
<td>
<input disabled class="no" value="<?= $Row['id']; ?>">
</input>
</td>
                     
<td hidden colspan="">
<input class="no" id="studentname" name="studentname[]" value="<?= $Row['fullname'] ?>">
</input>
</td>

<td>

<?= $Row['lastname'] ?> &nbsp
<?= $Row['firstname'] ?> &nbsp
<?= $Row['middlename'] ?>

</td>
           

           
<td >
            <input hidden class="no" id="subjectname" name="subjectname[]" 
            value="<?= $Row['subjectname'] ?>">
          </input>
          <b class="text-danger"><?= $Row['subjectname'] ?></b>
        </td>
          
          
          
          
          
          
         
        

        


   
          <td><input id="grade" name="grade[]">
         </td>

          <td hidden><input value=" <?= $_SESSION['name'] ?> " id="teacher" name="teacher[]">
       




          



  
        </td>
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
      <button type="submit" ]
        class="btn btn-primary"
        name="submit">ADD</button>
</form>

      <br>



      
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
