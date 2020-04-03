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

    function __construct() {
        parent::__construct();
        $this->firstname = $_POST['firstname'];
        $this->lastname = $_POST['lastname'];
    }

    public function __sanitise() {
        parent::__sanitise();
        $this->firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->lastname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
