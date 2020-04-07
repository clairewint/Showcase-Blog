<?php

////temporarily setting this manually until sessions up and running
//$_SESSION['loggedin'] = FALSE;
//$_SESSION['usertype'] = 'Blogger';


function getLoginText(){
if (!empty($_SESSION)) {
    $btntext=" Log out ";
    return $btntext;
;}elseif (empty($_SESSION)){
    $btntext=" Log in ";
    return $btntext;
}else {
        $btntext=" Log in ";
    return $btntext;
}
}

function getLoginAction(){
if (!empty($_SESSION)) {
    $action='logoutView.php';
            return $action;
}elseif (empty($_SESSION)){ 
    $action='loginView.php';
    return $action;
}else {
$action='loginView.php';
    return $action;
}
}


function getAccountPage(){
   if (empty($_SESSION)){
       $action='loginView.php';
    return $action;
   }
elseif (!empty($_SESSION) && $_SESSION["usertype"]==='Admin') {
     $action='admin-panel.php';
    return $action;
}elseif (!empty($_SESSION) && $_SESSION["usertype"]==='Blogger'){
      $action='bloggerView.php';
    return $action;
}
}