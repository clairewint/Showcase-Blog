<!DOCTYPE html>
<html>
<?php
    if (isset($_POST['search'])) {
    require_once "../Controllers/search-program.php";
}  
    include "../Controllers/headerController.php";
?>
    <header class="header">

        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>

        <div class="logo">
            <a href="/Showcase-Blog/Views/home.php"><img src="images/blog-logo-long.png" alt="logo" style="width:175px;border:0;"></a>
        </div>

        <ul class="menu">
            <div id="menu-left">
                <li><a id="item-1" href="/Showcase-Blog/Views/blogCatView.php?tag=family">FAMILY</a></li>
                <li><a id="item-2" href="/Showcase-Blog/Views/blogCatView.php?tag=food">FOOD</a></li>
                <li><a  id="item-3"href="/Showcase-Blog/Views/blogCatView.php?tag=fitness">KEEP FIT</a></li>
                <li> <a  id="item-4"href="/Showcase-Blog/Views/blogCatView.php?tag=craft">CRAFT</a></li>
            </div>
            <div id="menu-right">
                <li><a  id="item-5"href="<?php echo $accountAction= getAccountPage();?>">My Account</a></li>
                <li><a id="log-in"  href="<?php echo $loginAction=getLoginAction();?>"><?php echo $loginText=getLoginText();?></a></li>
                <li>
                    <form method="post" action="search-page.php" name="search" class="search-bar">
                        <input type="text" name="search" placeholder="search...">
                    </form>
                </li>
            </div>
        </ul>


    </header>


</html>






