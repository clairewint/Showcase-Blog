<!DOCTYPE html>
<!--
Author Claire Winterbottom
-->


<html>
    <head>
        <title> Log in </title>
        <link rel=stylesheet href="../stylesheet.css">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"  crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"  crossorigin="anonymous">
    </head>
    <body>

        
        <?php
        //include "../footer.php";
        //include "../search-program.php";
       
         ?>

         
         <div class= "login_login-container">
             <div class ="login_welcome">
             <h1 class="login_sign-in">SIGN IN</h1>
             <p class="login_message">Welcome back to The Awesome Isolation Blog! <br> Sign in to comment or write a blog. <br> </p>
         </div> 
         
          
        
             <form action= "" method="post" id=form1> 

         
                 <input id="email" class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z]+.com" autofocus required>
                 <span class="error"></span>
                 <input type= "password" id="password"  class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Password" name="password"  required> 
                   <div><?php // echo $loginMsg; ?></div>
                   <p class="login_forgotten-pass"><a href="">Forgotten your password?</a></p>
                   

                 <button type="submit" id="submit" value="submit" form="form1" name='login' class="form">LOG IN</button>    
             </form>
         
              <div class="login_create-acc">
                  <button type="submit" value="register" class="login_register" id="create"> <a href="registration.php" class="login_registeracc">CREATE ACCOUNT</a></button>
              </div>


         </div>

    </body>
</html>
