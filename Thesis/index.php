
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thesis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<style>


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

.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #99b3ff;
  width: 100%;
  padding: 20px;
}
.text{
  margin-left: 30rem;
}
.bb1{
  margin-left: 19rem;
  position: absolute;
}
.bb2{
  margin-left: 42rem;
  margin-top: ;
}
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}

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
.sub{
    
    margin-left: 13rem;
    margin-top:20rem;
}

.btn{


    background-color: transparent; 
  color: white; 
  border: 2px solid black;
  width: 15rem;
  height: 4.5rem;
  border-radius: 10rem;
  border-color: aliceblue;
font-size: 1.5rem;


}

</style>
</head>

<body>


<video autoplay muted loop id="myVideo">
  <source src="bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="content">
 
  <div class="text"><p><h3>SELECT USER TYPE</h3></p></div>
  <div class="bb1">
<a class="link" href="teacher/index.php">
<button type="button" class="btn btn-primary" justify-content-center>Adviser</button>
</a>
  </div>
  <div class="bb2">
<a class="link" href="subjectteacher/index.php">
<button type="button" class="btn btn-warning" justify-content-center>Subject Teacher</button>

</a>
  </div>
<a class="link" href="admin.php"> Login as Administrator</a>


<audio controls autoplay  hidden>
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