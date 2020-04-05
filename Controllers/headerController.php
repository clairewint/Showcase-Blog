<?php

////temporarily setting this manually until sessions up and running
$_SESSION['loggedin'] = TRUE;



function getLoginText(){
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    $btntext=" Log out ";
    return $btntext;
;}elseif (!isset($_SESSION["loggedin"]) | $_SESSION["loggedin"] === false){
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
}
}