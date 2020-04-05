<?php
include_once '../Controllers/blogcatController.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="CSS/home.css">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js "  crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>

    <body>
        <div id="page-container">
            <?php
            include 'header.php';
            ?>

            <div id="content-wrap">
                <section class="intro-section">

                    <h1>A big sentence about the isolation blog...</h1>
                    <p>A subtitle line about the blog, what it does, why it's here, what you can do</p>

                </section>  

                <!-------------------------BLOG SECTION 1--------------------------->               
                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle('food') ?></h3></li>
                        <li> <a href="/Showcase-Blog/Views/blogCatView.php?tag=food"><p>View all <i class="fa fa-angle-right"></i></p></a></li> 
                    </ul>
                </div>

                
                
                
                
             
  <div class="table-container" role="table" aria-label="">
      <div class="flex-table row" role="rowgroup">  
                    
                    
             
          <div class="flex-row" role="cell">
                                <div class="card">
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
            echo $blogsByGenre['0']->id
            ?>" class="whole-card-link">
                                        <img  class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Food');
                                       echo $blogsByGenre['0']->img ?>"/> 
                                        <div class="card-body">
                                            <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Food');
                                       echo $blogsByGenre['0']->title
            ?><?php $blogsByGenre = getAllBlogsByTag('Food'); ?></h4>
                                            <p class="card-text"><?php
                                                $blogsByGenre = getAllBlogsByTag('Food');
                                                $string = $blogsByGenre['0']->text;
                                                echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                            <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
                                                echo $blogsByGenre['0']->id
                                                ?>" class="card-link">Read more</a>
                                        </div>
                                    </a>

                                </div></div>




          <div class="flex-row" role="cell">
                                <div class="card" >
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
            echo $blogsByGenre['1']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Food');
                                                echo $blogsByGenre['1']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Food');
                                                echo $blogsByGenre['1']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                            $blogsByGenre = getAllBlogsByTag('Food');
                                            $string = $blogsByGenre['1']->text;
                                            echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
                                            echo $blogsByGenre['1']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>
                                </div></div>

          <div class="flex-row" role="cell"> 
              <div class="card">
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
            echo $blogsByGenre['2']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Food');
                                         echo $blogsByGenre['2']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Food');
                                            echo $blogsByGenre['2']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                            $blogsByGenre = getAllBlogsByTag('Food');
                                            $string = $blogsByGenre['2']->text;
                                            echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Food');
                                            echo $blogsByGenre['2']->id
                                                ?>">Read more</a>
                                    </div></a>
                                </div></div>
                      
                    

</div>
  </div>
              


                <!-------------------------BLOG SECTION 2---------------------------> 

                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle('family') ?></h3></li>
                        <li> <a href="/Showcase-Blog/Views/blogCatView.php?tag=family"><p>View all <i class="fa fa-angle-right"></i></p></a></li> 
                    </ul>
                </div>
 <div class="table-container" role="table" aria-label="">
      <div class="flex-table row" role="rowgroup"> 

                <div class="flex-row" role="cell">                  
                     <div class="card">
                                   <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
            echo $blogsByGenre['0']->id
                    ?>" class="whole-card-link">
                                    <img  class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Family');
                                            echo $blogsByGenre['0']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Family');
                                           echo $blogsByGenre['0']->title
                                                ?><?php $blogsByGenre = getAllBlogsByTag('Food'); ?></h4>
                                        <p class="card-text"><?php
                                           $blogsByGenre = getAllBlogsByTag('Family');
                                           $string = $blogsByGenre['0']->text;
                                           echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
                                           echo $blogsByGenre['0']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>

                                </div></div> 




                <div class="flex-row" role="cell"> 
                                <div class="card" >
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
            echo $blogsByGenre['1']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Family');
                                           echo $blogsByGenre['1']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Family');
                                           echo $blogsByGenre['1']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                           $blogsByGenre = getAllBlogsByTag('Family');
                                           $string = $blogsByGenre['1']->text;
                                           echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
                                            echo $blogsByGenre['1']->id
                                                ?>" class="card-link">Read more</a>
                                    </div>
                                </div></div> 

                                
                                
                <div class="flex-row" role="cell"> 
                                 <div class="card">
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
            echo $blogsByGenre['2']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Family');
                                            echo $blogsByGenre['2']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Family');
                                            echo $blogsByGenre['2']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                            $blogsByGenre = getAllBlogsByTag('Family');
                                            $string = $blogsByGenre['2']->text;
                                            echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Family');
                                            echo $blogsByGenre['2']->id
                                                ?>">Read more</a>
                                    </div></a>
                                </div></div> 
                        
