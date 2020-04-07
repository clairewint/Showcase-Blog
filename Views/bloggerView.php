<?php session_start();
require_once '../Controllers/bloggerController.php';

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) && $_SESSION["usertype"] !== "Blogger") {
    header("location: loginView.php");
    exit;
}
 $bloggerprofile=bloggerController::getprofile($_SESSION['username']); 
 $image_path = '/Showcase-Blog/Views/';


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="CSS/admin-account.css">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js "  crossorigin="anonymous"></script>
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
               
                <div class="table-container-intro" role="table" aria-label="">
                    <div class="flex-table row" role="rowgroup">  
                        
                        <div class="flex-row-intro" id="blogger-name" role="cell"> 
                        <h1>Hello, <?=$bloggerprofile[0]['user_FN'];?> !</h1>  
                        </div> 
                        
                        <div class="flex-row-intro" role="cell"> 
                        <img src="<?= $image_path. $bloggerprofile[0]['user_IMG'];?>" class="account-img"   alt="...">
                    
                        </div> 
                        
                  </div>
                </div>
            




                <div class="table-container" role="table" aria-label="">
                    <div class="flex-table row" role="rowgroup">  

                        
                        <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="#">
                                <div class="card-body">
                                    <img class="acc-icon" src="images/plus2.png"style="width: 70px;height: 70px;"/>
                                    <h2 class="card-title">Create a blog</h2>
                              </div>
                            </a>
                        </div></div>

                        
                        
                        
                         <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="#" >
                                <div class="card-body">
                                    <img class="acc-icon" src="images/edit.png"style="width: 70px;height: 70px;"/>   
                                    <h2 class="card-title">My blogs</h2>
                                </div></a>
                            </div>
                        </div>

                        
                        
                        
                        <div class="flex-row" role="cell">
                            <div class="card" style="width: 22rem;"><a class="acc-link" href="#" >
                                <div class="card-body">
                                      <img class="acc-icon"src="images/settings.png"style="width: 70px;height: 70px;"/> 
                                    <h2 class="card-title">Account details</h2>
                                </div></a>
                            </div>
                        </div>



 </div>
                   
</div>



                <!----end of content-wrap div---------------------------------------------------------------->
            </div> 



            <!----Including the footer------------------------------------------------------------------>   
            <?php
            include 'footer.php';
            ?>   
        

        
      <script>
                $('.card')
                        .on('mouseenter', function () {
                            var div = $(this);
                            div.stop(true, true).animate({
                                margin: -10,
                                width: "+=10",
                                height: "+=10"
                            }, 'fast');
                        })
                        .on('mouseleave', function () {
                            var div = $(this);
                            div.stop(true, true).animate({
                                margin: 0,
                                width: "-=10",
                                height: "-=10"
                            }, 'fast');
                        })
            </script>  
        
        
        
        
        
        
        
        
        
        
        
    </body>

</html>
