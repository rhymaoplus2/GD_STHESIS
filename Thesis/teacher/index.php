
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





body, html {
  height: 100%;
  background-image: url("bg.jpg");

/* Full height */
height: 100%;

/* Center and scale the image nicely */
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}




</style>
</head>

<body>
  <div class=""main-header>

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
             
              <?php if (isset($_GET['error'])) {?>
         

            
              <?php }
             
               ?>
               
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



  <button type="submit" id="demo5"class="btn btn-primary">Submit</button>

</form>

<button  id="pageDemo4"class="btn btn-primary">xx</button>

              </div>  

              <script type="text/javascript"> 
 
 // unblock when ajax activity stops 
 $(document).ajaxStop($.unblockUI); 

 function test() { 
     $.ajax({ url: 'wait.php', cache: false }); 
 } 

 $(document).ready(function() { 
     $('#pageDemo1').click(function() { 
         $.blockUI(); 
         test(); 
     }); 
     $('#pageDemo2').click(function() { 
         $.blockUI({ message: '<h1><img src="busy.gif" /> Just a moment...</h1>' }); 
         test(); 
     }); 
     $('#pageDemo3').click(function() { 
         $.blockUI({ css: { backgroundColor: '#f00', color: '#fff' } }); 
         test(); 
     }); 

     $('#pageDemo4').click(function() { 
         $.blockUI({ message: $('#domMessage') }); 
         test(); 
     }); 
 }); 

</script>
</script> 

... 



</body> 
</html>