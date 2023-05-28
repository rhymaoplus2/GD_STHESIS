

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>


table{
 margin: 1cm;
}

  .container {
  width: 1000px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;


}

.formx {
	width: auto;
	padding: 20px;
	border-radius: 30px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.box {
	width: 900px;
  
}
 table {
	padding: 20px;
	border-radius: 10px;
	max-width: 80%;
  border:10px;

}
.border {
	padding: 20px;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:10px;
  border-radius: 30px;
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


.modal
{
 border: 100px;
 background-color: ;
 
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
  .btn-transparent {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:hover {
    background-color: transparent;
    border: none;
  }

  .btn-transparent:focus {
    background-color: transparent;
    border: none;
    box-shadow: none;
  }

  .btn img {
    width: 30px;
    height: 30px;
  }
  #refresh-img {
  transition: all 0.2s;
}

button:hover {
  transform: scale(1.2);
}
#search {
  border-width: 2px;
}
.page-item a.page-link {
  opacity: 0.5;
}
.page-item.active a.page-link {
  font-weight: bold;
  opacity: 1;
}
td a {
  text-decoration: none;
  color: black;
}


td a:hover {
  font-weight: bold;
  color: black;
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

.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
  .form-group p {
  display: inline-block;
  margin-right: 10px; /* optional spacing between the label and value */
}
.label-value {
  display: inline-block;
  vertical-align: top;
  margin-right: 20px;
}
.label {
  margin-right: 5px;
}
@media print {

  .img-fluid{
    display: none;
  }
}
button{
  border: none;
  background-color: transparent;
}

  </style>

</head>
<body>

<script>
  const printButton = document.getElementById('print-button');
  printButton.addEventListener('click', () => {
    window.print();
  });
</script>

  <?php
if (isset($_GET['lrnnumber'])) {
    include "db_conn.php";

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $lrnnumber = validate($_GET['lrnnumber']);

    $sql = "SELECT  * FROM students WHERE lrnnumber=$lrnnumber";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      echo "<div class='' style='padding:0px; margin:1cm; font-size:13px;'>";
  
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="row">';
        echo '<div class="co

        <!DOCTYPE html>
        <html>
        <head>
          <title>View</title>
          <link  href="css/bootstrap.min.css" rel="stylesheet">
            <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        
        <style>
        
        html, body {
          height: 100%;
        }
        
        
        body {
        
          background-repeat: no-repeat;
        }
        
        
        
          .container {
          width: 1000px;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-direction: column;
        
        
        }
        
        .formx {
          width: auto;
          padding: 20px;
          border-radius: 30px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
        .box {
          width: 900px;
          
        }
         table {
          padding: 20px;
          border-radius: 10px;
          max-width: 80%;
          border:10px;
        
        }
        .border {
          padding: 20px;
          border-radius: 10px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
          border:10px;
          border-radius: 30px;
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
        
        
        .modal
        {
         border: 100px;
         background-color: ;
         
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
          .btn-transparent {
            background-color: transparent;
            border: none;
          }
        
          .btn-transparent:hover {
            background-color: transparent;
            border: none;
          }
        
          .btn-transparent:focus {
            background-color: transparent;
            border: none;
            box-shadow: none;
          }
        
          .btn img {
            width: 30px;
            height: 30px;
          }
          #refresh-img {
          transition: all 0.2s;
        }
        
        #refresh-img:hover {
          transform: scale(1.2);
        }
        #search {
          border-width: 2px;
        }
        .page-item a.page-link {
          opacity: 0.5;
        }
        .page-item.active a.page-link {
          font-weight: bold;
          opacity: 1;
        }
        td a {
          text-decoration: none;
          color: black;
        }
        
        
        td a:hover {
          font-weight: bold;
          color: black;
        }
        
        .table-scrollable{
          height: 400px;
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
        
        .fade-in {
          animation: fadeIn 0.5s ease-in-out;
        }
        
        @keyframes fadeIn {
          0% {
            opacity: 0;
          }
          100% {
            opacity: 1;
          }
        }
          .form-group p {
          display: inline-block;
          margin-right: 10px; /* optional spacing between the label and value */
        }
        .label-value {
          display: inline-block;
          vertical-align: top;
          margin-right: 20px;
        }
        .label {
          margin-right: 5px;
        }
          </style>
        
        </head>
        <body>
        
        
          <br>
          <?php
        if (isset($_GET['lrnnumber'])) {
            include "db_conn.php";
        
            function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $lrnnumber = validate($_GET['lrnnumber']);
        
            $sql = "SELECT  * FROM students WHERE lrnnumber=$lrnnumber";
            $result = mysqli_query($conn, $sql);
        
            if (mysqli_num_rows($result) > 0) {
                echo "<table class='table'>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td><b>ID Number:</b> ".$row['id']."</td>";
                    echo "<td colspan='3'><b>LRN Number:</b> ".$row['lrnnumber']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td><b>First Name:</b> ".$row['firstname']."</td>";
                    echo "<td><b>Middle Name:</b> ".$row['middlename']."</td>";
                    echo "<td><b>Last Name:</b> ".$row['lastname']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Suffix:</b> ".$row['suffix']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Gender:</b> ".$row['gender']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Birth Place:</b> ".$row['birthplace']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Birth Date:</b> ".$row['birthday']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Age:</b> ".$row['age']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Address:</b> ".$row['address']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Parent/Guardian:</b> ".$row['parent']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>School Year:</b> ".$row['syear']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Grade Level:</b> ".$row['grade']."</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td colspan='4'><b>Section Name:</b> ".$row['section']."</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No records found";
            }
        
            mysqli_close($conn);
        }
        ?>
        
        
          </div>
        
        
        
        
        
               
          
        
        
            
                      <!--
                   <a class="link-primary" href="teacher_read.php" display-40>
                  <button type="button" class="btn btn-dark">
        
             Back
                  </button>
        
               -->
          
              </form>
              <br>
              <br>
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
        </html>l-md-5">';
        echo 'Student Name: <b>'.$row['fullname'].'</b>';
        echo '</div>';
        echo '<div class="col">';
        echo 'LRN Number: <b>'.$row['lrnnumber'].'</b>';
        echo '</div>';
        echo '<div class="col text-end">';
        echo 'ID Number: <b>'.$row['idnumber'].'</b>';
        echo '</div>';
        echo '</div>';
        
        
        
        

        
  
          echo "<div>";
          echo "Gender: <b>".$row['gender']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Birth Place: <b>".$row['birthplace']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Birth Date: <b>".$row['birthday']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Age: <b>".$row['age']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Address: <b>".$row['address']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Parent/Guardian: <b>".$row['parent']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "School Year: <b>".$row['syear']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Year Level: <b>".$row['grade']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Section: <b>".$row['section']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Adviser: <b>".$row['adviser_id']."</b>";
          echo "</div>";
  
          echo "<div>";
          echo "Subjects:";
          echo "<br>";
          echo "<b>".$row['subject1']."</b>";
          echo "<br>";
          echo "<b>".$row['subject2']."</b>";
          echo "<br>";
          echo "<b>".$row['subject3']."</b>";
          echo "<br>";
          echo "<b>".$row['subject4']."</b>";
          echo "<br>";
          echo "<b>".$row['subject5']."</b>";
          echo "<br>";
          echo "<b>".$row['subject6']."</b>";
          echo "<br>";
          echo "<b>".$row['subject7']."</b>";
          echo "<br>";
          echo "<b>".$row['subject8']."</b>";
          echo "<br>";
          echo "<b>".$row['subject9']."</b>";
          echo "<br>";
          echo "<b>".$row['subject10']."</b>";
          echo "</div>";
      }
  
      echo "</div>";
  } else {
      echo "No records found";
  }
  
    mysqli_close($conn);
}
?>


  </div>





		   
	


	
  

</body>
</html>