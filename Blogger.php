<?php

/**
 * Blogger is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Blogger extends Users{
    private $firstname;
    private $lastname;
    private $postcount = 0; //I've set this to 0 as this won't be art of the information included when creating a new Blogger object,
    private $commentcount = 0; //but I;m unsure if we should remove it as a property?
    private $profileImg;
    
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

    function __construct($firstname, $lastname, $postcount, $commentcount, $profileImg) {
        parent::__construct($username, $password, $email, $usertype);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->postcount = $postcount;
        $this->commentcount = $commentcount;
        $this->profileImg = $profileImg;
    }

}
