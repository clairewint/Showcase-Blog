<?php
session_start ();
include '../Models/Users.php';


$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS); //change to (password_verify($_POST['password'])) when hash encoding complete


function loginRedirect(){ 
    if (empty($_SESSION)) {
        die;
    } else if (isset($_POST['username'] ) && ($_SESSION ['usertype']=== "Admin"))  {
       echo "<script> location.href='../Views/admin-panel.php';; </script>";
    } else if (isset($_POST['username'] ) && ($_SESSION ['usertype']=== "Blogger"))  {
        echo "<script> location.href='../Views/bloggerView.php';; </script>";
   }
}

?>



