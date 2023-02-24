<?php 

   session_start();
   include "../php/db_conn.php";
   include "./php/subject1view.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
	<title>PRINTABLE DATA</title>
  
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



  <style>
@media print {
  /* Set the page size to A4 */
  @page {
    size: A4;
    margin: 0;
  }
  .btn-icon img {
  width: 1.5rem;
  height: 1.5rem;
}

  /* Set the footer to be at the bottom of the page */
  .print-footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    text-align: center;
    font-size: 12px;
    padding: 10px;
    border-top: 1px solid #ccc;
  }

  /* Set the page break after two pages */
  .page-break {
    page-break-after: always;
  }

  /* Hide the file name and other description */
  .print-header,
  .print-footer {
    display: none;
  }

  /* Only display content in the last page */
  .wrapper {
    counter-increment: page;
  }

  /* Add margin to the top of the second page */
  .wrapper:nth-of-type(n+3) {
    margin-top: 100px;
  }

  /* Add page number to the last page */
  .wrapper:after {
    content: counter(page);
    display: block;
    font-size: 0;
    line-height: 0;
    page-break-after: always;
  }
  .wrapper:last-of-type:after {
    content: "";
  }
  .container-fluid.p-0 {
  display: none;
}


  
}

td {
  border: 1px solid black;
}

.failed {
  color: red;
  border-right-color: white; /* set border color to white */
}

.wrapper{
  font-size: 11px;
}
.container {

	display: flex;
	justify-content: ;
	align-items: center;
	flex-direction: column;

}
hr {
  border: none;
  border: 1px solid;
  width: 120%;
  background-color: black;
}


.container form {
	width: 800px;
	padding: 20px;


}
.box {
	width: 750px;
}

.container table {
	padding: 5px;

  font-size: 11px;
font-family: calibri;
  border: 10px;
}
.container text{


}
.border {
	padding: 15px;
	

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
  .text{

  }

  .text2
  {
      margin-left: 23rem;
      margin-top: -20rem;
      width: 45rem;
      height: 10rem;
  }




.top-container {
    background-color: white;
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

    </style>
</head>
<body >

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Hello,



        <?=$_SESSION['name']?>!


        
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
      <div class="text-center">
  <img src="img/printer.gif" alt="Your Image" class="img-fluid w-50">
</div>

        <p><b>To display the grades of the students,
          <br>
          select semester and quarter and click the submit button </b></p>
      </div>
    </div>
  </div>
</div>




<script>
  window.onload = function() {
    var myModal = new bootstrap.Modal(document.getElementById('myModal'), {
      keyboard: false
    });
    myModal.show();
  };
</script>


<div class="container-fluid p-0" style="background-color: black;">
  <div class="row mx-0 justify-content-center align-items-center pt-4">
    <div class="col-md-6">
      <form method="POST" action="" class="d-flex">
        <div class="mb-3 flex-row d-inline-flex">
          <label for="quarter" class="form-label me-3 text-white">Quarter:</label>
          <select class="form-select form-control me-3" id="quarter" name="quarter">
            <option value="FIRST">FIRST</option>
            <option value="SECOND">SECOND</option>
            <option value="THIRD">THIRD</option>
            <option value="FOURTH">FOURTH</option>
          </select>
          <label for="semester" class="form-label me-3 text-white">Semester:</label>
          <select class="form-select form-control me-3" id="semester" name="semester">
            <option value="FIRST">FIRST</option>
            <option value="SECOND">SECOND</option>
            <option value="THIRD">THIRD</option>
            <option value="FOURTH">FOURTH</option>
          </select>
          <input type="submit" value="Submit" class="btn btn-light form-control" >
         
          <div class="fixed-bottom text-center py-3">
          <button class="btn  bg-transparent btn-transparent" onclick="window.print()"
  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Print now!">
  <span class="btn-icon">
    <img src="img/printer.gif" alt="Print icon" style="width: auto; height: 100px;">
  </span>

</button>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  })
</script>

</div>
        </div>
      </form>
    </div>
  </div>
</div>










    <div class="d-flex justify-content-center align-items-center position-relative">

    <img src="header.png" class=" p top-0 w-10 h-auto" style="max-height: 150px;" alt="Example Image">


</div>







<div class="container " >
		<div class="box">
    <div class="content">


            <table class="table table-bordered small table-sm" >

            <?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
             
			  	 ?> 
           
           <div class="mb-3 " style="display:inline-block;">
           <p>
           Track & Strand :








           <?php

$teacher = $_SESSION['name'];

