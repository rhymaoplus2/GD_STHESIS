<?php 

   session_start();
   include "../php/db_conn.php";

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




        <div class=" container ">
       
        <div class="box">
        <div class="content">
			<br>
      

			<h1 class="display-10 text-center">
 Students Information</h1>


			</div>
      
<form action="" method="GET">
                    <div class="input-group ">
                      <input
                        type="text"
                        name="search"
                        required
                        value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"
                        class="form-control"
                        placeholder="Search by First Name/Middle Name/Last Name"
                      />
                      
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning">
                        Search
                      </button>
                    </form>
<br> <br>
<br>


                   
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>LRN no.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>

           




    <?php
    $con = mysqli_connect("localhost", "root", "", "my_db");
    if (isset($_GET['search'])) {
        $adviser_id = ($_SESSION["id"]);
        $filtervalues = $_GET['search'];
        $query = "SELECT * FROM students WHERE adviser_id = '$adviser_id' AND CONCAT(lrnnumber,firstname,lastname,middlename)LIKE '%$filtervalues%' ";
        $query_run = mysqli_query($con, $query);

        if (mysqli_num_rows($query_run) >
                  0) { foreach ($query_run as $items) { ?>
                  <tr>
                   <td><?= $items['lrnnumber']; ?></td>
                    <td><?= $items['firstname']; ?></td>
                    <td><?= $items['middlename']; ?></td>
                    <td><?= $items['lastname']; ?></td>
                    <td><a href="update.php?id=<?=$items['id']?>" 
			      	     class="btn btn-success ">Update</a>

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
              <div class="link-center">
          <a class="link-primary" href="teacher_create.php" display-40>
          <button type="button" class="btn btn-dark">

      CREATE

          </button>
          </a>
          </div>
          
            </div>
      
      </div>
    </div>
      </div>
 



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
