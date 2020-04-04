<?php

   include_once '../Models/blog.php';  
   
   
   
   
////GET ALL BLOGS BY GENRE TAG
   function getAllBlogsByTag(){
       
//          if (!isset($_GET['tag']))
//      echo "errorrrrrrhere";
$tag=$_GET['tag'];

//      try{
       //$tag=$_GET['tag'];
       $blogsByGenre = Blog::getAllFromTag($tag);
       return $blogsByGenre;
//      }
//catch (Exception $ex){
//
//     echo "errorrrrrrthere";
//// }   
  
   }

  
   
   
   
////GET A SPECIFIC SUBHEADING FOR THE CORRECT GENRE   
  function getCatSubheading(){
      $tag=$_GET['tag'];
      
      if ($tag==='food'){
          return $subhead="A one stop shop of helpful recipes and resources for store cupboard and self isolation cooking.";   
      }
      if ($tag==='fitness'){
          return $subhead="Get tips on how to get moving during self-isolation, from at-home activities for kids to exercises for gym goers. ";
      }
      if ($tag==='craft'){
          return $subhead="Creative projects and new hobbies to try at home.";
      }
      if ($tag==='family'){
          return $subhead="Tips on maintaining good relations with children and partners from working from home, to keeping the family occupied.";
      }
  } 
    
   
////GET A SPECIFIC SUBTITLE FOR THE CORRECT GENRE
  function getCatSubtitle(){
      $tag=$_GET['tag'];
      
      if ($tag==='food'){
          return $subtitle="Get cooking...";   
      }
      if ($tag==='fitness'){
          return $subtitle="Keep fit...";
      }
      if ($tag==='craft'){
          return $subtitle="Get crafting...";
      }
      if ($tag==='family'){
          return $subtitle="Keep them busy...";
      }
  } 
   
   
////GET JUST A SECTION OF THE BLOG TEXT TO PREVIEW ON THE CATEGORY PAGE
function getTextExcerpt(){
    $blogsByGenre=getAllBlogsByTag();
    $string= $blogsByGenre['0']->text;
     $excerpt = substr($string,0,100);
     return $excerpt;
}