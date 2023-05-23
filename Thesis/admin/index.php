
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject Teacher</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>
html, body {
  height:100%;
}

body {
  background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);
  background-size: cover;
  background-repeat: no-repeat;
}

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
    width: 550px; 

  }
  
  .link-primary {
    float: left;
  }


</style>
</head>

<body>

<div class="content">


    <div class ="container d-flex justify-content-center
    align-items-center "
    style="min-height: 100vh " >
    
        <form class="border shadow p-3 text-center  bg-white"
        action="php/check-login.php"
        method="post"      
        style="width: 450px; border-radius: 20px;"> 
<!--
  <a class="link-primary" href="../index.php" display-40>
    <b>
   
      <img src="img/back.png" class="rounded mx-auto d-block text-center" alt="..." style="display: inline-block; width: 30px; height:30px; display: inline-block;"> 
    </b>
  </a>
-->
  <span style="display: inline-block; font-size: 20px; font-family: Tahoma;">Logging in as an&nbsp;<b>&nbsp;ADMIN</b></span>
 <div class="text-center"> <span class="text-center"style="display: inline-block; font-size: 12px; font-family: Tahoma;">
  <br>*To maintain security, refrain from sharing your password with anyone </span>
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
               <br>
  <div class="mb-3">
  <label for="username" class="form-label fw-bold" style="display: inline-block; font-size: 12px; font-family: Tahoma;">Username</label>
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
              <label for="username" class="form-label fw-bold" style="display: inline-block; font-size: 12px; font-family: Tahoma;">Password</label>
    <input type="password" 
           placeholder="kentvergel@subjectteacher"
           class="form-control" 
           id="password"
           name="password">
  </div>


  <button type="submit" class="btn btn-dark text-white text-center" style="width: 300px;  
      
      background-image: linear-gradient(60deg, #29323c 0%, #485563 100%);"><b>Continue</b></button>

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