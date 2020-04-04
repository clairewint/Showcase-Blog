<?php

include_once 'connection.php';

/* 
FOR THE SEARCH BAR PROGRAM / FUNCTIONALITY 
 */
$searches = filter_var($_POST['search'], FILTER_SANITIZE_STRING);
$query = "SELECT * FROM `blog_posts` WHERE `Blog_TITLE` LIKE '%$searches%' OR `KEYWORDS` LIKE '%$searches%'";
$db = Db::getInstance();
$stmt = $db->prepare($query);

//$stmt ->execute(["%" . $_POST['search'] . "%"]);
$stmt ->execute(["%" . $searches . "%"]);
$results = $stmt->fetchAll();


if (isset($POST_['search'])){
    echo json_encode($results);
    /////delete if not needed - there isn't a submit button on the header search bar,
    /////but it pushes 'go' into the url on hitting enter
    
    

}
