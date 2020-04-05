
<?php
session_start();
include_once '../Controllers/blogcatController.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <!--SECTION STYLESHEET GOES HERE----><link rel=stylesheet href="">
        <link rel=stylesheet href="CSS/site-wide.css">
        <link rel=stylesheet href="CSS/home.css">
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

                    <h1>Welcome to the <?php echo $_GET['tag'] ?> section...</h1>
                    <p><?php echo $subhead = getCatSubheading() ?></p>

                </section>  
                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle($_GET['tag']) ?></h3></li>

                    </ul>
                </div>
               <div class="table-container" role="table" aria-label="">
      <div class="flex-table row" role="rowgroup">  
     
      
      
      <?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);

      foreach ($blogsByGenre as $genreBlog): ?>
    
        
        <!-----one------->
        <div class="flex-row" role="cell"><div class="card">
                        <a href="/showcase-blog/Views/blogView.php?id=<?php echo $genreBlog->id?>" class="whole-card-link">
                        <img  class="card-img-top" alt="..." src="/showcase-blog/<?php echo $genreBlog->img ?>"/> 
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $genreBlog->title ?></h4>
                            <p class="card-text"><?php
                                $string = $genreBlog->text;
                                echo $excerpt = substr($string, 0, 100);?></p>
                            <a href="/showcase-blog/Views/blogView.php?id=<?php
                                echo $genreBlog->id ?>" class="card-link">Read more</a>
                        </div></a>

                    </div></div>
  
    
    
    
    
      <?php endforeach; ?>
    
      </div> 
      
  
</div>
                   
                    








                   

           
 
 

  
            </div>               

            <script>
$('.card')
    .on('mouseenter', function(){
        var div = $(this);
        div.stop(true, true).animate({ 
            margin: -10,
            width: "+=10",
            height: "+=10"
        }, 'fast');
    })
    .on('mouseleave', function(){
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
