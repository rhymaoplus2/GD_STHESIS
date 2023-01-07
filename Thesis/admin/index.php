
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
body {
  background-image: url('./img/back.jpg');
             /* Full height */
  height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
hello
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
</style>
</head>

<body>

    <div class ="container d-flex justify-content-center
    align-items-center "
    style="min-height: 100vh" >
        <form class="border shadow p-3 rounded bg-white"
        action="./php/check-login.php"
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
             
              <?php if (isset($_GET['error'])) {?>
         

              <div class="alert alert-danger" role="alert">
                  <?=$_GET['error']?>
              </div>
              <?php } ?>

              
  <select class="form-select mb-2" disabled
          
          aria-label="Default select example">
   <option selected name="role"
           value="admin">ADMIN PANEL</option>
 
 
 </select>

 
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" 
    placeholder="ex : @reyris"
           class="form-control" 
           id="username"
           name="username">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" 
           placeholder="ex : @password"
           class="form-control" 
           id="password"
           name="password">
  </div>






  <button type="submit" class="btn btn-primary">Login</button>
</form>







</body> 
</html>