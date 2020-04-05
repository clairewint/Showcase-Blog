
<?php
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
                <section class="intro-section">

                    <h1>Welcome to the <?php echo $_GET['tag'] ?> section...</h1>
                    <p><?php echo $subhead = getCatSubheading() ?></p>

                </section>  
                <div class="view-all">
                    <ul>
                        <li>  <h3><?php echo $subtitle = getCatSubtitle($_GET['tag']) ?></h3></li>

                    </ul>
                </div>
                <section class="main-section">



                    <div class="card">
                        <a href="#"> </a>
                        <img  class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
            echo $blogsByGenre['0']->img ?>"/> 
                        <div class="card-body">
                            <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
            echo $blogsByGenre['0']->title ?><?php $blogsByGenre = getAllBlogsByTag($_GET['tag']); ?></h4>
                            <p class="card-text"><?php
                                $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                $string = $blogsByGenre['0']->text;
                                echo $excerpt = substr($string, 0, 100);?></p>
                            <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['0']->id ?>" class="card-link">Read more</a>
                        </div>

                    </div>




                    <div class="card" >
                        <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['1']->img ?>"/> 
                        <div class="card-body">
                            <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['1']->title ?></h4>
                            <p class="card-text"><?php
                                $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                $string = $blogsByGenre['1']->text;
                                echo $excerpt = substr($string, 0, 100);?></p>
                            <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['1']->id ?>" class="card-link">Read more</a>
                        </div>
                    </div>




                    <div class="card">
                        <img class="card-img-top" alt="..." src="/showcase-blog/<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['2']->img ?>"/> 
                        <div class="card-body">
                            <h4 class="card-title"><?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['2']->title ?></h4>
                            <p class="card-text"><?php
                                $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                $string = $blogsByGenre['2']->text;
                                echo $excerpt = substr($string, 0, 100);?></p>
                            <a href="/showcase-blog/Views/blogView.php?id=<?php $blogsByGenre = getAllBlogsByTag($_GET['tag']);
                                echo $blogsByGenre['2']->id ?>">Read more</a>
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
