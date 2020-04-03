<!DOCTYPE html>
<!--
Author Claire Winterbottom
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="CSS/login-registration.css">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body>

        <div id="page-container">
            <?php
            include 'header.php';
            ?>
            <div id="content-wrap">
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
                  <button type="submit" value="register" class="login_register" id="create"> <a href="registrationView.php" class="login_registeracc">CREATE ACCOUNT</a></button>
              </div>


         </div>
                </div>
       <?php
            include 'footer.php';
            ?>   
        </div>
    </body>
</html>
