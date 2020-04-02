<?php

/**
 * @author Claire Winterbottom
 */
class userController {

    protected $username;
    protected $password;
    protected $email;
    protected $usertype;

    function getUsername() {
        return $this->username;
    }

    function getPassword() {
        return $this->password;
    }

    function getEmail() {
        return $this->email;
    }

    function getUsertype() {
        return $this->usertype;
    }

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setUsertype($usertype) {
        $this->usertype = $usertype;
    }

    function __construct() {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->email = $_POST['email'];
        $this->usertype = $_POST['usertype'];
    }

    public function __sanitise() { //can this be combined with the constructor? Am I repeating the bringing on of the $_POST data?
        $this->username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $this->email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $this->usertype = filter_input(INPUT_POST, 'lib_code', FILTER_SANITIZE_SPECIAL_CHARS);
    }

}