 <?php

      include_once '../Models/blog.php';      


    
////READ A BLOG POST
      if (!isset($_GET['id']))
      echo "errorrrrrr";

      try{
      $blog = Blog::find($_GET['id']);
      require_once('../Views/blogView.php');
      }
catch (Exception $ex){

     echo"errorrrrrr";
 }
    
    
    

    
      
      
    
  
?>