</div></div>


                <!-------------------------BLOG SECTION 3--------------------------->            

                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle('craft') ?></h3></li>
                        <li> <a href="/Showcase-Blog/Views/blogCatView.php?tag=craft"><p>View all <i class="fa fa-angle-right"></i></p></a></li> 
                    </ul>
                </div>
 <div class="table-container" role="table" aria-label="">
      <div class="flex-table row" role="rowgroup"> 
                <div class="flex-row" role="cell">                    
                      <div class="card">
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
            echo $blogsByGenre['0']->id
                    ?>" class="whole-card-link">
                                    <img  class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                            echo $blogsByGenre['0']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Craft');
                                            echo $blogsByGenre['0']->title
                                                ?><?php $blogsByGenre = getAllBlogsByTag('Food'); ?></h4>
                                        <p class="card-text"><?php
                                            $blogsByGenre = getAllBlogsByTag('Craft');
                                            $string = $blogsByGenre['0']->text;
                                            echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                            echo $blogsByGenre['0']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>

                                </div></div>  




                <div class="flex-row" role="cell">

                                <div class="card" >
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
            echo $blogsByGenre['1']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                            echo $blogsByGenre['1']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Craft');
                                            echo $blogsByGenre['1']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                           $blogsByGenre = getAllBlogsByTag('Craft');
                                           $string = $blogsByGenre['1']->text;
                                           echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                           echo $blogsByGenre['1']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>
                                </div></div>  

                
                
                <div class="flex-row" role="cell">   
                                 <div class="card">
                                     <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
            echo $blogsByGenre['2']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                           echo $blogsByGenre['2']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Craft');
                                           echo $blogsByGenre['2']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                           $blogsByGenre = getAllBlogsByTag('Craft');
                                           $string = $blogsByGenre['2']->text;
                                           echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Craft');
                                           echo $blogsByGenre['2']->id
                                                ?>">Read more</a>
                                    </div></a>
                                </div></div> 
                       
</div></div>


                <!-------------------------BLOG SECTION 4--------------------------->            

                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle('fitness') ?></h3></li>
                        <li> <a href="/Showcase-Blog/Views/blogCatView.php?tag=fitness"><p>View all <i class="fa fa-angle-right"></i></p></a></li> 
                    </ul>
                </div>

 <div class="table-container" role="table" aria-label="">
      <div class="flex-table row" role="rowgroup"> 
                <div class="flex-row" role="cell">                         
                                <div class="card">
 <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
            echo $blogsByGenre['0']->id
                    ?>" class="whole-card-link">
                                    <img  class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                           echo $blogsByGenre['0']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                            echo $blogsByGenre['0']->title
                                                ?><?php $blogsByGenre = getAllBlogsByTag('Fitness'); ?></h4>
                                        <p class="card-text"><?php
                                           $blogsByGenre = getAllBlogsByTag('Fitness');
                                           $string = $blogsByGenre['0']->text;
                                           echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['0']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>

                                </div></div> 




                          <div class="flex-row" role="cell">  

                                <div class="card" >
                                     <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
            echo $blogsByGenre['1']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['1']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['1']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                         $blogsByGenre = getAllBlogsByTag('Fitness');
                                         $string = $blogsByGenre['1']->text;
                                         echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['1']->id
                                                ?>" class="card-link">Read more</a>
                                    </div></a>
                                </div></div> 
                              

                             <div class="flex-row" role="cell">     
                                <div class="card">
                                    <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
            echo $blogsByGenre['1']->id
                    ?>" class="whole-card-link">
                                    <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['2']->img
                                                ?>"/> 
                                    <div class="card-body">
                                        <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag('Fitness');
                                         echo $blogsByGenre['2']->title
                                                ?></h4>
                                        <p class="card-text"><?php
                                         $blogsByGenre = getAllBlogsByTag('Fitness');
                                         $string = $blogsByGenre['2']->text;
                                         echo $excerpt = substr($string, 0, 100);
                                                ?></p>
                                        <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag('Fitness');
            echo $blogsByGenre['2']->id
                                                ?>">Read more</a>
                                    </div></a>
                                </div></div> 
                        



             
</div></div></div>

                        

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
<?php
include 'footer.php';
?>   
        
 </div>  
    </body>

</html>
