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
            height: 100vh;
        }
        .container {
            border-radius: 15px;
            width:auto;
        }
        .btn {
            width: 300px;
        }
        .btn {
            background-color: #F2F2F2;
            color: black;
        }
        .btn:hover {
            background-color: #D9D9D9; /* Replace with your desired shade of darker white */
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

  
<video autoplay muted loop id="myVideo">
  <source src="bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
<div class="center">
    <div class="container bg-white p-4">
        <div class="row">
            <div class="col text-center">
            <img src="img/msu.png" width="70" height="70" alt="Logo">
            <br>
            <br>
            <h2 class="text-left" style="font-family: Tahoma;">Select User Type</h2>
       


        
                <br>
                <button class="btn text-center"><a href="teacher/index.php" style="color: black; text-decoration: none;"><img src="img/adviser.png" alt="Adviser Icon" style="float:left; width:30px;"><b>Continue as Adviser</b></button>
<br><br>
                <button class="btn text-center" ><a href="subjectteacher/index.php" style="color: black; text-decoration: none;"><img src="img/sub.png" alt="Adviser Icon" style="float:left; width:30px;"><b>Continue as Subject Teacher</b></button>
<br><br>
<button class="btn"><a href="" style="color: black; text-decoration: none;"><img src="img/registrar.png" alt="Registrar Icon" style="float:left;width:30px;"><b>Continue as Registrar Staff</b></button>
<br><br>
<button class="btn"><a href="admin/index.php" style="color: black; text-decoration: none;"><img src="img/admin.png" alt="Admin Icon" style="float:left;width:30px;"><b>Continue as Administrator</b></a></button>

<br>
            </div>
        </div>
    </div>
</div>
</div>
    
    <audio controls autoplay hidden>
        <source src="welcome.mp3" type="audio/mpeg">
    </audio>
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
