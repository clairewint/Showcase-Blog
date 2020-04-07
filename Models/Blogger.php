<?php

/**
 * Blogger is a child of Users class
 *
 * @author Claire Winterbottom
 */

include 'Users.php';

class Blogger extends Users{
    private $firstname;
    private $lastname;
    private $profileImg;
    private $hashed_password;
    private static $postcount; //Making these attributes static means they don't need an object to be created in order to be used.
    private static $commentcount; //This means we can make the registration page match the attributes needed in the constructor.
    
    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getPostcount() {
        return $this->postcount;
    }

    function getCommentcount() {
        return $this->commentcount;
    }

    function getProfileImg() {
        return $this->profileImg;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setPostcount($postcount) {
        $this->postcount = $postcount;
    }

    function setCommentcount($commentcount) {
        $this->commentcount = $commentcount;
    }

    function setProfileImg($profileImg) {
        $this->profileImg = $profileImg;
    }
    
    function getHashed_password() {
        return $this->hashed_password;
    }

    function setHashed_password($hashed_password) {
        $this->hashed_password = $hashed_password;
    }
    
    function __construct($username, $password, $hashed_password, $email, $usertype, $firstname, $lastname, $profileImg) {
        parent::__construct($username, $password, $email, $usertype);
        $this->firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->profileImg = $_POST['profileImg'];
        $this->userName = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
        $this->hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $this->firstName = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastName = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->userType = filter_input(INPUT_POST, 'userType', FILTER_SANITIZE_SPECIAL_CHARS);
    }
    
    public function getprofile($username){
        $db = Db::getInstance();
    
     $req = $db->prepare('SELECT user_FN,user_LN,user_IMG FROM tadb.Users WHERE user_UN=:id');
        //the query was prepared, now replace :id with the actual $id value
           $req->execute(array('id' => $username));
      // $adminprofile = $req->fetchall(PDO::FETCH_OBJ);
     $bloggerprofile = $req->fetchall(PDO::FETCH_ASSOC);
        return  $bloggerprofile;
        
    }

 //   public function __sanitise() {
 //       parent::__sanitise();
 //       $this->firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
 //       $this->lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
 //       $this->profileImg; //insert code for image upload if sanitising is needed
 //   }

}
