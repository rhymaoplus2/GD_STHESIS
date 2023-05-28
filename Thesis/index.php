<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <style>
       body {
    
            background-size: cover;
            background-position: center;
        }
        .navbar-custom {
            background-color: transparent !important;
        }
        .navbar-custom .navbar-nav .nav-link {
            color: #fff;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        
        }
        .container {
            border-radius: 30px;
            width:auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.30);
            padding: 20px;
        }
        .btn {
            width: 300px;
        }
        .btn {
            background-color: #F2F2F2;
            color: black;
            border-radius: 20px;
        }
     
        .text{
text-align: center;
            font-size: 50px;
            text-shadow: .5px .5px .5px  #000000;
            font-family: tahoma ;
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

.login {
  animation: slide-in 3s ease-out forwards;

}

@keyframes slide-in {
  0% {
    transform: translateX(7 0%); /* Start position outside the screen, to the right */
  }
  100% {
    transform: translateX(0); /* End position, slide in to the screen */
  }
}
.btn {
  background-color: transparent;
  border: 1px solid #000; /* Remove any existing borders */
}

.btn:hover {
  border: 1.5px solid #000; /* Apply a dark border when hovering */
}



    </style>
</head>
<body>

  
<video autoplay muted loop id="myVideo">
  <source src="bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<br>

<div class="content">
  <div class="container ">
    <div class="row">
      <div class="col-md-8 text-center"> 
        <span class=" text text-center text-white fw-bold"  > 
      
            <b>
              <br>
        
              <br>
              MSU-MSAT High School <br>Grade Reporting <br> and Recording System
            </b>
       
        </span>  
      </div>
      <div class="login col-md-6 text-center bg-white" style="border-radius: 16px; padding: 25px; width: auto;  ">
      <img id="logo" class="mb-3" src="img/msu.png" width="80" height="80" alt="Logo">

  <br>
  <b>Select </b>
  <h4 class="text-left mb-3" style="font-family: Tahoma;"><b>User Type</b></h4>

  <button class="btn  btn-transparent" onclick="window.location.href='admin/index.php'">
    <img src="img/admin.png" alt="Admin Icon" style="float: left; width: 30px;">
    <b>Administrator</b>
  </button>
  <br>
  <br>
  <button class="btn  btn-transparent" onclick="window.location.href='registrar/'" style="text-decoration: none;">
    <img src="img/registrar.png" alt="Registrar Icon" style="float: left; width: 30px;">
    <b>Registrar's Staff</b>
  </button>
  <br>
  <br>
  <button class="btn btn-transparent text-center" onclick="window.location.href='subjectteacher/index.php'" style="text-decoration: none;">
    <img src="img/sub.png" alt="Adviser Icon" style="float: left; width: 30px;">
    <b>Subject Teacher</b>
  </button>

  <br>
  <br>
  <button class="btn btn-transparent text-left" onclick="window.location.href='teacher/index.php'" style="text-decoration: none;">
    <img src="img/adviser.png" alt="Adviser Icon" style="float: left; width: 30px;">
    <b>Adviser</b>
  </button>
  <br>
  <br>
  <button class="btn  btn-transparent text-left" onclick="window.location.href='principal/index.php'" style="text-decoration: none;">
    <img src="img/medal.png" alt="Adviser Icon" style="float: left; width: 30px;">
    <b>Principal</b>
  </button>
</div>

    </div>
    </div>
</div>
  </div>

   
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
</body>
</html>
