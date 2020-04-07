<?php

/* 
Author: Claire Winterbottom
 */
include '../Controllers/registrationController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <!--SECTION STYLESHEET GOES HERE----><link rel=stylesheet href="CSS/login-registration.css">
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
        
        <!----page-container - This is the container that wraps the whole page including header and footer---->
        <div id="page-container">
            
            
            
            
        <!----Including the header / navigation menu------------------------------------------------->    
            <?php
           include 'header.php';
            ?>
        
        
        
        
        <!----content-wrap  - this is the container that holds just the content, minus the header & footer--->
            <div id="content-wrap">
                
                
                
                
        <!----intro-section  - if needed. This is where the page title and subheading go------------>        
            <section class="intro-section">
              <h1 class="login_sign-in">Enter your details below to start blogging.  </h1> 
            </section>
        
       
        <!----main-section  - if needed. This is where the rest of the page content goes------------> 
            
            <div class= "login_login-container">
            <div class ="login_welcome">
                
    <p>    
     
    </p><div><?php //echo $loginMsg; ?></div>
    
    <div class="login-welcome">
    <form action='../Controllers/registrationController.php' method="POST">
    <div class="pure-form pure-form-aligned" >
        <div class="pure-control-group">
            <input class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Your firstname" name='firstname' autofocus="" required=""> 
            <div class='error'>
                <?php echo $errors['firstname'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            <input class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Your surname" name='surname' required="">
            <div class='error'>
                <?php echo $errors['surname'] ?? '' ?>
            </div>
        </div>
    </div>      
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group">
            <input type="email" class="shadow-sm p-3 mb-5 bg-white rounded form" name='email' placeholder="Your email" required="">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class='error'>
                <?php echo $errors['email'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            <input class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Create a username" name='username' required="">
            <div class='error'>
                <?php echo $errors['username'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            <input type="password" class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Create a password" name='password' required="">
            <div class='error'>
                <?php echo $errors['password'] ?? '' ?>
            </div>
        </div>
    </div>
    <div class="pure-form pure-form-aligned">
        <div class="pure-control-group" >
            <input type="password" class="shadow-sm p-3 mb-5 bg-white rounded form" placeholder="Confirm your password" name='password_confirm' required="">
            <div class='error'>
                <?php echo $errors['password_confirm'] ?? '' ?>
            </div>
        </div>
    
    </div>
 <!--   <div>        
        <div class="pure-form pure-form-aligned">
            <div class="pure-control-group" >
            
            (Office only) Enter your Library code:<input class="shadow-sm p-3 mb-5 bg-white rounded form" name='lib_code' id="lib_code">
            <?php //echo $errors['lib_code'] ?? '' ?>
            </div>
            
        </div>
   </div> -->     
        <div class="pure-form pure-form-aligned container-btn">
        <button type="submit" id="submit" value="register" form="form1" name='login' class="form">REGISTER</button> 
        </div>
        </form>

</div>    
                    
                </section>
            
        
        
       <!----end of content-wrap div---------------------------------------------------------------->
            </div>
            </div>
        
        
        
        <!----Including the footer------------------------------------------------------------------>   
        <?php
        include 'footer.php';
        ?>   
        </div>
        </div>
    </body>

</html>

