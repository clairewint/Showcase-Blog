<?php

/**
 * Admin is a child of Users class
 *
 * @author Claire Winterbottom
 */
class Admin extends Users {
    private $firstname;
    private $lastname;
    
    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function __construct($firstname, $lastname) {
        parent::__construct($username, $password, $email, $usertype);
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }


}
