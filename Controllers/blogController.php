<?php

include_once '../Models/blog.php';

////READ A BLOG POST
function getBlogPost() {
//      if (!isset($_GET['id']))
//      echo "error no id in url";
//
//      try{
    $blog = Blog::find($_GET['id']);
    //require_once('../Views/blogView.php');
    return $blog;
//      }
//catch (Exception $ex){
//
//     echo "errorrrrrr";
// }
}



function getAuthor() {
    $author = Blog::getAuthor($_GET['id']);
    $firstname = $author['0']['user_FN'];
    $lastname = $author['0']['user_LN'];
    $authorname = "$firstname" . " " . "$lastname";
    return $authorname;
}

function getAuthorPic() {
    $authorpic = Blog::getPic($_GET['id']);

    return $authorpic;
}

function displayDate(){
    $sqlfulldate = Blog::convertDate($_GET['id']);
    $sqldate = $sqlfulldate['0']['date_PUB'];
    $date = strtotime($sqldate);
    $displaydate=date('j F Y', $date);
    return $displaydate;
    }

?>