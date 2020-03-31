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
                    <li><a class="active" href="#family">FAMILY</a></li>
                    <li><a class="active" href="#search">FOOD</a></li>
                    <li><a class="active" href="#search">KEEP FIT</a></li>
                    <li> <a class="active" href="#search">CRAFT</a></li>
</div>
 <div id="menu-right">
     <li>
         <form>
  <input type="text" name="search" placeholder="">
</form>
     </li>
                    <li><a id="log-in" class="active" href="#search"> Log in </a></li>
                    <li><a class="active" href="#search">My Account</a></li>
                
  </div>
</ul>
      </header>      <body>
 
<script>
        $("#inpt_search").on('focus', function () {
	$(this).parent('label').addClass('active');
});

$("#inpt_search").on('blur', function () {
	if($(this).val().length == 0)
		$(this).parent('label').removeClass('active');
});</script>   

        
        
        
    </body>
        

</html>






