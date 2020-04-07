<?php

/**
This is the model file for login and registration, where database queries are performed
 * @author Claire Winterbottom
 */

require_once '../connection.php';


class Users{
 protected $email;
 protected $username;
 protected $password;
 protected $usertype;
 
 function getEmail() {
     return $this->email;
 }

 function getUsername() {
     return $this->username;
 }

 function getPassword() {
     return $this->password;
 }

 function setEmail($email) {
     $this->email = $email;
 }

 function setUsername($username) {
     $this->username = $username;
 }

 function setPassword($password) {
     $this->password = $password;
 }

 function getUsertype() {
     return $this->usertype;
 }

 function setUsertype($usertype) {
     $this->usertype = $usertype;
 }
 
 function __construct($email, $username, $password) {
     $this->email = $email;
     $this->username = $username;
     $this->password = $password;
     $this->usertype = $usertype;
 }
 
 public function checklogin() {
    global $username;
    global $password;
    $con="";
    $stmt="";
    $user="**";
   
    if (isset($_POST['username'] ) && isset( $_POST['password'] ) ) {
        
    // Getting submitted user data from database
        $con = DB::getInstance();
        $stmt = $con->prepare("SELECT * FROM Users WHERE user_UN = ?");
        $stmt->execute([$_POST['username']]);
        $user = $stmt->fetch();

        if ($password=== $user['user_PWD'])
        {
            echo "Thanks, you're logged in!";
            $_SESSION['username'] = $user['user_UN'];
            $_SESSION['usertype'] = $user['user_TYPE'];
            $_SESSION['loggedin'] = TRUE;
        } else {
            echo "Your details do not match our records, please try again";
            session_unset();
            }
       
        }
        // Close statement
        unset($stmt);

        // Close connection
        unset($pdo);
 }
}

