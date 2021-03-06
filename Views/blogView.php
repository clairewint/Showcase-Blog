  <?php 
  session_start();
 include_once '../Controllers/blogController.php';
//include_once '../Controllers/commentController.php';
  ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="CSS/blog-section.css">
        <link rel=stylesheet href="CSS/comment-section.css">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <script src="https://use.fontawesome.com/28474cfa36.js"></script>
        
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
                      
                   
       
              <div class="blog-image"> 
                <img class="blog-image-image" src="../<?php $blog=getBlogPost();echo $blog->img ?>" alt="" >
                   </div> 
                      
                      <div class="blog-header">
                         <div class="title">   <h1><?php echo $title=$blog->title ?></h1>
                    </div> 
                    <div class="blog-details"> 
                        <ul class="blog-details-list">
                            <li> <img class="author-image" src="<?php  $authorpic=getAuthorPic(); echo $authorpic['0']['user_IMG'] ?>"/></li>
                             <li> <p class="date">By <?php echo $authorname=getAuthor();?><span class="dot">&#9679</span></p></li>
                            <li> <p class="date">Published <?php echo $displaydate=displayDate() ?><span class="dot">&#9679</span></p></li>
                            <li> <p class="date"><?php $blog=getBlogPost();echo $blog->genre ?></p></li>
                           
                </ul>
            </div></div>
                </section>
        
        
        
        
        
        <!----main-section  - if needed. This is where the rest of the page content goes------------> 
                <section class="main-section">
                       
                    <div class="blog-text">  
                <p><?php $blog=getBlogPost();echo $blog->text ?></p> 
                </div>  
                    
                   
                </section>
            
         <div class="video-block"> 
                <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/<?php $blog=getBlogPost();echo $blog->video ?>" frameborder="none" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   </div> 
        
        
        
         
        <?php
            include 'commentsView.php';
            ?>
        

       <!----end of content-wrap div---------------------------------------------------------------->

       </div> 
       
        
        
        
        
        <!----Including the footer------------------------------------------------------------------>   
            <?php
            include 'footer.php';
            ?>   
        </div>

    </body>

</html>
