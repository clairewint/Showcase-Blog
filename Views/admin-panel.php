<?php
session_start();
require_once '../Controllers/admincontroller.php';


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) && $_SESSION["usertype"] !== "Admin") {
    header("location: loginView.php");
    exit;
}
 $adminprofile=Admincontroller::getprofile($_SESSION['username']); 
 $image_path = '/Showcase-Blog/Views/';

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <!--SECTION STYLESHEET GOES HERE----><link rel=stylesheet href="">
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
        <div id="content-wrap">
            <section class="intro-section">
                
                <?php
             //   var_dump($adminprofile);
                ?>
                <div class="container-fluid">
  <div class="row">
  <div class="col-4">
      Hello <?=$adminprofile[0]['user_FN'];?>
   
  <img src="<?= $image_path. $adminprofile[0]['user_IMG'];?>" class="float-left"  style="width: 30%;border-radius: 50%;" alt="...">
  </div>
  <div class="col-8">Admin stuff</div>
</div>
                    
                    
                </div>
                
                
                
          
            </section>
        </div>
              
        
       <?php
            include 'footer.php';
            ?>   
        </div>

    </body>

</html>