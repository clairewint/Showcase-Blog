<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Awesome Isolation Blog</title>
        <link rel=stylesheet href="stylesheet.css">
        <link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    </head>

    <header class="header">

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

        <div class="logo">
            <a href=""><img src="images/blog-logo-long.png" alt="logo" style="width:175px;border:0;"></a>
        </div>

        <ul class="menu">
            <div id="menu-left">
                <li><a id="item-1" href="#family">FAMILY</a></li>
                <li><a id="item-2" href="#search">FOOD</a></li>
                <li><a  id="item-3"href="#search">KEEP FIT</a></li>
                <li> <a  id="item-4"href="#search">CRAFT</a></li>
            </div>
            <div id="menu-right">
                <li><a  id="item-5"href="">My Account</a></li>
                <li><a id="log-in"  href=""> Log in </a></li>
                <li>
                    <form method="post" action="search-page.php?go" class="search-bar">
                        <input type="text" name="search" placeholder="search...">
                    </form>
                </li>
            </div>
        </ul>


    </header>


</html>






