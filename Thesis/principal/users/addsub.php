


<?php include 'n-addsub.php'; 

session_start();
   include "../php/db_conn.php";
   include "../php/read.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>



<!DOCTYPE html>
<html>
<head>
	<title>ADD SUBJECT</title>
  <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>


.container {
 height: 10px;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;

}

.container form {
	width: 400px;
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
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-size: cover;
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
.border{
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border:30px;
  background-color: white;
  max-width:600px;

  margin: 0 auto;

}
.b::-webkit-scrollbar {
  width: 10px; /* Width of the scrollbar */
}

.b::-webkit-scrollbar-track {
  background-color: #f1f1f1; /* Color of the scrollbar track */
}

.b::-webkit-scrollbar-thumb {
  background-color: #888; /* Color of the scrollbar thumb */
  border-radius: 5px; /* Rounded corners of the scrollbar thumb */
}

.b::-webkit-scrollbar-thumb:hover {
  background-color: #555; /* Color of the scrollbar thumb on hover */
}


  </style>

</head>
<body>



<div class="header" id="myHeader">
<?PHP include_once('header.php');?>
</div>



<br>
<div class="fade-in">
<div class="border">
<form class="mb-3 " action="n-addsub.php" 
		      method="post">
            
<header class="text-center text-white mb-3" style="font-size:30px;

background-image: linear-gradient(60deg, #29323c 0%, #485563 100%); border-radius: 20px;">
    <b>
        <?php if (isset($_GET['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_GET['error'] . '</div>';
        } else {
            echo 'Assign Subject/Section';
        } ?>
    </b>
</header>

<hr>  
<label for="" class="form-label text-start mb-3"><strong>Subjects</strong></label>
 
<div class="b" style="height: 100px; overflow-y: scroll; padding-right: 10px;" id="scrollable">
 <!--
 <script>
const scrollableElement = document.getElementById("scrollable");
let scrollAmount = 0;
const scrollStep = 1;
const scrollDelay = 20; // In milliseconds

function autoScroll() {
  scrollAmount += scrollStep;
  if (scrollAmount >= scrollableElement.scrollHeight - scrollableElement.clientHeight) {
    scrollAmount = 0;
  }
  scrollableElement.scrollTop = scrollAmount;
}

let scrollInterval = setInterval(autoScroll, scrollDelay);

scrollableElement.addEventListener("mouseenter", () => {
  clearInterval(scrollInterval);
});

scrollableElement.addEventListener("mouseleave", () => {
  scrollInterval = setInterval(autoScroll, scrollDelay);
});

</script>
-->
  <select name="sub1" id="sub1" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub1 has no value
    if(empty($row['sub1'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub1'].'" selected>'.$row['sub1'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub1']) && $row['sub1']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub2" id="sub2" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub1 has no value
    if(empty($row['sub2'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub2'].'" selected>'.$row['sub2'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub2']) && $row['sub2']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub3" id="sub3" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub1 has no value
    if(empty($row['sub3'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub3'].'" selected>'.$row['sub2'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub3']) && $row['sub3']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub4" id="sub4" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub4 has no value
    if(empty($row['sub4'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub4'].'" selected>'.$row['sub4'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub4']) && $row['sub4']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub5" id="sub5" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub5 has no value
    if(empty($row['sub5'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub5'].'" selected>'.$row['sub5'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub5']) && $row['sub5']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub6" id="sub6" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub6 has no value
    if(empty($row['sub6'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub6'].'" selected>'.$row['sub6'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub6']) && $row['sub6']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub7" id="sub7" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub7 has no value
    if(empty($row['sub7'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub7'].'" selected>'.$row['sub7'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub7']) && $row['sub7']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub8" id="sub8" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub8 has no value
    if(empty($row['sub8'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub8'].'" selected>'.$row['sub8'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub8']) && $row['sub8']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub9" id="sub9" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub9 has no value
    if(empty($row['sub9'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub9'].'" selected>'.$row['sub9'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub9']) && $row['sub9']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>

<select name="sub10" id="sub10" class="form-control text-start mb-3">
    <?php
    // Add blank option if sub10 has no value
    if(empty($row['sub10'])){
        echo '<option value="" selected></option>';
    }else{
        echo '<option value="'.$row['sub10'].'" selected>'.$row['sub10'].'</option>';
    }
    ?>
    <option value=""></option>
    <?php 
    $query ="SELECT subjectname FROM subjects ORDER BY subjectname ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
            $option =$optionData['subjectname'];
            ?>
            <?php
            //selected option
            if(!empty($row['sub10']) && $row['sub10']== $option){
                // selected option
                ?>
                <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
                <?php 
                continue;
            }?>
            <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
            <?php
        }
    }
    ?>
</select>


  </div>
    
  <hr>
  <label for="" class="form-label text-start"><strong>Sections</strong></label>
<br> 
<div class="b" style="height: 100px; overflow-y: scroll; padding-right: 10px;" id="scroll">
  <!-- content here -->


<!--
<script>
var scrollDiv = document.getElementById("scroll");
var scrollInterval1, scrollInterval2;

scrollInterval1 = setInterval(function() {
  if (scrollDiv.scrollTop + scrollDiv.clientHeight >= scrollDiv.scrollHeight) {
    scrollDiv.scrollTop = 0;
  } else {
    scrollDiv.scrollTop += 1;
  }
}, 21);

scrollDiv.addEventListener("mouseenter", function() {
  clearInterval(scrollInterval1);
  clearInterval(scrollInterval2);
});

scrollDiv.addEventListener("mouseleave", function() {
  scrollInterval1 = setInterval(function() {
    if (scrollDiv.scrollTop + scrollDiv.clientHeight >= scrollDiv.scrollHeight) {
      scrollDiv.scrollTop = 0;
    } else {
      scrollDiv.scrollTop += 1;
    }
  }, 50);
});


</script>

-->




<select name="sec1" id="sec1" class="form-control text-start mb-3">
 <option value="<?=$row['sec1']?>"><?=$row['sec1']?></option>
 <option value=""?></option>
    <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['name'];
    ?>
    <?php
    //selected option
    if(!empty($section) && $section== $option){
    // selected option
    ?>
    <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
  }
    ?>
</select>



<select name="sec2" id="sec2" class="form-control text-start mb-3">
<option value="<?=$row['sec2']?>"><?=$row['sec2']?></option>
<option value=""?></option>
   <?php 
   $query ="SELECT name FROM section ORDER BY name ASC";
   $result = $conn->query($query);
   if($result->num_rows> 0){
       while($optionData=$result->fetch_assoc()){
       $option =$optionData['name'];
   ?>
   <?php
   //selected option
   if(!empty($section) && $section== $option){
   // selected option
   ?>
   <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
   <?php 
continue;
  }?>
   <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
  <?php
   }}
 
   ?>
</select>


<select name="sec3" id="sec3" class="form-control text-start mb-3">
  <option value="<?=$row['sec3']?>"><?=$row['sec3']?></option>
  <option value=""?></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec4" id="sec4" class="form-control text-start mb-3">
  <option value="<?=$row['sec4']?>"><?=$row['sec4']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec5" id="sec5" class="form-control text-start mb-3">
  <option value="<?=$row['sec5']?>"><?=$row['sec5']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec6" id="sec6" class="form-control text-start mb-3">
  <option value="<?=$row['sec6']?>"><?=$row['sec6']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec7" id="sec7" class="form-control text-start mb-3">
  <option value="<?=$row['sec7']?>"><?=$row['sec7']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<!-- Repeat the above code with "sec8", "sec9", and "sec10" -->
<select name="sec8" id="sec8" class="form-control text-start mb-3">
  <option value="<?=$row['sec8']?>"><?=$row['sec8']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec9" id="sec9" class="form-control text-start mb-3">
  <option value="<?=$row['sec9']?>"><?=$row['sec9']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>

<select name="sec10" id="sec10" class="form-control text-start mb-3">
  <option value="<?=$row['sec10']?>"><?=$row['sec10']?></option>
  <option value=""></option>
  <?php 
    $query ="SELECT name FROM section ORDER BY name ASC";
    $result = $conn->query($query);
    if($result->num_rows > 0){
      while($optionData = $result->fetch_assoc()){
        $option = $optionData['name'];
        ?>
        <?php
        //selected option
        if(!empty($section) && $section == $option){
        // selected option
        ?>
          <option value="<?php echo $option; ?>" selected><?php echo $option; ?> </option>
        <?php 
          continue;
        }?>
        <option value="<?php echo $option; ?>" ><?php echo $option; ?> </option>
        <?php
      }
    }
  ?>
</select>














	         <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
		
		 
          </div>


          <hr>

	
          <button type="submit" class="btn btn-primary " name="update" style="background-color: transparent; border: none; border-radius:100%; width:50px; height: 50px;"><img style="width:30px;" src="img/ok.png" class="img-fluid rotate-on-hover" alt="submit"></button>

<button type="button" class="btn btn-danger" style="background-color: transparent; border: none; border-radius: 100%; width: 50px; height: 50px;" onclick="location.href='index.php'">
<img style="width: 30px;" src="img/cancel.png" class="img-fluid rotate-on-hover" alt="submit">
</button>


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
