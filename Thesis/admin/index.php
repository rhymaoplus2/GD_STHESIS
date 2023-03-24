
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<style>
    
.logo
{
margin-left: 18rem;
margin-top: -5rem;


}

.logintext
{
  margin-left: -17rem;
  margin-top: -5rem;
}
.msutext
{
margin-left: 34rem;
margin-top: -5rem;
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
  <source src="../bgv.mp4" type="video/mp4">
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


<div class="content">

    <div class ="container d-flex justify-content-center
    align-items-center "
    style="min-height: 100vh" >
        <form class="border shadow p-3 rounded bg-white"
        action="php/check-login.php"
        method="post"      
        style="width: 450px;"> 
        <br>
        <br>
        <br>
        <br>
      
              <div class="logintext"><h1 class="text-center p-3">LOGIN</h1>

      
              </div>
              
              <div class = "logo"><img src="./img/msu.png" class="rounded mx-auto d-block" alt="..." style="width: 5rem;">
  
              </div>
              <br>
             
              <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
               
  <div class="mb-3">
    <label for="username" class="form-label">username</label>
    <input type="text" 
    placeholder="ex : reyris"
           class="form-control" 
           id="username"
           name="username">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">password</label>
    <input type="password" 
           placeholder=" ex : 123password"
           class="form-control" 
           id="password"
           name="password">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="link-primary" href="../index.php" display-40>
          <button type="button" class="btn btn-dark">

      Cancel

          </button>

          
</form>
              </div>





</body> 
</html>