$query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
a.name,a.sub1 ,a.name,a.sec1, a.sgh1,b.gender,b.adviser,
b.firstname,b.middlename,b.lastname,b.remarks,c.pname,d.crname
FROM grade b, users a , principal c , cr d WHERE  b.subjectname = a.sub1  
AND b.section = a.sec1 AND a.name = b.teacher AND b.adviser = a.sgh1 
AND teacher = '$teacher' AND b.gender = 'MALE'
";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $sub1 = $row['sub1'];
    $pname = $row['pname'];
    $crname = $row['crname'];
    $name = $row['name'];
    $adviser = $row['adviser'];
} else {
    // handle error
}
?>






           <br>
           Year & Section : <b><?=$_SESSION['sec1']?> </b>
           <br>
           Adviser :<b>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <?php echo $adviser; ?> </b> 
           </p>
          </div>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         
          <div class=" ms-auto justify-content-right" style="display:inline-block;">
           <p>
       





           <?php

$teacher = $_SESSION['name'];
$query = "SELECT b.id, b.studentname, b.subjectname, b.grade, b.teacher, b.section, b.adviser,
a.name, a.sub1, a.name, a.sec1, a.sgh1, b.gender, b.firstname, b.middlename, b.lastname, b.remarks,
b.quarter, b.semester
FROM grade b, users a, principal c, cr d
WHERE b.subjectname = a.sub1 AND b.section = a.sec1 AND a.name = b.teacher AND b.adviser = a.sgh1 
AND teacher = '$teacher' ";
$result = mysqli_query($conn, $query);
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $sub1 = $row['sub1'];

  $name = $row['name'];
  $adviser = $row['adviser'];
  $quarter = $row['quarter'];
  $semester = $row['semester'];
} else {
  // handle error
}
?>


<?php
$sub1 = "<b>$sub1</b>";
$quarter = "<b>$quarter</b>";
$semester = "<b>$semester</b>";

$sub1 = "Subject :  &nbsp;&nbsp;&nbsp;" . str_pad($sub1, strlen("Semester: "));
$quarter = "Quarter :&nbsp;&nbsp;&nbsp;&nbsp;" . str_pad($quarter, strlen("Subject: "));
$semester = "Semester   : " . $semester;

echo $sub1 . "<br>";
echo $quarter . "<br>";
echo $semester . "<br>";
?>



           </p>
             </div>
        
        


             <?php
 require "./php/db_conn.php";
                        $teacher = $_SESSION['name'];
                        if (isset($_POST['semester']) && isset($_POST['quarter'])) {
                          $semester = $_POST['semester'];
                          $quarter = $_POST['quarter'];
                          $query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
                           a.name,a.sub1 ,a.name,a.sec1, a.sgh1,b.gender,b.quarter,
                           b.firstname,b.middlename,b.lastname,b.remarks
                           FROM grade b, users a WHERE  b.subjectname = a.sub1  
                           AND b.section = a.sec1 AND a.name = b.teacher AND b.adviser = a.sgh1 
                           AND teacher = '$teacher' AND b.gender = 'MALE' AND b.semester='$semester' AND b.quarter='$quarter'";
                         ;
                         $result = mysqli_query($conn, $query);
                          // process the query result as needed
                        }
$result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) 
 $rowNum = 1;
 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
             <thead tyle="height: 10px;">
  <tr >
    <th class="text-center align-middle " style="width: 2%; ">NO.</th>
    <th class="text-center align-middle " style="width: 10%;">LASTNAME</th>
    <th class="text-center align-middle " style="width: 10%;">FIRSTNAME</th>
    <th class="text-center align-middle " style="width: 3%;">M.I.</th>
 

    <th class="text-center align-middle " style="width: 5%;"><?php echo $Row["quarter"]; ?><br>QUARTER</th>
    <th class="text-center align-middle " style="width: 5%;">REMARKS</th>
  </tr>
</thead>
              <thead >
      <th colspan="6"class="text text-left" ><b><div class="text text-primary">MALE</div></b></th>
              </thead>
        
          
       

     
           <tr>
           <td class="text text-center" ><?php echo  $rowNum ?></td>
          <td class="text "><?php echo $Row["lastname"]; ?></td>
          <td class="text " ><?php echo $Row["firstname"]; ?></td>
          <td class="text text-center "><?php echo substr($Row["middlename"], 0, 1); ?>.</td>
          
          <td class="text text-center" ><?php echo $Row["grade"]; ?></td>
          <td class="text-center" <?php if ($Row['remarks'] == 'FAILED') { ?> style="color: red;" <?php } ?>>
  <b><?php echo $Row["remarks"]; ?></b>
