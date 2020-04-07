<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

include '../Models/Blogger.php';
include 'RegistrationValidation.php';

global $loginMsg;  
                
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$hashed_password = password_hash($password, PASSWORD_BCRYPT);
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
$lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$usertype = filter_input(INPUT_POST, 'userType', FILTER_SANITIZE_SPECIAL_CHARS);
$profileImg = 'placeholder';
 
//$blogger = new Blogger($username, $password, $email, $usertype, $firstname, $lastname, $profileImg);

        
//if (isset($_POST['submit']) && empty($errors)) { //only inserts below into DB if submit button is pressed and errors array is empty
            
                 
//        $new_mem = $con->prepare("INSERT INTO Users ( user_UN,  user_FN, user_SN, user_EMAIL, user_TYPE, user_PWD)
//              VALUES (  :username, :userfn, :userln, :email, :type, :password)");

//        $new_mem->execute([
//            'username' => $userName,
//            'password' => $hashed_password,
//            'userfn' =>  $firstName,
//            'userln' => $lastName,
//            'email' => $email,
//            'type' => $userType,
//                ]);

//        $loginMsg = '<div class="alert alert-success alert-dismissible fade show">
//                <strong> <i class="icon fa fa-check"></i> You have successfully registered! Please <a href="../Views/loginView.php" >login.</a></strong>
//             <button type="button" class="close" data-dismiss="alert">&times;</button></div>';
//        return $loginMsg;
//    }


