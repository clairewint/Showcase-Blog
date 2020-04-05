<?php

////temporarily setting this manually until sessions up and running
$_SESSION['loggedin'] = TRUE;
$_SESSION['usertype'] = 'Blogger';


function getLoginText(){
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $btntext=" Log out ";
    return $btntext;
;}elseif (!isset($_SESSION["loggedin"]) | $_SESSION["loggedin"] === false){
    $btntext=" Log in ";
    return $btntext;
}else {
        $btntext=" Log in ";
    return $btntext;
}
}

function getLoginAction(){
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $action='logoutView.php';
            return $action;
}elseif (!isset($_SESSION["loggedin"]) | $_SESSION["loggedin"] === false){ 
    $action='loginView.php';
    return $action;
}else {
$action='loginView.php';
    return $action;
}
}


function getAccountPage(){
   if (!isset($_SESSION["loggedin"]) | $_SESSION["loggedin"] === false){
       $action='loginView.php';
    return $action;
   }
elseif (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["usertype"]==='Admin') {
     $action='adminView.php';
    return $action;
}elseif (!isset($_SESSION["loggedin"]) | $_SESSION["loggedin"] === true && $_SESSION["usertype"]==='Blogger'){
      $action='bloggerView.php';
    return $action;
}
}