</td>

			   

			    </tr>
     
                <thead >
      <th colspan="6"class="text text-left" ><b><div class="text text-danger">FEMALE</div></b></th>
              </thead>



              <?php
 require "./php/db_conn.php";
                        $teacher = $_SESSION['name'];
                        if (isset($_POST['semester']) && isset($_POST['quarter'])) {
                          $semester = $_POST['semester'];
                          $quarter = $_POST['quarter'];
                          $query = "SELECT b.id, b.studentname,b.subjectname,b.grade,b.teacher,b.section,b.adviser,
                           a.name,a.sub1 ,a.name,a.sec1, a.sgh1,b.gender,
                           b.firstname,b.middlename,b.lastname,b.remarks
                           FROM grade b, users a WHERE  b.subjectname = a.sub1  
                           AND b.section = a.sec1 AND a.name = b.teacher AND b.adviser = a.sgh1 
                           AND teacher = '$teacher' AND b.gender = 'FEMALE' AND b.semester='$semester' AND b.quarter='$quarter'";
                         ;
                         $result = mysqli_query($conn, $query);
                          // process the query result as needed
                        }
$result = mysqli_query($conn, $query);
 if (mysqli_num_rows($result) > 0) 
 $rowNum = 1;
 {

     while ($Row = mysqli_fetch_assoc($result)) 
     
     {
      
      ?>
     <br>
           <tr>
           <td class="text text-center" ><?php echo  $rowNum ?></td>
          <td class="text "><?php echo $Row["lastname"]; ?></td>
          <td class="text " ><?php echo $Row["firstname"]; ?></td>
          <td class="text text-center "><?php echo substr($Row["middlename"], 0, 1); ?>.</td>
          
          <td class="text text-center" ><?php echo $Row["grade"]; ?></td>
  
          <td class="text text-center" <?php if ($Row["remarks"] == "FAILED") { ?> style="color: red;" <?php } ?>>
  <b><?php echo $Row["remarks"]; ?></b>
 
</td>

     


     </tr>

       
            <?php }
 }


     }

    }
    }


}


 ?>



         </tbody>
      </table>
</div>


                  <?php
      

       ?>

<div class="wrapper " >

<div class="end">
  <!-- Page content goes here -->
  <div class="relative-bottom" >
 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 

    <div class="mb-3 " style="display:inline-block;">
    Prepared by
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b><?php echo $name; ?></b>
    <hr class="my-1 " style="background-color:black;">
 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i>Subject Teacher</i>
    <br>
    <br>
    Noted by
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b><?php echo $pname; ?></b>
    <hr class="my-1 " style="background-color:black;">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i>Principal</i>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <div class=" ms-auto justify-content-right" style="display:inline-block;">
    <br>
    <br>
    
    &nbsp;&nbsp;<b> <span id="currentDate"></B></span>

    <script>
  // Get the current date
  var currentDate = new Date();

  // Format the date as desired (e.g. "02/23/2023")
  var formattedDate = (currentDate.getMonth() + 1) + '/' + currentDate.getDate() + '/' + currentDate.getFullYear();

  // Update the HTML element with the current date
  document.getElementById('currentDate').textContent = formattedDate;
</script>
    <hr class="my-1">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <i>Date</i>&nbsp;&nbsp;&nbsp;
    <br>
   
    <br><br><br><br>
    <hr class="my-1">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <i>Date</i>&nbsp;&nbsp;&nbsp;
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;
<div class="mb-3 " style="display:inline-block;">
    Checked by
    <br>
    <br>
    <br>
    <hr class="my-1">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i>Subject Grouphead</i>
    <br>
    <br>
    Approved by
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <b><?php echo $crname; ?></b>
    <hr class="my-1 " style="background-color:black;">
  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <i>Campus Registrar</i>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


   <div class=" ms-auto justify-content-right" style="display:inline-block;">
    <br>
    
 
    <hr class="my-1">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <i>Date</i>&nbsp;&nbsp;&nbsp;
    <br>
    <br>
     
    <br><br>   
    <br>
    <hr class="my-1">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;
    <i>Date</i>&nbsp;&nbsp;&nbsp;
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<br>
<br>
<br>


  </div>
</div>
  </div>
</div>
      
<script>
  var wrappers = document.querySelectorAll('.wrapper');
  wrappers[wrappers.length - 1].classList.add('last-page');
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
