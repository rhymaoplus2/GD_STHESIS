
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adviser</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>
    
.logo
{
margin-left: 1rem;
margin-top: -5rem;


}

.logintext
{
  margin-left: -19rem;
  margin-top: -5rem;
}
.msutext
{
margin-left: 34rem;
margin-top: -5rem;
}
.link-primary
{
  color: black;
  text-decoration: none;
  font-size: 30px;
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
.container {
    width: 350px; 

  }
  
  .link-primary {
    float: left;
  }
  .rounded {
  border-radius: 60px;
}

</style>
</head>

<body>
  

<video autoplay muted loop id="myVideo">
  <source src="../bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="content">


    <div class ="container d-flex justify-content-center
    align-items-center "
    style="min-height: 100vh " >
    
        <form class="border shadow p-3 rounded bg-white"
        action="php/check-login.php"
        method="post"      
        style="width: 450px;"> 

  <a class="link-primary" href="../index.php" display-40>
    <b>
   
      <img src="img/back.png" class="rounded mx-auto d-block text-center" alt="..." style="display: inline-block; width: 30px; height:30px; display: inline-block;"> 
    </b>
  </a>
 
  <span style="display: inline-block; font-size: 20px; font-family: Tahoma;">&nbsp;<b>Logging in as an<br>&nbsp;Subject Teacher</b></span>
 <div class="text-center"> <span class="text-center"style="display: inline-block; font-size: 12px; font-family: Tahoma;">
  <br>Never share your password<br>with anyone. </span>
</div>


        <!--
      
              <div class="logintext"><h1 class="text-center p-3">LOGIN</h1>

      
              </div>
-->

              <!--
              <div class = "logo"><img src="msu1.gif" class="rounded mx-auto d-block" alt="..." style="width: 5rem;">
  
              </div>
-->
       
              <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
        
<audio controls autoplay  hidden>
<source src="voice/incorrect.mp3" type="audio/mpeg">
</audio>

			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
               
  <div class="mb-3">
  <label for="username" class="form-label" style="display: inline-block; font-size: 12px; font-family: Tahoma;">username</label>
    <input type="text" 
    placeholder="kentvergel2023"
           class="form-control" 
           id="username"
           name="username">
  </div>

  <div class="mb-3">
    <!--
  <label for="username" class="form-label"><b>username</b></label>
    <label for="password" class="form-label"><b>password</b></label>
              -->
              <label for="username" class="form-label" style="display: inline-block; font-size: 12px; font-family: Tahoma;">password</label>
    <input type="password" 
           placeholder="kentvergel@subjectteacher"
           class="form-control" 
           id="password"
           name="password">
  </div>


  <button type="submit" class="btn btn-primary" style="width: 300px;"><b>Continue</b></button>

</form>

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