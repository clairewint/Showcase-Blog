<?php

/**
 * Blogger is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Blogger extends Users{
    private $firstname;
    private $lastname;
    private $profileImg;
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

    function __construct($firstname, $lastname, $profileImg) {
        parent::__construct($username, $password, $email, $usertype);
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
        $this->profileImg = $_POST['profileImg'];
    }

    public function __sanitise() {
        parent::__sanitise();
        $this->firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->profileImg; //insert code for image upload if sanitising is needed
    }

}
